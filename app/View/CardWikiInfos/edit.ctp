<?php
    echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));
?> 
<div class="container">	
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('Edit Card Wiki'); ?></h1>
	</header>
        <?php echo $this->Form->create('CardWikiInfo');?>
	<section id="set_select" class="well">
            <div class="page-header">
                    <h2><?=$this->request->data['Card']['name']?></h2>
            </div>
            <div class="row">
                <div class="span12">                    
                    <fieldset>
                    <ul class="unstyled">
                        <li>
                            <div class="span10">
                                <label>Overview:</label>
                                <strong>
                                <?php echo $this->Form->textarea('CardWikiInfo.overview'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.overview');  ?> 
                                </strong>                            
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Variations Overview:</label>
                                <?php echo $this->Form->textarea('CardWikiInfo.variations'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.variations');  ?>                           
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Set Info:</label>
                                <?php echo $this->Form->textarea('CardWikiInfo.info'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.info');  ?>                           
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Production:</label>
                                <?php echo $this->Form->textarea('CardWikiInfo.production'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.production');  ?>              
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Size:</label>
                                <?php echo $this->Form->textarea('CardWikiInfo.size'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.size');  ?>                        
                            </div>
                            <div>&nbsp;</div>
                        </li>                        
                        <li>
                            <div class="span10">
                                <label>Distribution:</label>
                                <?php echo $this->Form->textarea('CardWikiInfo.distribution'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.distribution');  ?> 
                                                           
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Rarity:</label>
                                <?php echo $this->Form->textarea('CardWikiInfo.rarity'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.rarity');  ?>               
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Counterfeits &amp; Reproductions:</label>
                                <?php echo $this->Form->textarea('CardWikiInfo.counterfeit'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.counterfeit');  ?>               
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Famous Examples &amp; Prices Realized:</label>
                                <?php echo $this->Form->textarea('CardWikiInfo.famous_copies'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.famousCopies');  ?>               
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Bibliography &amp; References:</label>
                                <?php echo $this->Form->textarea('CardWikiInfo.references'); ?>    
                                <?php echo $this->Ckeditor->load('CardWikiInfo.references');  ?>               
                            </div>
                            <div>&nbsp;</div>
                        </li>
                    </ul>
                    </fieldset>
                </div>
            </div>
	</section>
        <?php echo $this->Form->end( array( 'label' => __( 'Submit' ), 'class' => 'btn btn-success' ) ); ?>
</div>