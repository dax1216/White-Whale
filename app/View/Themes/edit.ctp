<div class="themes form">
<?php echo $this->Form->create('Theme');?>
	<fieldset>
		<legend><?php echo __('Edit Theme'); ?></legend>
	<?php
		echo $this->Form->input('theme_id');
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('UserCard');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Theme.theme_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Theme.theme_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Themes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
