<div class="variations index">
	<h2><?php echo __('Variations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('variation_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('short_name');?></th>
			<th><?php echo $this->Paginator->sort('set_info_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($variations as $variation): ?>
	<tr>
		<td><?php echo h($variation['Variation']['variation_id']); ?>&nbsp;</td>
		<td><?php echo h($variation['Variation']['name']); ?>&nbsp;</td>
		<td><?php echo h($variation['Variation']['short_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($variation['SetInfo']['name'], array('controller' => 'set_infos', 'action' => 'view', $variation['SetInfo']['set_info_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $variation['Variation']['variation_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $variation['Variation']['variation_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $variation['Variation']['variation_id']), null, __('Are you sure you want to delete # %s?', $variation['Variation']['variation_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Variation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('controller' => 'set_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Info'), array('controller' => 'set_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
