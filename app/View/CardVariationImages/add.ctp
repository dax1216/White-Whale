<div class="cardVariationImages form">
<?php echo $this->Form->create('CardVariationImage');?>
	<fieldset>
		<legend><?php echo __('Add Card Variation Image'); ?></legend>
	<?php
		echo $this->Form->input('card_variation_id');
		echo $this->Form->input('rear_img_id');
		echo $this->Form->input('front_img_id');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Card Variation Images'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rear Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
