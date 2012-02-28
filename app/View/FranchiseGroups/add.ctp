<div class="franchiseGroups form">
<?php echo $this->Form->create('FranchiseGroup');?>
	<fieldset>
		<legend><?php echo __('Add Franchise Group'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Franchise Groups'), array('action' => 'index'));?></li>
	</ul>
</div>
