<div class="cardPlayers index">
	<h2><?php echo __('Card Players');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('card_player_id');?></th>
			<th><?php echo $this->Paginator->sort('card_id');?></th>
			<th><?php echo $this->Paginator->sort('position_id');?></th>
			<th><?php echo $this->Paginator->sort('player_id');?></th>
			<th><?php echo $this->Paginator->sort('is_primary');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cardPlayers as $cardPlayer): ?>
	<tr>
		<td><?php echo h($cardPlayer['CardPlayer']['card_player_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cardPlayer['Card']['name'], array('controller' => 'cards', 'action' => 'view', $cardPlayer['Card']['card_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cardPlayer['Position']['name'], array('controller' => 'positions', 'action' => 'view', $cardPlayer['Position']['position_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cardPlayer['Player']['name'], array('controller' => 'players', 'action' => 'view', $cardPlayer['Player']['player_id'])); ?>
		</td>
		<td><?php echo h($cardPlayer['CardPlayer']['is_primary']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cardPlayer['CardPlayer']['card_player_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cardPlayer['CardPlayer']['card_player_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cardPlayer['CardPlayer']['card_player_id']), null, __('Are you sure you want to delete # %s?', $cardPlayer['CardPlayer']['card_player_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Card Player'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
