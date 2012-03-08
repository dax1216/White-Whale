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
    
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('View Set Info Wiki'); ?></h1>
	</header>
	<section id="set_select" class="well">
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
<?php echo $this->Form->create('SetWikiInfo');?>
        <section id="set_overview" class="well">
            <div class="page-header">
                    <h3>Overview</h3>
            </div>
            
            <div class="row">
                <div class="span11">[ <a href="javascript:void(0);" onclick="editWikiData('overview')">Edit</a> ]</div>
                <div class="span11">                    
                    <div id="overview_view">
                    <?php   echo __($setWikiInfo['SetWikiInfo']['overview']) ?>
                    </div>
                    <div id="overview_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.overview'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.overview');  ?>
                        <br />
                        <button class="btn btn-success">Save</button>
                        <button class="btn btn-danger">Cancel</button>                        
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
                    <h4>Size &amp; Make:</h4>
                    <div class="pull-right">[ <a href="javascript:void(0);" onclick="editWikiData('size')">Edit</a> ]</div>
                    <div id="size_view">
                        <?php   echo __($setWikiInfo['SetWikiInfo']['size']) ?>
                    </div>
                    <div id="size_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.size'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.size');  ?>
                        <br />
                        <button class="btn btn-success">Save</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
                <div class="span11">
                    <h4>Production:</h4>
                    <div class="pull-right">[ <a href="javascript:void(0);" onclick="editWikiData('production')">Edit</a> ]</div>
                    <div id="production_view">
                        <?php   echo __($setWikiInfo['SetWikiInfo']['production']) ?>
                    </div>
                    <div id="production_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.production'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.production');  ?>
                        <br />
                        <button class="btn btn-success">Save</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
                <div class="span11">
                    <h4>Distribution:</h4>
                    <div class="pull-right">[ <a href="javascript:void(0);" onclick="editWikiData('distribution')">Edit</a> ]</div>
                    <div id="distribution_view">
                        <?php   echo __($setWikiInfo['SetWikiInfo']['distribution']) ?>
                    </div>
                    <div id="distribution_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.distribution'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.distribution');  ?>
                        <br />
                        <button class="btn btn-success">Save</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
                <div class="span11">
                    <h4>Rarity:</h4>
                    <div class="pull-right">[ <a href="javascript:void(0);" onclick="editWikiData('rarity')">Edit</a> ]</div>
                    <div id="rarity_view">
                        <?php   echo __($setWikiInfo['SetWikiInfo']['rarity']) ?>
                    </div>
                    <div id="rarity_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.rarity'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.rarity');  ?>
                    </div>
                </div>                                       
            </div>
        </section>
    
        <section id="base_set_overview" class="well">
            <div class="page-header">
                    <h3>Base Set</h3>
            </div>
            
            <div class="row">
                <div class="span11">
                    <div class="pull-right">[ <a href="javascript:void(0);" onclick="editWikiData('base_set')">Edit</a> ]</div>
                    <div id="base_set_view">
                        <?php   echo __($setWikiInfo['SetWikiInfo']['base_overview']) ?>
                    </div>
                    <div id="base_set_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.base_overview'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.base_overview');  ?>
                    </div>                    
                </div>
            </div>
        </section>
    
        <section id="variations" class="well">
            <div class="page-header">
                    <h3>Variations</h3>
            </div>
            
            <div class="row">
                <div class="span11">
                    <div class="pull-right">[ <a href="javascript:void(0);" onclick="editWikiData('variations')">Edit</a> ]</div>
                    <div id="variations_view">
                        <?php   echo __($setWikiInfo['SetWikiInfo']['variations']) ?>
                    </div>
                    <div id="variations_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.variations'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.variations');  ?>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="counterfeit" class="well">
            <div class="page-header">
                    <h3>Counterfeit &amp; Reproductions</h3>
            </div>
            
            <div class="row">
                <div class="span11">
                    <div id="counterfeit_view">
                        <?php   echo __($setWikiInfo['SetWikiInfo']['counterfeit']) ?>
                    </div>
                    <div id="counterfeit_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.counterfeit'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.counterfeit');  ?>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="famouse_copies" class="well">
            <div class="page-header">
                    <h3>Famous Examples &amp; Prices Realized</h3>
            </div>
            
            <div class="row">
                <div class="span11">
                    <div id="famous_copies_view">
                        <?php   echo __($setWikiInfo['SetWikiInfo']['famous_copies']) ?>
                    </div>
                    <div id="famous_copies_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.famous_copies'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.famousCopies');  ?>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="references" class="well">
            <div class="page-header">
                    <h3>Bibliography &amp; References</h3>
            </div>
            
            <div class="row">
                <div class="span11">
                    <div id="references_view">
                        <?php   echo __($setWikiInfo['SetWikiInfo']['references']) ?>
                    </div>
                    <div id="references_edit" class="hide">
                        <?php echo $this->Form->textarea('SetWikiInfo.famous_copies'); ?>    
                        <?php echo $this->Ckeditor->load('SetWikiInfo.famousCopies');  ?>
                    </div>
                </div>
            </div>
        </section>
    <?php echo $this->Form->end() ?>
</div>
