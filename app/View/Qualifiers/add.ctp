<div class="qualifiers form">
<?php echo $this->Form->create('Qualifier');?>
	<fieldset>
		<legend><?php echo __('Add Qualifier'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('UserCard');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Qualifiers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
