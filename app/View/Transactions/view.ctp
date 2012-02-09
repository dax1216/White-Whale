<div class="transactions view">
<h2><?php  echo __('Transaction');?></h2>
	<dl>
		<dt><?php echo __('Transaction Id'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['transaction_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $transaction['UserCard']['user_card_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['User']['user_id'], array('controller' => 'users', 'action' => 'view', $transaction['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sell Price'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['sell_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is White Whale'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['is_white_whale']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sold Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['sold_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['paid_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipped Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['shipped_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Received Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['received_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Sent Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['payment_sent_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tracking Link'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['tracking_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction'), array('action' => 'edit', $transaction['Transaction']['transaction_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transaction'), array('action' => 'delete', $transaction['Transaction']['transaction_id']), null, __('Are you sure you want to delete # %s?', $transaction['Transaction']['transaction_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
