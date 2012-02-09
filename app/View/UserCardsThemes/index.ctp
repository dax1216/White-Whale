<div class="userCardsThemes index">
	<h2><?php echo __('User Cards Themes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('theme_id');?></th>
			<th><?php echo $this->Paginator->sort('user_card_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($userCardsThemes as $userCardsTheme): ?>
	<tr>
		<td><?php echo h($userCardsTheme['UserCardsTheme']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userCardsTheme['Theme']['name'], array('controller' => 'themes', 'action' => 'view', $userCardsTheme['Theme']['theme_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userCardsTheme['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $userCardsTheme['UserCard']['user_card_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userCardsTheme['UserCardsTheme']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userCardsTheme['UserCardsTheme']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userCardsTheme['UserCardsTheme']['id']), null, __('Are you sure you want to delete # %s?', $userCardsTheme['UserCardsTheme']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Cards Theme'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
