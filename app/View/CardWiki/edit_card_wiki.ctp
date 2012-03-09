<?php
    echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));
    echo $this->Html->css(array('jquery.fancybox-1.3.4',), null, array('inline' => false));
    echo $this->Html->script(array('jquery.easing-1.3.pack','jquery.fancybox-1.3.4.pack'), array('inline' => false));
?> 
<script type="text/javascript">    
    
    function editWikiData(data_field, obj) {
        $(obj).parent('div').hide();
        $('#' + data_field + '_view').fadeOut();
        $('#' + data_field + '_edit').fadeIn();
    }

    function popup_image(card_variation_img_id, side, orientation) {
        var width = 620;

        if(orientation == 'horizontal') {
            width = 735;
        }

        $.fancybox({
            'width'         : width,
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'type'          : 'iframe',
            'speedIn'       : 600,
            'speedOut'      : 200,
            'href'          : '/Images/card_variation_image_popup/' + card_variation_img_id + '/' + side,
            'onComplete'    : function() {
                $('#fancybox-frame').load(function() { // wait for frame to load and then gets it's height
                    $('#fancybox-content').height($(this).contents().find('body').height()+20);
                });
            }
        });
    }

    function view_hi_res(image_path) {
        $.fancybox({
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'type'          : 'image',
            'speedIn'       : 600,
            'speedOut'      : 200,
            'href'          : image_path
        });
    }

    $(document).ready( function () {
        $('.save').live('click', function (e) {
            e.preventDefault();
            
            var btn = $(this);
            
            btn.attr('disabled', 'disabled');
            btn.addClass('disabled');
            
            var textarea_id = $(this).siblings('textarea').attr('id');
            var ckeditor_data = CKEDITOR.instances[textarea_id].getData();

            var div_id = $(this).parent('div').attr('id');
            var wiki_data_field = div_id.replace('_edit', '');

            $.ajax({
                url: "/CardWiki/update_wiki_info",
                type: "POST",
                data: "wiki_data=" + encodeURIComponent(ckeditor_data),
                success: function (response) {
                    btn.removeClass('disabled');
                    $('#' + wiki_data_field + '_view').html(response);
                }
            })
        });

        $('.cancel').live('click', function (e) {
            e.preventDefault();

            var div_id = $(this).parent('div').attr('id');

            var wiki_data_field = div_id.replace('_edit', '');

            $('#' + wiki_data_field + '_edit').fadeOut();
            $('#' + wiki_data_field + '_view').fadeIn();
            $('#edit_wiki_' + wiki_data_field + '_link').show();
        });
      
    });
</script>
<div class="container">	
        <?php echo $this->Form->create('CardWikiInfo');?>
        <?php echo $this->Form->hidden('CardWikiInfo.card_wiki_info_id') ?>
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('Edit Card Wiki'); ?></h1>
	</header>
	
        <div class="spacer_20"></div>
        <div><button class="btn btn-success">Publish</button></div>
        <div class="spacer_20"></div>
	
        <section id="cardinfo" class="well">
            <div><?=$this->Html->link(__('[Edit]'), '/CardWiki/edit_card/' . $this->request->data['Card']['card_id'] ) ?></div>
            <div class="page-header">
                <h3><?php echo __( $this->request->data['Card']['name']); ?></h3>
            </div>
            <div class="row">
                <div class="span5">
                    <ul class="thumbnails">
                        <li>
                            <div class="thumbnail">
                                <div class="preview">
                                    <?= $this->Html->image("/files/card_images/card_variations/" . $card_image['CardVariationImage']['card_variation_id'] ."/thumbnail/" . $card_image['FrontImage']['file_name'], array('alt' => '',
                                                                                                            'onclick' => 'popup_image('.$card_image['CardVariationImage']['card_variation_id'].',"front","'.$card_image['FrontImage']['orientation'].'")'))?>
                                </div>
                                <div class="caption">
                                    <h5>Front</h5>
                                    <p>The front side of the card.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="thumbnail">
                                <div class="preview">
                                    <?= $this->Html->image("/files/card_images/card_variations/" . $card_image['CardVariationImage']['card_variation_id'] ."/thumbnail/" . $card_image['RearImage']['file_name'],
                                                                            array('alt' => '',
                                                                                  'onclick' => 'popup_image('.$card_image['CardVariationImage']['card_variation_id'].',"rear","'.$card_image['RearImage']['orientation'].'")'))?>
                                </div>
                                <div class="caption">
                                    <h5>Back</h5>
                                    <p>The back side of the card.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="span4">
                    <div class="page-header">
                        <h4>Card Information</h4>
                    </div>
                    <ul class="unstyled">
                        <li><strong>Set:</strong> <?php echo __( $this->request->data['Card']['SetInfo']['name']); ?></li>
                        <li><strong>ACC #:</strong> <?php echo __( $this->request->data['Card']['SetInfo']['acc_catalog_id']); ?></li>
                        <li><strong>Card #:</strong> <?php echo __( $this->request->data['Card']['card_number']); ?></li>
                        <li><strong>Player:</strong> <?php echo __( $this->request->data['Card']['PrimaryCardPlayer']['card_first_name']); ?> <?php echo __( $this->request->data['Card']['PrimaryCardPlayer']['card_last_name']); ?></li>
                        <li><strong>Name on Card:</strong> <?php echo __( $this->request->data['Card']['PrimaryCardPlayer']['card_first_name']); ?> <?php echo __( $this->request->data['Card']['PrimaryCardPlayer']["Player"]['name']); ?></li>
                        <li><strong>Team on Card:</strong> <?php //echo __( $this->request->data['Card']['PrimaryCardPlayer']['name']); ?></li>
                        <li><strong>Position on Card:</strong> <?php echo __( $this->request->data['Card']['PrimaryCardPlayer']['Position']['name']); ?></li>
                        <li><strong>Number of Variations:</strong> <?php echo count($this->request->data['Card']['CardVariation']); ?></li>
                    </ul>
                </div>
                <div class="span2">
                    <div class="page-header">
                        <h4>Wiki Page Contents</h4>
                    </div>
                    <ul class="unstyled">
                        <li><a href="#overview">Overview</a></li>
                        <li><a href="#set_info">Set Info</a></li>
                        <li><a href="#variations">Variations</a></li>
                        <li><a href="#famous_copies">Famous Copies</a></li>
                        <li><a href="#public_sales">Public Sales</a></li>                        
                    </ul>
                </div>
            </div>
	</section>
    
        <section id="wiki_overview" class="well">
            <div id="edit_wiki_overview_link">[ <a href="javascript:void(0);" onclick="editWikiData('overview', this)">Edit</a> ]</div>
            <div class="page-header">
                <a name="overview"></a>
                <h3>Overview</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <div id="overview_view">
                    <?php   echo __($this->request->data['CardWikiInfo']['overview']) ?>
                    </div>
                    <div id="overview_edit" class="hide">
                        <?php echo $this->Form->textarea('CardWikiInfo.overview'); ?>    
                        <?php echo $this->Ckeditor->load('CardWikiInfo.overview');  ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Close</button>
                    </div>
                </div>
            </div>
        </section>            
    
        <section id="set_info" class="well">
            <div class="page-header">
                <a name="set_info"></a>
                <h3>Set Info</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <dl>
                        <dt><h4>Size &amp; Make</h4></dt>
                        <dd><?php   echo __($this->request->data['Card']['SetInfo']['SetWikiInfo']['size']) ?></dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Set Production</h4></dt>
                        <dd><?php   echo __($this->request->data['Card']['SetInfo']['SetWikiInfo']['production']) ?></dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Set Distribution</h4></dt>
                        <dd><?php   echo __($this->request->data['Card']['SetInfo']['SetWikiInfo']['distribution']) ?></dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Counterfeits &amp; Reprints</h4></dt>
                        <dd><?php   echo __($this->request->data['Card']['SetInfo']['SetWikiInfo']['counterfeit']) ?></dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Set Rarity</h4></dt>
                        <dd><?php   echo __($this->request->data['Card']['SetInfo']['SetWikiInfo']['rarity']) ?></dd>
                    </dl>
                </div>
            </div>
        </section>
    
        <section id="variations" class="well">
            <div id="edit_wiki_variations_link">[ <a href="javascript:void(0);" onclick="editWikiData('variations', this)">Edit</a> ]</div>
            <div class="page-header">
                <a name="variations"></a>
                <h3>Variations</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <div id="variations_view">
                    <?php   echo __($this->request->data['CardWikiInfo']['variations']) ?>
                    </div>
                    <div id="variations_edit" class="hide">
                        <?php echo $this->Form->textarea('CardWikiInfo.variations'); ?>    
                        <?php echo $this->Ckeditor->load('CardWikiInfo.variations');  ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Close</button>
                    </div>
                </div>
                <div class="span11">
                <?php 
                
                    if(isset($this->request->data['CardVariation']) && !empty($this->request->data['CardVariation'])) {
                        echo $this->element( 'CardVariations/card_variation_list', array( 'data' => $this->request->data) );
                    } else {
                        echo '<span>(No variations)</span>';
                    }
                ?>
                </div>
            </div>
        </section>
    
        <section id="famous_copies" class="well">
            <div id="edit_wiki_famous_copies_link">[ <a href="javascript:void(0);" onclick="editWikiData('famous_copies', this)">Edit</a> ]</div>
            <div class="page-header">
                <a name="famous_copies"></a>
                <h3>Famous Copies</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <div id="famous_copies_view">
                    <?php   echo __($this->request->data['CardWikiInfo']['famous_copies']) ?>
                    </div>
                    <div id="famous_copies_edit" class="hide">
                        <?php echo $this->Form->textarea('CardWikiInfo.famous_copies'); ?>    
                        <?php echo $this->Ckeditor->load('CardWikiInfo.famousCopies');  ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Close</button>
                    </div>
                </div>
            </div>
        </section>    
    
        <section id="public_sales" class="well">
            <div id="edit_wiki_public_sales_link">[ <a href="javascript:void(0);" onclick="editWikiData('public_sales', this)">Edit</a> ]</div>
            <div class="page-header">
                <a name="public_sales"></a>
                <h3>Public sales</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <div id="public_sales_view">
                    <?php   echo __($this->request->data['CardWikiInfo']['public_sales']) ?>
                    </div>
                    <div id="public_sales_edit" class="hide">
                        <?php echo $this->Form->textarea('CardWikiInfo.public_sales'); ?>    
                        <?php echo $this->Ckeditor->load('CardWikiInfo.publicSales');  ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Close</button>
                    </div>
                </div>
            </div>
        </section> 	
<?php   echo $this->Form->end() ?>
</div>