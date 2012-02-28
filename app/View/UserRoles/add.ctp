<div class="userRoles form">
<?php echo $this->Form->create('UserRole');?>
	<fieldset>
		<legend><?php echo __('Add User Role'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Roles'), array('action' => 'index'));?></li>
	</ul>
</div>
