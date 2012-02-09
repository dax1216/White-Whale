<div class="transactions index">
	<h2><?php echo __('Transactions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('transaction_id');?></th>
			<th><?php echo $this->Paginator->sort('user_card_id');?></th>
			<th><?php echo $this->Paginator->sort('buyer_id');?></th>
			<th><?php echo $this->Paginator->sort('sell_price');?></th>
			<th><?php echo $this->Paginator->sort('is_white_whale');?></th>
			<th><?php echo $this->Paginator->sort('sold_date');?></th>
			<th><?php echo $this->Paginator->sort('paid_date');?></th>
			<th><?php echo $this->Paginator->sort('shipped_date');?></th>
			<th><?php echo $this->Paginator->sort('received_date');?></th>
			<th><?php echo $this->Paginator->sort('payment_sent_date');?></th>
			<th><?php echo $this->Paginator->sort('tracking_link');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($transactions as $transaction): ?>
	<tr>
		<td><?php echo h($transaction['Transaction']['transaction_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($transaction['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $transaction['UserCard']['user_card_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transaction['User']['user_id'], array('controller' => 'users', 'action' => 'view', $transaction['User']['user_id'])); ?>
		</td>
		<td><?php echo h($transaction['Transaction']['sell_price']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['is_white_whale']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['sold_date']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['paid_date']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['shipped_date']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['received_date']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['payment_sent_date']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['tracking_link']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['created']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transaction['Transaction']['transaction_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $transaction['Transaction']['transaction_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $transaction['Transaction']['transaction_id']), null, __('Are you sure you want to delete # %s?', $transaction['Transaction']['transaction_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
