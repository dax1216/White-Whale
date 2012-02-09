<div class="franchises index">
	<h2><?php echo __('Franchises');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('franchise_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('nat_assoc');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($franchises as $franchise): ?>
	<tr>
		<td><?php echo h($franchise['Franchise']['franchise_id']); ?>&nbsp;</td>
		<td><?php echo h($franchise['Franchise']['name']); ?>&nbsp;</td>
		<td><?php echo h($franchise['Franchise']['nat_assoc']); ?>&nbsp;</td>
		<td><?php echo h($franchise['Franchise']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $franchise['Franchise']['franchise_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $franchise['Franchise']['franchise_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $franchise['Franchise']['franchise_id']), null, __('Are you sure you want to delete # %s?', $franchise['Franchise']['franchise_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Franchise'), array('action' => 'add')); ?></li>
	</ul>
</div>
