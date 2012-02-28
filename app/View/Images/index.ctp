<div class="images index">
	<h2><?php echo __('Images');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('image_id');?></th>
			<th><?php echo $this->Paginator->sort('file_name');?></th>
			<th><?php echo $this->Paginator->sort('local_file_path');?></th>
			<th><?php echo $this->Paginator->sort('cloud_file_path');?></th>
			<th><?php echo $this->Paginator->sort('width');?></th>
			<th><?php echo $this->Paginator->sort('height');?></th>
			<th><?php echo $this->Paginator->sort('size');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($images as $image): ?>
	<tr>
		<td><?php echo h($image['Image']['image_id']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_name']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['local_file_path']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['cloud_file_path']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['width']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['height']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['size']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $image['Image']['image_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $image['Image']['image_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $image['Image']['image_id']), null, __('Are you sure you want to delete # %s?', $image['Image']['image_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?></li>
	</ul>
</div>
