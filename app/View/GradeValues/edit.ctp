<div class="gradeValues form">
<?php echo $this->Form->create('GradeValue');?>
	<fieldset>
		<legend><?php echo __('Edit Grade Value'); ?></legend>
	<?php
		echo $this->Form->input('grade_value_id');
		echo $this->Form->input('name');
		echo $this->Form->input('is_raw');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GradeValue.grade_value_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GradeValue.grade_value_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grade Values'), array('action' => 'index'));?></li>
	</ul>
</div>
