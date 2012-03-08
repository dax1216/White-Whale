<?php
    echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));
?> 
<script type="text/javascript">    
    function editWikiData(data_field) {
        if($('#' + data_field + '_view').css('display') == 'none') {
            $('#' + data_field + '_edit').fadeOut();
            $('#' + data_field + '_view').fadeIn();
        } else { 
            $('#' + data_field + '_view').fadeOut();
            $('#' + data_field + '_edit').fadeIn();
        }
    }
</script>
<div class="container">	
        <?php echo $this->Form->create('CardWikiInfo');?>
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('View Card Wiki'); ?></h1>
	</header>
	<section id="wikiinfo" class="well">
            <div><button class="btn btn-success publish">Publish</button></div>
            <div class="page-header">
                    <h3><?php echo __( $cardWikiInfo['Card']['name']); ?></h3>
            </div>
            <div class="row">
                <div class="span12">
                    <strong>
                    
                    </strong>
                </div>
            </div>
	</section>
        <section id="cardinfo" class="well">
            <div>[ <?=$this->Html->link(__('Edit'), '/CardWiki/edit_card/' . $cardWikiInfo['Card']['card_id'] ) ?> ]</div>
            <div class="page-header">
                    <h3>Card Information</h3>
            </div>
            <div class="row">
                <div class="span6">
                    
                </div>
                <div class="span6">
                    <ul class="unstyled">
                        <li><strong>Set:</strong> <?php echo __( $cardWikiInfo['Card']['name']); ?></li>
                        <li><strong>ACC #:</strong> <?php echo __( $cardWikiInfo['Card']['name']); ?></li>
                        <li><strong>Card #:</strong> <?php echo __( $cardWikiInfo['Card']['name']); ?></li>
                        <li><strong>Player</strong>: <?php echo __( $cardWikiInfo['Card']['name']); ?></li>
                        <li><strong>Name on Card:</strong> <?php echo __( $cardWikiInfo['Card']['name']); ?></li>
                        <li><strong>Team on Card:</strong> <?php echo __( $cardWikiInfo['Card']['name']); ?></li>
                        <li><strong>Position on Card:</strong> <?php echo __( $cardWikiInfo['Card']['name']); ?></li>
                        <li>N<strong>umber of Variations:</strong> <?php echo __( $cardWikiInfo['Card']['name']); ?></li>
                    </ul>
                </div>
            </div>
	</section>
    
        <section id="wikipage_contents" class="well">
            <div class="page-header">
                    <h3>Wiki Page Contents</h3>
            </div>
            <div class="row">
                <div class="span6">
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
            <div>[ <a href="javascript:void(0);" onclick="editWikiData('overview')">Edit</a> ]</div>
            <div class="page-header">
                <a name="overview">
                <h3>Overview</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <div id="overview_view">
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                    </div>
                    <div id="overview_edit" class="hide">
                        <?php echo $this->Form->textarea('CardWikiInfo.overview'); ?>    
                        <?php echo $this->Ckeditor->load('CardWikiInfo.overview');  ?>
                        <br />
                        <button class="btn btn-success submit">Save</button>
                        <button class="btn btn-danger">Cancel</button> 
                    </div>
                </div>
            </div>
        </section>            
    
        <section id="set_info" class="well">
            <div class="page-header">
                <a name="set_info">
                <h3>Set Info</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <h4>Size &amp; Make</h4>
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
                <div class="span11">
                    <h4>Set Production</h4>
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
                <div class="span11">
                    <h4>Set Distribution</h4>
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
                <div class="span11">
                    <h4>Counterfeits &amp; Reprints</h4>
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
                <div class="span11">
                    <h4>Set Rarity</h4>
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
            </div>
        </section>
    
        <section id="variations" class="well">
            <div>[ <a href="javascript:void(0);" onclick="editWikiData('variations')">Edit</a> ]</div>
            <div class="page-header">
                <a name="variations">
                <h3>Variations</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <div id="variations_view"></div>
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['variations']) ?>
                    </div>
                    <div id="variations_edit" class="hide">
                        <?php echo $this->Form->textarea('CardWikiInfo.variations'); ?>    
                        <?php echo $this->Ckeditor->load('CardWikiInfo.variations');  ?>
                        <br />
                        <button class="btn btn-success">Save</button>
                        <button class="btn btn-danger">Cancel</button> 
                    </div>
                </div>
            </div>
        </section>
    
        <section id="famous_copies" class="well">
            <div>[ <a href="javascript:void(0);" onclick="editWikiData('famous_copies')">Edit</a> ]</div>
            <div class="page-header">
                <a name="famous_copies">
                <h3>Famous Copies</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <div id="famous_copies_view">
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['famous_copies']) ?>
                    </div>
                    <div id="famous_copies_edit" class="hide">
                        <?php echo $this->Form->textarea('CardWikiInfo.famous_copies'); ?>    
                        <?php echo $this->Ckeditor->load('CardWikiInfo.famousCopies');  ?>
                        <br />
                        <button class="btn btn-success submit-cardwikiinfo">Save</button>
                        <button class="btn btn-danger">Cancel</button> 
                    </div>
                </div>
            </div>
        </section>    
    
        <section id="public_sales" class="well">
            <div>[ <a href="javascript:void(0);" onclick="editWikiData('public_sales')">Edit</a> ]</div>
            <div class="page-header">
                <a name="public_sales">
                <h3>Public sales</h3>
            </div>
            
            <div class="row">                
                <div class="span11">
                    <div id="public_sales_view">
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['public_sales']) ?>
                    </div>
                    <div id="public_sales_edit" class="hide">
                        <?php echo $this->Form->textarea('CardWikiInfo.public_sales'); ?>    
                        <?php echo $this->Ckeditor->load('CardWikiInfo.publicSales');  ?>
                        <br />
                        <button class="btn btn-success submit-cardwikiinfo">Save</button>
                        <button class="btn btn-danger">Cancel</button> 
                    </div>
                </div>
            </div>
        </section> 	
</div>
