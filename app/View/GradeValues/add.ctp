<div class="gradeValues form">
<?php echo $this->Form->create('GradeValue');?>
	<fieldset>
		<legend><?php echo __('Add Grade Value'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('is_raw');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Grade Values'), array('action' => 'index'));?></li>
	</ul>
</div>
