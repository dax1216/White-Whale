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
		<dt><?php echo __('Card Variation Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardVariation['CardVariationType']['name'], array('controller' => 'card_variation_types', 'action' => 'view', $cardVariation['CardVariationType']['card_variation_type_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Front Img'); ?></dt>
		<dd>
			<?php echo h($cardVariation['CardVariation']['front_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rear Img'); ?></dt>
		<dd>
			<?php echo h($cardVariation['CardVariation']['rear_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Base'); ?></dt>
		<dd>
			<?php echo h($cardVariation['CardVariation']['is_base']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardVariation['Card']['name'], array('controller' => 'cards', 'action' => 'view', $cardVariation['Card']['card_id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Card Variation Types'), array('controller' => 'card_variation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation Type'), array('controller' => 'card_variation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
