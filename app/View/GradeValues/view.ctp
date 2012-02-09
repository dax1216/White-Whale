<div class="gradeValues view">
<h2><?php  echo __('Grade Value');?></h2>
	<dl>
		<dt><?php echo __('Grade Value Id'); ?></dt>
		<dd>
			<?php echo h($gradeValue['GradeValue']['grade_value_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($gradeValue['GradeValue']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Raw'); ?></dt>
		<dd>
			<?php echo h($gradeValue['GradeValue']['is_raw']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grade Value'), array('action' => 'edit', $gradeValue['GradeValue']['grade_value_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grade Value'), array('action' => 'delete', $gradeValue['GradeValue']['grade_value_id']), null, __('Are you sure you want to delete # %s?', $gradeValue['GradeValue']['grade_value_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grade Values'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade Value'), array('action' => 'add')); ?> </li>
	</ul>
</div>
