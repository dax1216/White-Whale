<div class="userCardsThemes view">
<h2><?php  echo __('User Cards Theme');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userCardsTheme['UserCardsTheme']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Theme'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCardsTheme['Theme']['name'], array('controller' => 'themes', 'action' => 'view', $userCardsTheme['Theme']['theme_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCardsTheme['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $userCardsTheme['UserCard']['user_card_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Cards Theme'), array('action' => 'edit', $userCardsTheme['UserCardsTheme']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Cards Theme'), array('action' => 'delete', $userCardsTheme['UserCardsTheme']['id']), null, __('Are you sure you want to delete # %s?', $userCardsTheme['UserCardsTheme']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards Themes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Cards Theme'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
