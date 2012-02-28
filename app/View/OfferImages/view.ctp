<div class="offerImages view">
<h2><?php  echo __('Offer Image');?></h2>
	<dl>
		<dt><?php echo __('Offer Image Id'); ?></dt>
		<dd>
			<?php echo h($offerImage['OfferImage']['offer_image_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo $this->Html->link($offerImage['Image']['image_id'], array('controller' => 'images', 'action' => 'view', $offerImage['Image']['image_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Offer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($offerImage['Offer']['offer_id'], array('controller' => 'offers', 'action' => 'view', $offerImage['Offer']['offer_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($offerImage['OfferImage']['is_active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Offer Image'), array('action' => 'edit', $offerImage['OfferImage']['offer_image_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Offer Image'), array('action' => 'delete', $offerImage['OfferImage']['offer_image_id']), null, __('Are you sure you want to delete # %s?', $offerImage['OfferImage']['offer_image_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Offer Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
	</ul>
</div>
