<div class="offers index">
	<h2><?php echo __('Offers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('offer_id');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('user_card_id');?></th>
			<th><?php echo $this->Paginator->sort('accepted');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($offers as $offer): ?>
	<tr>
		<td><?php echo h($offer['Offer']['offer_id']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['amount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($offer['User']['user_id'], array('controller' => 'users', 'action' => 'view', $offer['User']['user_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($offer['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $offer['UserCard']['user_card_id'])); ?>
		</td>
		<td><?php echo h($offer['Offer']['accepted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $offer['Offer']['offer_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $offer['Offer']['offer_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $offer['Offer']['offer_id']), null, __('Are you sure you want to delete # %s?', $offer['Offer']['offer_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Offer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offer Images'), array('controller' => 'offer_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer Image'), array('controller' => 'offer_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
