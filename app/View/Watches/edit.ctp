<div class="watches form">
<?php echo $this->Form->create('Watch');?>
	<fieldset>
		<legend><?php echo __('Edit Watch'); ?></legend>
	<?php
		echo $this->Form->input('watch_id');
		echo $this->Form->input('user_card_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Watch.watch_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Watch.watch_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Watches'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
