<div class="comments form">
<?php echo $this->Form->create('Comment');?>
	<fieldset>
		<legend><?php echo __('Add Comment'); ?></legend>
	<?php
		echo $this->Form->input('text');
		echo $this->Form->input('user_id');
		echo $this->Form->input('parent_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
