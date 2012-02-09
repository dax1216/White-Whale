<div class="teams index">
	<h2><?php echo __('Teams');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('team_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('franchise_id');?></th>
			<th><?php echo $this->Paginator->sort('league_id');?></th>
			<th><?php echo $this->Paginator->sort('ballpark');?></th>
			<th><?php echo $this->Paginator->sort('year_started');?></th>
			<th><?php echo $this->Paginator->sort('year_finished');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($teams as $team): ?>
	<tr>
		<td><?php echo h($team['Team']['team_id']); ?>&nbsp;</td>
		<td><?php echo h($team['Team']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($team['Franchise']['name'], array('controller' => 'franchises', 'action' => 'view', $team['Franchise']['franchise_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($team['League']['name'], array('controller' => 'leagues', 'action' => 'view', $team['League']['league_id'])); ?>
		</td>
		<td><?php echo h($team['Team']['ballpark']); ?>&nbsp;</td>
		<td><?php echo h($team['Team']['year_started']); ?>&nbsp;</td>
		<td><?php echo h($team['Team']['year_finished']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $team['Team']['team_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $team['Team']['team_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $team['Team']['team_id']), null, __('Are you sure you want to delete # %s?', $team['Team']['team_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Team'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Franchises'), array('controller' => 'franchises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Franchise'), array('controller' => 'franchises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
