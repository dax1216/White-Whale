<div class="gradeTypes view">
<h2><?php  echo __('Grade Type');?></h2>
	<dl>
		<dt><?php echo __('Grade Type Id'); ?></dt>
		<dd>
			<?php echo h($gradeType['GradeType']['grade_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($gradeType['GradeType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grade Type'), array('action' => 'edit', $gradeType['GradeType']['grade_type_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grade Type'), array('action' => 'delete', $gradeType['GradeType']['grade_type_id']), null, __('Are you sure you want to delete # %s?', $gradeType['GradeType']['grade_type_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grade Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
