<div class="userRoles form">
<?php echo $this->Form->create('UserRole');?>
	<fieldset>
		<legend><?php echo __('Edit User Role'); ?></legend>
	<?php
		echo $this->Form->input('user_role_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserRole.user_role_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserRole.user_role_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Roles'), array('action' => 'index'));?></li>
	</ul>
</div>
