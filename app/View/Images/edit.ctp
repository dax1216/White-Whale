<div class="images form">
<?php echo $this->Form->create('Image');?>
	<fieldset>
		<legend><?php echo __('Edit Image'); ?></legend>
	<?php
		echo $this->Form->input('image_id');
		echo $this->Form->input('file_name');
		echo $this->Form->input('local_file_path');
		echo $this->Form->input('cloud_file_path');
		echo $this->Form->input('width');
		echo $this->Form->input('height');
		echo $this->Form->input('size');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Image.image_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Image.image_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index'));?></li>
	</ul>
</div>