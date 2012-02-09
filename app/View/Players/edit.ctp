<div class="players form">
<?php echo $this->Form->create('Player');?>
	<fieldset>
		<legend><?php echo __('Edit Player'); ?></legend>
	<?php
		echo $this->Form->input('player_id');
		echo $this->Form->input('name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('nick_name');
		echo $this->Form->input('given_name');
		echo $this->Form->input('name_note');
		echo $this->Form->input('year_started');
		echo $this->Form->input('year_finished');
		echo $this->Form->input('hall_of_fame');
		echo $this->Form->input('Card');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Player.player_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Player.player_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
