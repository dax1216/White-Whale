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

<?php echo $this->Form->create('Card');?>
<div class="span12">
    <h2><?php echo __('Add Card'); ?></h2>
    <div class="row-fluid">
        <fieldset>
            <div class="span4">
            <?php
                echo $this->Form->input('name');
                echo $this->Form->input('card_number');
                echo $this->Form->input('set_info_id');
                // echo $this->Form->input('card_wiki_info_id');
                echo $this->Form->input('team_id');
            ?>
            </div>
            <div class="span6">
            <?php
                echo $this->Form->input('notes', array( 'type' => 'textarea', 'style' => 'width: 550px; height: 150px;' ) );
            ?>            
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

<!---
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