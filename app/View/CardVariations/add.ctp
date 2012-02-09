<div class="cardVariations form">
<?php echo $this->Form->create('CardVariation');?>
	<fieldset>
		<legend><?php echo __('Add Card Variation'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('front_img');
		echo $this->Form->input('rear_img');
		echo $this->Form->input('is_base');
		echo $this->Form->input('card_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Card Variations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
