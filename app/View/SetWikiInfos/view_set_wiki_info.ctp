<?php
    echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));
?>
<script type="text/javascript">
    function editWikiData(data_field, obj) {
        $(obj).parent('div').hide();
        $('#' + data_field + '_view').fadeOut();
        $('#' + data_field + '_edit').fadeIn();
    }

    $(document).ready( function () {
        $('.save').live('click', function (e) {
            e.preventDefault();

            var textarea_id = $(this).siblings('textarea').attr('id');

            var ckeditor_data = CKEDITOR.instances[textarea_id].getData();

            var div_id = $(this).parent('div').attr('id');
            var wiki_data_field = div_id.replace('_edit', '');

            $.ajax({
                url: "/SetWikiInfos/update_wiki_info",
                type: "POST",
                data: "wiki_data=" + encodeURIComponent(ckeditor_data),
                success: function (response) {

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
<?php   echo $this->Form->create('SetWikiInfo');    ?>
<?php   echo $this->Form->hidden('SetWikiInfo.set_wiki_info_id');    ?>
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('View Set Info Wiki'); ?></h1>
	</header>
	<section id="set_select" class="well">
            <div><button class="btn btn-success publish">Publish</button></div>
            <div class="page-header">
                    <h3>
                        <?php 
                            
                        ?>
                    </h3>
            </div>
            <div class="row">
                <div class="span12">
                    <strong>
                    
                    </strong>
                </div>
            </div>
	</section>

        <section id="set_overview" class="well">
            <div id="edit_wiki_overview_link">[ <a href="javascript:void(0);" onclick="editWikiData('overview', this)">Edit</a> ]</div>
            <div class="page-header">
                    <h3>Overview</h3>
            </div>
            
            <div class="row">                
                <div class="span11">                    
                    <div id="overview_view">
                    <?php   echo __($this->request->data['SetWikiInfo']['overview']) ?>
                    </div>
                    <div id="overview_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.overview'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.overview');  ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="set_background" class="well">
            <div class="page-header">
                    <h3>Set Background</h3>
            </div>
            
            <div class="row">

                <div class="span11">
                    <dl>
                        <dt><h4>Size &amp; Make:</h4></dt>
                        <dd>
                            <div id="edit_wiki_size_link">[ <a href="javascript:void(0);" onclick="editWikiData('size', this)">Edit</a> ]</div>
                            <div id="size_view">
                                <?php   echo __($this->request->data['SetWikiInfo']['size']) ?>
                            </div>
                            <div id="size_edit" class="hide">
                                <?php echo $this->Form->textarea('SetWikiInfo.size'); ?>
                                <?php echo $this->Ckeditor->load('SetWikiInfo.size');  ?>
                                <br />
                                <button class="btn btn-success save">Save</button>
                                <button class="btn btn-danger cancel">Cancel</button>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Production:</h4></dt>
                        <dd>
                            <div id="edit_wiki_production_link">[ <a href="javascript:void(0);" onclick="editWikiData('production', this)">Edit</a> ]</div>
                            <div id="production_view">
                                <?php   echo __($this->request->data['SetWikiInfo']['production']) ?>
                            </div>
                            <div id="production_edit" class="hide">
                                <?php echo $this->Form->textarea('SetWikiInfo.production'); ?>
                                <?php echo $this->Ckeditor->load('SetWikiInfo.production');  ?>
                                <br />
                                <button class="btn btn-success save">Save</button>
                                <button class="btn btn-danger cancel">Cancel</button>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Distribution:</h4></dt>
                        <dd>
                            <div id="edit_wiki_distribution_link">[ <a href="javascript:void(0);" onclick="editWikiData('distribution', this)">Edit</a> ]</div>
                            <div id="distribution_view">
                                <?php   echo __($this->request->data['SetWikiInfo']['distribution']) ?>
                            </div>
                            <div id="distribution_edit" class="hide">
                                <?php echo $this->Form->textarea('SetWikiInfo.distribution'); ?>
                                <?php echo $this->Ckeditor->load('SetWikiInfo.distribution');  ?>
                                <br />
                                <button class="btn btn-success save">Save</button>
                                <button class="btn btn-danger cancel">Cancel</button>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Rarity:</h4></dt>
                        <dd>
                            <div id="edit_wiki_rarity_link">[ <a href="javascript:void(0);" onclick="editWikiData('rarity', this)">Edit</a> ]</div>
                            <div id="rarity_view">
                                <?php   echo __($this->request->data['SetWikiInfo']['rarity']) ?>
                            </div>
                            <div id="rarity_edit" class="hide">
                                <?php echo $this->Form->textarea('SetWikiInfo.rarity'); ?>
                                <?php echo $this->Ckeditor->load('SetWikiInfo.rarity');  ?>
                                <br />
                                <button class="btn btn-success save">Save</button>
                                <button class="btn btn-danger cancel">Cancel</button>
                            </div>
                        </dd>
                    </dl>
                </div>                                       
            </div>
        </section>
    
        <section id="base_set_overview" class="well">
            <div id="edit_wiki_base_set_link">[ <a href="javascript:void(0);" onclick="editWikiData('base_set', this)">Edit</a> ]</div>
            <div class="page-header">
                    <h3>Base Set</h3>
            </div>
            
            <div class="row">
                <div class="span11">                    
                    <div id="base_set_view">
                        <?php   echo __($this->request->data['SetWikiInfo']['base_overview']) ?>
                    </div>
                    <div id="base_set_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.base_overview'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.baseOverview');  ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Cancel</button>
                    </div>                    
                </div>
            </div>
        </section>
    
        <section id="variations" class="well">
            <div id="edit_wiki_variations_link">[ <a href="javascript:void(0);" onclick="editWikiData('variations', this)">Edit</a> ]</div>
            <div class="page-header">
                    <h3>Variations</h3>
            </div>
            
            <div class="row">
                <div class="span11">                    
                    <div id="variations_view">
                        <?php   echo __($this->request->data['SetWikiInfo']['variations']) ?>
                    </div>
                    <div id="variations_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.variations'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.variations');  ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="counterfeit" class="well">
            <div id="edit_wiki_counterfeit_link">[ <a href="javascript:void(0);" onclick="editWikiData('counterfeit', this)">Edit</a> ]</div>
            <div class="page-header">
                    <h3>Counterfeit &amp; Reproductions</h3>
            </div>
            
            <div class="row">
                <div class="span11">
                    <div id="counterfeit_view">
                        <?php   echo __($this->request->data['SetWikiInfo']['counterfeit']) ?>
                    </div>
                    <div id="counterfeit_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.counterfeit'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.counterfeit'); ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="famous_copies" class="well">
            <div id="edit_wiki_famous_copies_link">[ <a href="javascript:void(0);" onclick="editWikiData('famous_copies', this)">Edit</a> ]</div>
            <div class="page-header">
                    <h3>Famous Examples &amp; Prices Realized</h3>
            </div>
            
            <div class="row">
                <div class="span11">
                    <div id="famous_copies_view">
                        <?php   echo __($this->request->data['SetWikiInfo']['famous_copies']) ?>
                    </div>
                    <div id="famous_copies_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.famous_copies'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.famousCopies'); ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="references" class="well">
            <div id="edit_wiki_references_link">[ <a href="javascript:void(0);" onclick="editWikiData('references', this)">Edit</a> ]</div>
            <div class="page-header">
                    <h3>Bibliography &amp; References</h3>
            </div>
            
            <div class="row">
                <div class="span11">
                    <div id="references_view">
                        <?php   echo __($this->request->data['SetWikiInfo']['references']) ?>
                    </div>
                    <div id="references_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.references'); ?>
                        <?php echo $this->Ckeditor->load('SetWikiInfo.references'); ?>
                        <br />
                        <button class="btn btn-success save">Save</button>
                        <button class="btn btn-danger cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    <?php echo $this->Form->end() ?>
</div>
