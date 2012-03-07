<div class="variations form">
<?php echo $this->Form->create('Variation');?>
	<fieldset>
		<legend><?php echo __('Edit Variation'); ?></legend>
	<?php
		echo $this->Form->input('variation_id');
		echo $this->Form->input('name');
		echo $this->Form->input('variation_type_id');
		echo $this->Form->input('short_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Variation.variation_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Variation.variation_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Variations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Variation Types'), array('controller' => 'variation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variation Type'), array('controller' => 'variation_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
