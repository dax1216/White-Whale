<div class="cardVariationTypes view">
<h2><?php  echo __('Card Variation Type');?></h2>
	<dl>
		<dt><?php echo __('Card Variation Type Id'); ?></dt>
		<dd>
			<?php echo h($cardVariationType['CardVariationType']['card_variation_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cardVariationType['CardVariationType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card Variation Type'), array('action' => 'edit', $cardVariationType['CardVariationType']['card_variation_type_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card Variation Type'), array('action' => 'delete', $cardVariationType['CardVariationType']['card_variation_type_id']), null, __('Are you sure you want to delete # %s?', $cardVariationType['CardVariationType']['card_variation_type_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variation Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
