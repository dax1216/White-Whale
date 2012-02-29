<div class="images view">
<h2><?php  echo __('Image');?></h2>
	<dl>
		<dt><?php echo __('Image Id'); ?></dt>
		<dd>
			<?php echo h($image['Image']['image_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local File Path'); ?></dt>
		<dd>
			<?php echo h($image['Image']['local_file_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cloud File Path'); ?></dt>
		<dd>
			<?php echo h($image['Image']['cloud_file_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($image['Image']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($image['Image']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($image['Image']['size']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Image'), array('action' => 'edit', $image['Image']['image_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Image'), array('action' => 'delete', $image['Image']['image_id']), null, __('Are you sure you want to delete # %s?', $image['Image']['image_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?> </li>
	</ul>
</div>
