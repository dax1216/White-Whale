<div class="userCardsQualifiers index">
	<h2><?php echo __('User Cards Qualifiers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_card_id');?></th>
			<th><?php echo $this->Paginator->sort('qualifier_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($userCardsQualifiers as $userCardsQualifier): ?>
	<tr>
		<td><?php echo h($userCardsQualifier['UserCardsQualifier']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userCardsQualifier['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $userCardsQualifier['UserCard']['user_card_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userCardsQualifier['Qualifier']['name'], array('controller' => 'qualifiers', 'action' => 'view', $userCardsQualifier['Qualifier']['qualifier_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userCardsQualifier['UserCardsQualifier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userCardsQualifier['UserCardsQualifier']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userCardsQualifier['UserCardsQualifier']['id']), null, __('Are you sure you want to delete # %s?', $userCardsQualifier['UserCardsQualifier']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Cards Qualifier'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifiers'), array('controller' => 'qualifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualifier'), array('controller' => 'qualifiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
