<?php 
    echo $this->Html->script( 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array( 'inline' => false ) ); 
    echo $this->Html->script( 'jquery/plugin/jquery.table.addrow.js', array( 'inline' => false ) ); 
?>

<?php echo $this->Form->create('Card');?>
<div class="cards form">
	<fieldset>
		<legend><?php echo __('Add Card'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('short_name');
		echo $this->Form->input('descriptor');
		echo $this->Form->input('card_number');
		echo $this->Form->input('set_info_id');
		echo $this->Form->input('card_wiki_info_id');
		echo $this->Form->input('franchise_group_id');
		echo $this->Form->input('team_id');
		echo $this->Form->input('notes');
	?>
	</fieldset>
</div>
<div>
    <h2><?php echo __('Card Players');?></h2>
    <table>
        <tbody>
            <tr>
                <th><?php echo __('Player');?></th>
                <th><?php echo __('Position');?></th>
                <th><?php echo __('Is Primary?');?></th>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td><?php echo $this->Form->input( 'CardPlayer.0.player_id', array( 'label' => false ) ); ?></td>
                <td><?php echo $this->Form->input( 'CardPlayer.0.position_id', array( 'label' => false )); ?></td>
                <td><?php echo $this->Form->input( 'CardPlayer.0.is_primary', array( 'label' => false, 'type' => 'checkbox', 'checked' => false )); ?></td>
                <td>
                    <div class='input'>
                        <?php echo $this->Form->button( 'Delete', array( 'type' => 'button', 'id' => 'del_player', 'class' => 'delPlayer' ) );?>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan='3'><?php echo $this->Form->button( 'Add', array( 'type' => 'button', 'id' => 'add_player', 'class' => 'addPlayer' ) );?></td>
            </tr>
        </tbody>
    </table>
    <div>
        
        <script type="text/javascript">
            (function($){
                $(document).ready(function(){
                    $(".addPlayer").btnAddRow({inputBoxAutoNumber:true},{displayRowCountTo:"rowCount"});
                    $(".delPlayer").btnDelRow();
                });
            })(jQuery);
        </script>
    </div>
</div>

<div>
    <h2><?php echo __('Card Variations');?></h2>
    <table>
        <tbody>
            <tr>
                <th><?php echo __('Name');?></th>
                <th><?php echo __('Type');?></th>
                <th><?php echo __('Front Image');?></th>
                <th><?php echo __('Rear Image');?></th>
                <th><?php echo __('Is Base?');?></th>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td><?php echo $this->Form->input( 'CardVariation.0.name', array( 'label' => false ) ); ?></td>
                <td><?php echo $this->Form->input( 'CardVariation.0.card_variation_type_id', array( 'label' => false ) ); ?></td>
                <td><?php echo $this->Form->input( 'CardVariation.0.front_img', array( 'label' => false, 'type' => 'file' ) ); ?></td>
                <td><?php echo $this->Form->input( 'CardVariation.0.rear_img', array( 'label' => false, 'type' => 'file' ) ); ?></td>
                <td><?php echo $this->Form->input( 'CardVariation.0.is_base', array( 'label' => false, 'type' => 'checkbox', 'checked' => false )); ?></td>
                <td>
                    <div class='input'>
                        <?php echo $this->Form->button( 'Delete', array( 'type' => 'button', 'id' => 'del_variant', 'class' => 'delVariant' ) );?>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan='3'><?php echo $this->Form->button( 'Add', array( 'type' => 'button', 'id' => 'add_variant', 'class' => 'addVariant' ) );?></td>
            </tr>
        </tbody>
    </table>
    <div>
        
        <script type="text/javascript">
            (function($){
                $(document).ready(function(){
                    $(".addVariant").btnAddRow({inputBoxAutoNumber:true},{displayRowCountTo:"rowCount"});
                    $(".delVariant").btnDelRow();
                });
            })(jQuery);
        </script>
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
		<li><?php echo $this->Html->link(__('List Franchise Groups'), array('controller' => 'franchise_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Franchise Group'), array('controller' => 'franchise_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Players'), array('controller' => 'card_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Players'), array('controller' => 'card_players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
	</ul>
</div>
//-->
