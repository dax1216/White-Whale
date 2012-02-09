<div class="gradeTypes form">
<?php echo $this->Form->create('GradeType');?>
	<fieldset>
		<legend><?php echo __('Edit Grade Type'); ?></legend>
	<?php
		echo $this->Form->input('grade_type_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GradeType.grade_type_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GradeType.grade_type_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grade Types'), array('action' => 'index'));?></li>
	</ul>
</div>
