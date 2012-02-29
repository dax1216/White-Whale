<div class="franchiseGroups form">
<?php echo $this->Form->create('FranchiseGroup');?>
	<fieldset>
		<legend><?php echo __('Edit Franchise Group'); ?></legend>
	<?php
		echo $this->Form->input('franchise_group_id');
		echo $this->Form->input('name');
		echo $this->Form->input('year_started');
		echo $this->Form->input('year_finished');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FranchiseGroup.franchise_group_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FranchiseGroup.franchise_group_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Franchise Groups'), array('action' => 'index'));?></li>
	</ul>
</div>
