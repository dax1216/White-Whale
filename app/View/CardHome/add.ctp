<?php 
    echo $this->Html->script( 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array( 'inline' => false ) ); 
    echo $this->Html->script( 'jquery/plugin/jquery.table.addrow.js', array( 'inline' => false ) ); 
?>

<script type="text/javascript">
    (function($){
        $(document).ready(function(){
            
            $(".addPlayer").btnAddRow({inputBoxAutoNumber:true},{displayRowCountTo:"rowCount"});
            $(".delPlayer").btnDelRow();
            
            $(".addVariant").btnAddRow({inputBoxAutoNumber:true},{displayRowCountTo:"rowCount"});
            $(".delVariant").btnDelRow();
        });
    })(jQuery);
</script>

<div class="container">
	<?php echo $this->Form->create('Card');?>
	<header id="title" class="jumbotron subhead">
		<h1><?php echo __('Add Card'); ?></h1>
	</header>
	<section id="set_select">
		<div class="page-header">
			<h2>
				Card Set
				<small>Select a Set the new Card belongs to.</small>
			</h2>
		</div>
		<div class="row">
			<div class="span12">
				<?php echo $this->Form->input( 'set_info', array( 'label' => false ) ); ?>
			</div>
		</div>
	</section>
	<section id="card_details">
		<div class="page-header">
			<h2>
				Card Details
				<small>Enter card details below.</small>
			</h2>
		</div>
		<div class="row">
			<div class="span4">
				<?php
					echo $this->Form->input('name');
					echo $this->Form->input('card_number');
					// echo $this->Form->input('set_info_id');
					// echo $this->Form->input('card_wiki_info_id');
					echo $this->Form->input('team_id');
					echo $this->Form->input('notes', array( 'type' => 'textarea' ) );
				?>				
			</div>
			<div class="span6">
				<h2>Card Pictures</h2>
				<p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
				<ul class="thumbnails">
					<li class="span3">
						<div class="thumbnail">
							<img alt="" src="http://placehold.it/260x180">
							<div class="caption">
								<h5>Front</h5>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p>
									<a class="btn btn-primary" href="#">Upload</a>
								</p>
							</div>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail">
							<img alt="" src="http://placehold.it/260x180">
							<div class="caption">
								<h5>Back</h5>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p>
									<a class="btn btn-primary" href="#">Action</a>
									<a class="btn" href="#">Action</a>
								</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section id="card_players">
		<div class="page-header">
			<h2>
				Card Players
				<small>Enter players found in the card here.</small>
			</h2>
		</div>
		<div class="row">
			<div class="span12">
				<table class="table table-striped table-condensed">
					<thead>
						<tr>
							<th><?php echo __('Player');?></th>
							<th><?php echo __('Firstname');?></th>
							<th><?php echo __('Lastname');?></th>
							<th><?php echo __('Team');?></th>
							<th><?php echo __('Position');?></th>
							<th><?php echo __('Is Primary?');?></th>
							<th><?php echo __('Action(s)');?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $this->Form->input( 'CardPlayer.0.player_id', array( 'label' => false ) ); ?></td>
							<td><?php echo $this->Form->input( 'name', array( 'label' => false )); ?></td>
							<td><?php echo $this->Form->input( 'name', array( 'label' => false )); ?></td>
							<td><?php echo $this->Form->input( 'team_id', array( 'label' => false )); ?></td>
							<td><?php echo $this->Form->input( 'CardPlayer.0.position_id', array( 'label' => false )); ?></td>
							<td>
								<div>
									<div class="span1">
									<?php 
										// echo $this->Form->input( 'CardPlayer.0.is_primary', array( 'label' => false )); 
										echo $this->Html->tag( 'i', '', array( 'class' => 'icon-flag' ) );
									?>
									</div>
								</div>
							</td>
							<td>
								<div class="row">
										<div class="span1">
											<?php echo $this->Form->button( $this->Html->tag( 'i', '', array( 'class' => 'icon-flag icon-white' ) ), array( 'type' => 'button', 'id' => 'primary_player', 'class' => 'primaryPlayer btn btn-success' ) );?>
										</div>
										<div class="span1">
											<?php echo $this->Form->button( $this->Html->tag( 'i', '', array( 'class' => 'icon-remove icon-white' ) ), array( 'type' => 'button', 'id' => 'del_player', 'class' => 'delPlayer btn btn-danger' ) );?>
										</div>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan='4'>
								<div>
									<?php echo $this->Form->button( $this->Html->tag( 'i', '', array( 'class' => 'icon-plus icon-white' ) ), array( 'type' => 'button', 'id' => 'add_player', 'class' => 'addPlayer btn btn-success' ) );?>
								</div>
							</td>
						</tr>
					</tbody>
				</table>				
			</div>
		</div>
	</section>	
	<?php echo $this->Form->end( array( 'label' => __( 'Submit' ), 'class' => 'btn btn-success' ) ); ?>
</div>


<!---
<?php echo $this->Form->create('Card');?>
<div class="span12">
    <h2><?php echo __('Add Card'); ?></h2>
    <div class="row-fluid">
	<?php echo $this->Form->input( 'set_info', array( 'label' => 'Select a Set:' ) ); ?>
	<?php echo $this->Form->input( 'no_a_set', array( 'type' => 'checkbox' ) ); ?>
	<hr>
    </div>
    <div class="row-fluid">
        <fieldset>
            <div class="span4">
            <?php
                echo $this->Form->input('name');
                echo $this->Form->input('card_number');
                // echo $this->Form->input('set_info_id');
                // echo $this->Form->input('card_wiki_info_id');
                echo $this->Form->input('team_id');
		echo $this->Form->input('notes', array( 'type' => 'textarea' ) );
            ?>
            </div>
            <div class="span6">
				<fieldset>
			
				</fieldset>
            </div>
        </fieldset>
    </div>
    
    <div class="row">&nbsp;</div>
    
    <div class="row">
        <div class="span6">
            <h3><?php echo __('Card Players');?></h3>
            <fieldset>
                <table class="table table-striped table-condensed">
                    <thead>
                        <tr>
                            <th><?php echo __('Player');?></th>
                            <th><?php echo __('Position');?></th>
                            <th><?php echo __('Is Primary?');?></th>
                            <th><?php echo __('Action(s)');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $this->Form->input( 'CardPlayer.0.player_id', array( 'label' => false ) ); ?></td>
                            <td><?php echo $this->Form->input( 'CardPlayer.0.position_id', array( 'label' => false )); ?></td>
                            <td><?php echo $this->Form->input( 'CardPlayer.0.is_primary', array( 'label' => false )); ?></td>
                            <td>
                                <div>
                                    <?php echo $this->Form->button( $this->Html->tag( 'i', null, array( 'class' => 'icon-remove icon-white' ) ), array( 'type' => 'button', 'id' => 'del_player', 'class' => 'delPlayer btn btn-danger' ) );?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='4'>
                                <div>
                                    <?php echo $this->Form->button( $this->Html->tag( 'i', null, array( 'class' => 'icon-plus icon-white' ) ), array( 'type' => 'button', 'id' => 'add_player', 'class' => 'addPlayer btn btn-success' ) );?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </div>
    </div>

    <div class="row">&nbsp;</div>

    <div class="row">
        <div class="span12">
            <h3><?php echo __('Card Variations');?></h3>
            <fieldset>
                <table class="table table-striped table-condensed">
                    <thead>
                        <tr>
                            <th><?php echo __('Name');?></th>
                            <th><?php echo __('Type');?></th>
                            <th><?php echo __('Front Image');?></th>
                            <th><?php echo __('Rear Image');?></th>
                            <th><?php echo __('Is Base?');?></th>
                            <th><?php echo __('Action(s)');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $this->Form->input( 'CardVariation.0.name', array( 'label' => false ) ); ?></td>
                            <td><?php echo $this->Form->input( 'CardVariation.0.card_variation_type_id', array( 'label' => false ) ); ?></td>
                            <td><?php echo $this->Form->input( 'CardVariation.0.front_img', array( 'label' => false, 'type' => 'file' ) ); ?></td>
                            <td><?php echo $this->Form->input( 'CardVariation.0.rear_img', array( 'label' => false, 'type' => 'file' ) ); ?></td>
                            <td><?php echo $this->Form->input( 'CardVariation.0.is_base', array( 'label' => false )); ?></td>
                            <td>
                                <div>
                                    <?php echo $this->Form->button( $this->Html->tag( 'i', null, array( 'class' => 'icon-remove icon-white' ) ), array( 'type' => 'button', 'id' => 'del_variant', 'class' => 'delVariant btn btn-danger' ) );?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='6'>
                                <div>
                                    <?php echo $this->Form->button( $this->Html->tag( 'i', null, array( 'class' => 'icon-plus icon-white' ) ), array( 'type' => 'button', 'id' => 'add_variant', 'class' => 'addVariant btn btn-success' ) );?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </div>
    </div>
</div>
<br />
<?php echo $this->Form->end(__('Submit'));?>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('controller' => 'set_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Info'), array('controller' => 'set_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Wiki Infos'), array('controller' => 'card_wiki_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Wiki Info'), array('controller' => 'card_wiki_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Players'), array('controller' => 'card_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Players'), array('controller' => 'card_players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
	</ul>
</div>
//-->