<div class="cardVariationImages index">
	<h2><?php echo __('Card Variation Images');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('card_variation_image_id');?></th>
			<th><?php echo $this->Paginator->sort('card_variation_id');?></th>
			<th><?php echo $this->Paginator->sort('rear_img_id');?></th>
			<th><?php echo $this->Paginator->sort('front_img_id');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cardVariationImages as $cardVariationImage): ?>
	<tr>
		<td><?php echo h($cardVariationImage['CardVariationImage']['card_variation_image_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cardVariationImage['CardVariation']['name'], array('controller' => 'card_variations', 'action' => 'view', $cardVariationImage['CardVariation']['card_variation_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cardVariationImage['RearImage']['image_id'], array('controller' => 'images', 'action' => 'view', $cardVariationImage['RearImage']['image_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cardVariationImage['FrontImage']['image_id'], array('controller' => 'images', 'action' => 'view', $cardVariationImage['FrontImage']['image_id'])); ?>
		</td>
		<td><?php echo h($cardVariationImage['CardVariationImage']['is_active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cardVariationImage['CardVariationImage']['card_variation_image_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cardVariationImage['CardVariationImage']['card_variation_image_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cardVariationImage['CardVariationImage']['card_variation_image_id']), null, __('Are you sure you want to delete # %s?', $cardVariationImage['CardVariationImage']['card_variation_image_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Card Variation Image'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rear Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
