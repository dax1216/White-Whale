<div class="players index">
	<h2><?php echo __('Players');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('player_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('nick_name');?></th>
			<th><?php echo $this->Paginator->sort('given_name');?></th>
			<th><?php echo $this->Paginator->sort('name_note');?></th>
			<th><?php echo $this->Paginator->sort('year_started');?></th>
			<th><?php echo $this->Paginator->sort('year_finished');?></th>
			<th><?php echo $this->Paginator->sort('hall_of_fame');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($players as $player): ?>
	<tr>
		<td><?php echo h($player['Player']['player_id']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['name']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['nick_name']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['given_name']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['name_note']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['year_started']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['year_finished']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['hall_of_fame']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $player['Player']['player_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $player['Player']['player_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $player['Player']['player_id']), null, __('Are you sure you want to delete # %s?', $player['Player']['player_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?></li>
	</ul>
</div>
