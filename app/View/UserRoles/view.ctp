<div class="userRoles view">
<h2><?php  echo __('User Role');?></h2>
	<dl>
		<dt><?php echo __('User Role Id'); ?></dt>
		<dd>
			<?php echo h($userRole['UserRole']['user_role_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($userRole['UserRole']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Role'), array('action' => 'edit', $userRole['UserRole']['user_role_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Role'), array('action' => 'delete', $userRole['UserRole']['user_role_id']), null, __('Are you sure you want to delete # %s?', $userRole['UserRole']['user_role_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Role'), array('action' => 'add')); ?> </li>
	</ul>
</div>
