<div class="gradeValues index">
	<h2><?php echo __('Grade Values');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('grade_value_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('is_raw');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($gradeValues as $gradeValue): ?>
	<tr>
		<td><?php echo h($gradeValue['GradeValue']['grade_value_id']); ?>&nbsp;</td>
		<td><?php echo h($gradeValue['GradeValue']['name']); ?>&nbsp;</td>
		<td><?php echo h($gradeValue['GradeValue']['is_raw']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gradeValue['GradeValue']['grade_value_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gradeValue['GradeValue']['grade_value_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gradeValue['GradeValue']['grade_value_id']), null, __('Are you sure you want to delete # %s?', $gradeValue['GradeValue']['grade_value_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grade Value'), array('action' => 'add')); ?></li>
	</ul>
</div>
