<div class="transactions form">
<?php echo $this->Form->create('Transaction');?>
	<fieldset>
		<legend><?php echo __('Edit Transaction'); ?></legend>
	<?php
		echo $this->Form->input('transaction_id');
		echo $this->Form->input('user_card_id');
		echo $this->Form->input('buyer_id');
		echo $this->Form->input('sell_price');
		echo $this->Form->input('is_white_whale');
		echo $this->Form->input('sold_date');
		echo $this->Form->input('paid_date');
		echo $this->Form->input('shipped_date');
		echo $this->Form->input('received_date');
		echo $this->Form->input('payment_sent_date');
		echo $this->Form->input('tracking_link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transaction.transaction_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Transaction.transaction_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
