<div class="watches index">
	<h2><?php echo __('Watches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('watch_id');?></th>
			<th><?php echo $this->Paginator->sort('user_card_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($watches as $watch): ?>
	<tr>
		<td><?php echo h($watch['Watch']['watch_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($watch['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $watch['UserCard']['user_card_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($watch['User']['full_name'], array('controller' => 'users', 'action' => 'view', $watch['User']['user_id'])); ?>
		</td>
		<td><?php echo h($watch['Watch']['created']); ?>&nbsp;</td>
		<td><?php echo h($watch['Watch']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $watch['Watch']['watch_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $watch['Watch']['watch_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $watch['Watch']['watch_id']), null, __('Are you sure you want to delete # %s?', $watch['Watch']['watch_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Watch'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
