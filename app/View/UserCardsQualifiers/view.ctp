<div class="userCardsQualifiers view">
<h2><?php  echo __('User Cards Qualifier');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userCardsQualifier['UserCardsQualifier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCardsQualifier['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $userCardsQualifier['UserCard']['user_card_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualifier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCardsQualifier['Qualifier']['name'], array('controller' => 'qualifiers', 'action' => 'view', $userCardsQualifier['Qualifier']['qualifier_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Cards Qualifier'), array('action' => 'edit', $userCardsQualifier['UserCardsQualifier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Cards Qualifier'), array('action' => 'delete', $userCardsQualifier['UserCardsQualifier']['id']), null, __('Are you sure you want to delete # %s?', $userCardsQualifier['UserCardsQualifier']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards Qualifiers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Cards Qualifier'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifiers'), array('controller' => 'qualifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualifier'), array('controller' => 'qualifiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
