<div class="cardVariationImages view">
<h2><?php  echo __('Card Variation Image');?></h2>
	<dl>
		<dt><?php echo __('Card Variation Image Id'); ?></dt>
		<dd>
			<?php echo h($cardVariationImage['CardVariationImage']['card_variation_image_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Variation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardVariationImage['CardVariation']['name'], array('controller' => 'card_variations', 'action' => 'view', $cardVariationImage['CardVariation']['card_variation_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rear Image'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardVariationImage['RearImage']['image_id'], array('controller' => 'images', 'action' => 'view', $cardVariationImage['RearImage']['image_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Front Image'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardVariationImage['FrontImage']['image_id'], array('controller' => 'images', 'action' => 'view', $cardVariationImage['FrontImage']['image_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($cardVariationImage['CardVariationImage']['is_active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card Variation Image'), array('action' => 'edit', $cardVariationImage['CardVariationImage']['card_variation_image_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card Variation Image'), array('action' => 'delete', $cardVariationImage['CardVariationImage']['card_variation_image_id']), null, __('Are you sure you want to delete # %s?', $cardVariationImage['CardVariationImage']['card_variation_image_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variation Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rear Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
