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
			<?php echo $this->Html->link($offer['User']['user_id'], array('controller' => 'users', 'action' => 'view', $offer['User']['user_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Offer Images'), array('controller' => 'offer_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer Image'), array('controller' => 'offer_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Offer Images');?></h3>
	<?php if (!empty($offer['OfferImage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Offer Image Id'); ?></th>
		<th><?php echo __('Image Id'); ?></th>
		<th><?php echo __('Offer Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($offer['OfferImage'] as $offerImage): ?>
		<tr>
			<td><?php echo $offerImage['offer_image_id'];?></td>
			<td><?php echo $offerImage['image_id'];?></td>
			<td><?php echo $offerImage['offer_id'];?></td>
			<td><?php echo $offerImage['is_active'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'offer_images', 'action' => 'view', $offerImage['offer_image_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'offer_images', 'action' => 'edit', $offerImage['offer_image_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'offer_images', 'action' => 'delete', $offerImage['offer_image_id']), null, __('Are you sure you want to delete # %s?', $offerImage['offer_image_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Offer Image'), array('controller' => 'offer_images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
