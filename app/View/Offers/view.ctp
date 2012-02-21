<div class="offers view">
<h2><?php  echo __('Offer');?></h2>
	<dl>
		<dt><?php echo __('Offer Id'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['offer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($offer['User']['full_name'], array('controller' => 'users', 'action' => 'view', $offer['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($offer['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $offer['UserCard']['user_card_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accepted'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['accepted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Offer'), array('action' => 'edit', $offer['Offer']['offer_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Offer'), array('action' => 'delete', $offer['Offer']['offer_id']), null, __('Are you sure you want to delete # %s?', $offer['Offer']['offer_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
