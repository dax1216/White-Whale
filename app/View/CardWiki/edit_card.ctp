<div class="container">
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('Edit Card'); ?></h1>
	</header>
	<?php echo $this->Form->create('Card'); ?>
	<section id="set_select" class="well">
            <div class="page-header">
                    <h2>
                            Card Set
                            <small>Select another Set below to move this Card to another Set.</small>
                    </h2>
            </div>
            <div class="row">
                <div class="span12">
                    <?php 
                        echo $this->Form->input( 'set_info_id', array( 'label' => false ) ); 
                    ?>
                </div>
            </div>
	</section>
	<section id="card_details" class="well">
            <div class="page-header">
                <h2>
                    Card Details
                    <small>Enter new Card details here.</small>
                </h2>
            </div>
            <div class="row">
                <div class="span4">
                    <fieldset>
                        <?php
                            echo $this->Form->input('card_id', array( 'type' => 'hidden' ) );
                        ?>
                        <ul class="unstyled">
                            <li>
                                <?php 
                                    echo $this->Form->input('name', 
                                                            array( 'class' => 'span4',
                                                                   'error' => array( 'attributes' => array( 'class' => 'label label-important' ) ) ) ); 
                                ?>
                            </li>
                            <li>
                                <?php 
                                    echo $this->Form->input('descriptor', array( 'class' => 'span4' )); 
                                ?>
                            </li>
                            <li>
                                <?php 
                                    echo $this->Form->input('card_number',  
                                                            array( 'class' => 'span3',
                                                                   'error' => array( 'attributes' => array( 'class' => 'label label-important' ) ) ) ); 
                                ?>
                            </li>
                            <li>
                                <?php 
                                    echo $this->Form->input('franchise_group_id', array( 'label' => 'Franchise', 'class' => 'span3' ) ); 
                                ?>
                            </li>
                            <li>
                                <?php  
                                    echo $this->Form->input('notes', array( 'type' => 'textarea', 'class' => 'span4' ) ); 
                                ?>
                            </li>
                        </ul>
                    </fieldset>
                </div>
            </div>
	</section>	
	<?php echo $this->Form->end( array( 'label' => __( 'Save' ), 'class' => 'btn btn-success' ) ); ?>
</div>
