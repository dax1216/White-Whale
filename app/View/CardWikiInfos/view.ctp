<div class="container">	
    
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('View Card Wiki'); ?></h1>
	</header>
	<section id="set_select" class="well">
            <div class="page-header">
                    <h2>
                        <?php 
                            echo __( $cardWikiInfo['Card']['name']); 
                        ?>
                    </h2>
            </div>
            <div class="row">
                <div class="span12">
                    <strong>
                    
                    </strong>
                </div>
            </div>
	</section>
        <section id="wiki_overview" class="well">
            <div class="page-header">
                    <h2>Overview</h2>
            </div>
            
            <div class="row">
                <div class="span11">
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
            </div>
        </section>
    
        <section id="card_background" class="well">
            <div class="page-header">
                    <h2>Card Background</h2>
            </div>
            
            <div class="row">
                <div class="span11">
                   <ul class="thumbnails">
                        <li>
                            <div class="span10">
                                <label>Size &amp; Make:</label>
                                <?php   echo __($cardWikiInfo['CardWikiInfo']['size']) ?>
                            </div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Production:</label>
                                <?php   echo __($cardWikiInfo['CardWikiInfo']['production']) ?>
                            </div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Distribution:</label>
                                <?php   echo __($cardWikiInfo['CardWikiInfo']['distribution']) ?>
                            </div>
                        </li>
                        <li>
                            <div class="span10">
                                <label>Rarity:</label>
                                <?php   echo __($cardWikiInfo['CardWikiInfo']['rarity']) ?>
                            </div>
                        </li>
                   </ul>
                </div>
            </div>
        </section>
    
        <section id="set_info" class="well">
            <div class="page-header">
                    <h2>Set Info</h2>
            </div>
            
            <div class="row">
                <div class="span11">
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
            </div>
        </section>
    
        <section id="variations" class="well">
            <div class="page-header">
                    <h2>Variations</h2>
            </div>
            
            <div class="row">
                <div class="span11">
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
            </div>
        </section>
    
        <section id="counterfeit" class="well">
            <div class="page-header">
                    <h2>Counterfeit &amp; Reproductions</h2>
            </div>
            
            <div class="row">
                <div class="span11">
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
            </div>
        </section>
    
        <section id="prices" class="well">
            <div class="page-header">
                    <h2>Famous Examples &amp; Prices Realized</h2>
            </div>
            
            <div class="row">
                <div class="span11">
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
            </div>
        </section>
    
        <section id="references" class="well">
            <div class="page-header">
                    <h2>Bibliography &amp; References</h2>
            </div>
            
            <div class="row">
                <div class="span11">
                    <?php   echo __($cardWikiInfo['CardWikiInfo']['overview']) ?>
                </div>
            </div>
        </section>
	
</div>
