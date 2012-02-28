<div class="cardVariations view">
<h2><?php  echo __('Card Variation');?></h2>
	<dl>
		<dt><?php echo __('Card Variation Id'); ?></dt>
		<dd>
			<?php echo h($cardVariation['CardVariation']['card_variation_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cardVariation['CardVariation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardVariation['Card']['name'], array('controller' => 'cards', 'action' => 'view', $cardVariation['Card']['card_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardVariation['Variation']['name'], array('controller' => 'variations', 'action' => 'view', $cardVariation['Variation']['variation_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Base'); ?></dt>
		<dd>
			<?php echo h($cardVariation['CardVariation']['is_base']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card Variation'), array('action' => 'edit', $cardVariation['CardVariation']['card_variation_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card Variation'), array('action' => 'delete', $cardVariation['CardVariation']['card_variation_id']), null, __('Are you sure you want to delete # %s?', $cardVariation['CardVariation']['card_variation_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Variations'), array('controller' => 'variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variation'), array('controller' => 'variations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variation Images'), array('controller' => 'card_variation_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation Image'), array('controller' => 'card_variation_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Card Variation Images');?></h3>
	<?php if (!empty($cardVariation['CardVariationImage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Card Variation Image Id'); ?></th>
		<th><?php echo __('Card Variation Id'); ?></th>
		<th><?php echo __('Rear Img Id'); ?></th>
		<th><?php echo __('Front Img Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cardVariation['CardVariationImage'] as $cardVariationImage): ?>
		<tr>
			<td><?php echo $cardVariationImage['card_variation_image_id'];?></td>
			<td><?php echo $cardVariationImage['card_variation_id'];?></td>
			<td><?php echo $cardVariationImage['rear_img_id'];?></td>
			<td><?php echo $cardVariationImage['front_img_id'];?></td>
			<td><?php echo $cardVariationImage['is_active'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'card_variation_images', 'action' => 'view', $cardVariationImage['card_variation_image_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'card_variation_images', 'action' => 'edit', $cardVariationImage['card_variation_image_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'card_variation_images', 'action' => 'delete', $cardVariationImage['card_variation_image_id']), null, __('Are you sure you want to delete # %s?', $cardVariationImage['card_variation_image_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card Variation Image'), array('controller' => 'card_variation_images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
