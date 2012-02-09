<div class="positions form">
<?php echo $this->Form->create('Position');?>
	<fieldset>
		<legend><?php echo __('Edit Position'); ?></legend>
	<?php
		echo $this->Form->input('position_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Position.position_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Position.position_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index'));?></li>
	</ul>
</div>
