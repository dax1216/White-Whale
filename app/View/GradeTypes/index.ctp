<div class="gradeTypes index">
	<h2><?php echo __('Grade Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('grade_type_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($gradeTypes as $gradeType): ?>
	<tr>
		<td><?php echo h($gradeType['GradeType']['grade_type_id']); ?>&nbsp;</td>
		<td><?php echo h($gradeType['GradeType']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gradeType['GradeType']['grade_type_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gradeType['GradeType']['grade_type_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gradeType['GradeType']['grade_type_id']), null, __('Are you sure you want to delete # %s?', $gradeType['GradeType']['grade_type_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grade Type'), array('action' => 'add')); ?></li>
	</ul>
</div>
