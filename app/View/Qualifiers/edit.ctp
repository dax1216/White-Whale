<div class="qualifiers form">
<?php echo $this->Form->create('Qualifier');?>
	<fieldset>
		<legend><?php echo __('Edit Qualifier'); ?></legend>
	<?php
		echo $this->Form->input('qualifier_id');
		echo $this->Form->input('name');
		echo $this->Form->input('UserCard');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Qualifier.qualifier_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Qualifier.qualifier_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Qualifiers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
