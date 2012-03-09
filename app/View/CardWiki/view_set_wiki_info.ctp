<script type="text/javascript">
    
</script>
<div class="container">	
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('View Set Info Wiki'); ?></h1>
	</header>
	<div class="spacer_20"></div>
        <div><a href="/SetWikiInfo/edit_set_wiki_info/<?=$this->request->data['SetWikiInfo']['set_wiki_info_id']?>" class="btn btn-success">Edit Page</a></div>
        <div class="spacer_20"></div>

        <section id="cardinfo" class="well">
            <div><?=$this->Html->link(__('[Edit]'), '/CardWiki/edit_set/' . $this->request->data['SetInfo']['set_info_id'] ) ?></div>
            <div class="page-header">
                <h3><?php echo __( $this->request->data['SetInfo']['name']); ?></h3>
            </div>
            <div class="row">
                
                <div class="span4">
                    <div class="page-header">
                        <h4>Set Information</h4>
                    </div>
                    <ul class="unstyled">
                        <li><strong>Set:</strong> <?php echo __( $this->request->data['SetInfo']['name']); ?></li>
                        <li><strong>ACC #:</strong> <?php //echo __( $this->request->data['Card']['SetInfo']['acc_catalog_id']); ?></li>
                        <li><strong># of Base Cards in Set:</strong> <?php //echo __( $this->request->data['Card']['card_number']); ?></li>
                        <li><strong>Total Variations in Set:</strong> <?php //echo __( $this->request->data['Card']['PrimaryCardPlayer']['name']); ?></li>
                        <li><strong>Distributor:</strong> <?php //echo __( $this->request->data['Card']['PrimaryCardPlayer']['Position']['name']); ?></li>
                        <li><strong>Total # of Backs:</strong> <?php //echo count($this->request->data['Card']['CardVariation']); ?></li>
                    </ul>
                </div>
                <div class="span3">
                    <div class="page-header">
                        <h4>Wiki Page Contents</h4>
                    </div>
                    <ul class="unstyled">
                        <li><a href="#overview">Set Overview</a></li>
                        <li><a href="#set_info">Set Info</a></li>
                        <li><a href="#base_set">Base Set</a></li>
                        <li><a href="#variations">Variations</a></li>
                        <li><a href="#counterfeit">Counterfeits &amp; Reproductions</a></li>
                        <li><a href="#famous_copies">Famous Examples &amp; Prices Realized</a></li>                        
                        <li><a href="#references">Bibliography &amp; References</a></li>                        
                    </ul>
                </div>
            </div>
	</section>
        
        <section id="set_overview" class="well">            
            <div class="page-header">
                    <h3>Overview</h3>
            </div>
            
            <div class="row">                
                <div class="span11">                    
                    <div id="overview_view">
                    <?php   echo __($this->request->data['SetWikiInfo']['overview']) ?>
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
                            <div id="size_view">
                                <?php   echo __($this->request->data['SetWikiInfo']['size']) ?>
                            </div>                            
                        </dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Production:</h4></dt>
                        <dd>                            
                            <div id="production_view">
                                <?php   echo __($this->request->data['SetWikiInfo']['production']) ?>
                            </div>                            
                        </dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Distribution:</h4></dt>
                        <dd>                            
                            <div id="distribution_view">
                                <?php   echo __($this->request->data['SetWikiInfo']['distribution']) ?>
                            </div>                            
                        </dd>
                    </dl>
                </div>
                <div class="span11">
                    <dl>
                        <dt><h4>Rarity:</h4></dt>
                        <dd>                            
                            <div id="rarity_view">
                                <?php   echo __($this->request->data['SetWikiInfo']['rarity']) ?>
                            </div>                            
                        </dd>
                    </dl>
                </div>                                       
            </div>
        </section>
    
        <section id="base_set_overview" class="well">            
            <div class="page-header">
                    <h3>Base Set</h3>
            </div>
            
            <div class="row">
                <div class="span11">                    
                    <div id="base_set_view">
                        <?php   echo __($this->request->data['SetWikiInfo']['base_overview']) ?>
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
                    <div id="variations_view">
                        <?php   echo __($this->request->data['SetWikiInfo']['variations']) ?>
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
                        <?php   echo __($this->request->data['SetWikiInfo']['counterfeit']) ?>
                    </div>                    
                </div>
            </div>
        </section>
    
        <section id="famous_copies" class="well">            
            <div class="page-header">
                    <h3>Famous Examples &amp; Prices Realized</h3>
            </div>
            
            <div class="row">
                <div class="span11">
                    <div id="famous_copies_view">
                        <?php   echo __($this->request->data['SetWikiInfo']['famous_copies']) ?>
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
                        <?php   echo __($this->request->data['SetWikiInfo']['references']) ?>
                    </div>
                </div>
            </div>
        </section>
    <?php echo $this->Form->end() ?>
</div>
