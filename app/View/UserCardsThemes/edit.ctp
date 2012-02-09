<div class="userCardsThemes form">
<?php echo $this->Form->create('UserCardsTheme');?>
	<fieldset>
		<legend><?php echo __('Edit User Cards Theme'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('theme_id');
		echo $this->Form->input('user_card_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserCardsTheme.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserCardsTheme.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Cards Themes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
