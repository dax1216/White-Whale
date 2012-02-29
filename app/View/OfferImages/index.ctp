<div class="offerImages index">
	<h2><?php echo __('Offer Images');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('offer_image_id');?></th>
			<th><?php echo $this->Paginator->sort('image_id');?></th>
			<th><?php echo $this->Paginator->sort('offer_id');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($offerImages as $offerImage): ?>
	<tr>
		<td><?php echo h($offerImage['OfferImage']['offer_image_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($offerImage['Image']['image_id'], array('controller' => 'images', 'action' => 'view', $offerImage['Image']['image_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($offerImage['Offer']['offer_id'], array('controller' => 'offers', 'action' => 'view', $offerImage['Offer']['offer_id'])); ?>
		</td>
		<td><?php echo h($offerImage['OfferImage']['is_active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $offerImage['OfferImage']['offer_image_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $offerImage['OfferImage']['offer_image_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $offerImage['OfferImage']['offer_image_id']), null, __('Are you sure you want to delete # %s?', $offerImage['OfferImage']['offer_image_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Offer Image'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
	</ul>
</div>
