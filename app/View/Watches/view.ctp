<div class="watches view">
<h2><?php  echo __('Watch');?></h2>
	<dl>
		<dt><?php echo __('Watch Id'); ?></dt>
		<dd>
			<?php echo h($watch['Watch']['watch_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($watch['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $watch['UserCard']['user_card_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($watch['User']['full_name'], array('controller' => 'users', 'action' => 'view', $watch['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($watch['Watch']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($watch['Watch']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Watch'), array('action' => 'edit', $watch['Watch']['watch_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Watch'), array('action' => 'delete', $watch['Watch']['watch_id']), null, __('Are you sure you want to delete # %s?', $watch['Watch']['watch_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Watches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Watch'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
