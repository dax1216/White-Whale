<div class="userCardsQualifiers form">
<?php echo $this->Form->create('UserCardsQualifier');?>
	<fieldset>
		<legend><?php echo __('Edit User Cards Qualifier'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_card_id');
		echo $this->Form->input('qualifier_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserCardsQualifier.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserCardsQualifier.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Cards Qualifiers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifiers'), array('controller' => 'qualifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualifier'), array('controller' => 'qualifiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
