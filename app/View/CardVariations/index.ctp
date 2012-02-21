<div class="cardVariations index">
	<h2><?php echo __('Card Variations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('card_variation_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('card_variation_type_id');?></th>
			<th><?php echo $this->Paginator->sort('front_img');?></th>
			<th><?php echo $this->Paginator->sort('rear_img');?></th>
			<th><?php echo $this->Paginator->sort('is_base');?></th>
			<th><?php echo $this->Paginator->sort('card_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cardVariations as $cardVariation): ?>
	<tr>
		<td><?php echo h($cardVariation['CardVariation']['card_variation_id']); ?>&nbsp;</td>
		<td><?php echo h($cardVariation['CardVariation']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cardVariation['CardVariationType']['name'], array('controller' => 'card_variation_types', 'action' => 'view', $cardVariation['CardVariationType']['card_variation_type_id'])); ?>
		</td>
		<td><?php echo h($cardVariation['CardVariation']['front_img']); ?>&nbsp;</td>
		<td><?php echo h($cardVariation['CardVariation']['rear_img']); ?>&nbsp;</td>
		<td><?php echo h($cardVariation['CardVariation']['is_base']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cardVariation['Card']['name'], array('controller' => 'cards', 'action' => 'view', $cardVariation['Card']['card_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cardVariation['CardVariation']['card_variation_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cardVariation['CardVariation']['card_variation_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cardVariation['CardVariation']['card_variation_id']), null, __('Are you sure you want to delete # %s?', $cardVariation['CardVariation']['card_variation_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Card Variation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Card Variation Types'), array('controller' => 'card_variation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation Type'), array('controller' => 'card_variation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
