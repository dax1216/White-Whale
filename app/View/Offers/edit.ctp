<div class="offers form">
<?php echo $this->Form->create('Offer');?>
	<fieldset>
		<legend><?php echo __('Edit Offer'); ?></legend>
	<?php
		echo $this->Form->input('offer_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('user_id');
		echo $this->Form->input('user_card_id');
		echo $this->Form->input('accepted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Offer.offer_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Offer.offer_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Offers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offer Images'), array('controller' => 'offer_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer Image'), array('controller' => 'offer_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
