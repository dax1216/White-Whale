<div class="cardVariations form">
<?php echo $this->Form->create('CardVariation');?>
	<fieldset>
		<legend><?php echo __('Edit Card Variation'); ?></legend>
	<?php
		echo $this->Form->input('card_variation_id');
		echo $this->Form->input('name');
		echo $this->Form->input('card_id');
		echo $this->Form->input('variation_id');
		echo $this->Form->input('is_base');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CardVariation.card_variation_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CardVariation.card_variation_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Variations'), array('controller' => 'variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variation'), array('controller' => 'variations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variation Images'), array('controller' => 'card_variation_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation Image'), array('controller' => 'card_variation_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
