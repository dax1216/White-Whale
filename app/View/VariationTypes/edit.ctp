<div class="variationTypes form">
<?php echo $this->Form->create('VariationType');?>
	<fieldset>
		<legend><?php echo __('Edit Variation Type'); ?></legend>
	<?php
		echo $this->Form->input('variation_type_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('VariationType.variation_type_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('VariationType.variation_type_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Variation Types'), array('action' => 'index'));?></li>
	</ul>
</div>
