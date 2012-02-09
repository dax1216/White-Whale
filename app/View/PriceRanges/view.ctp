<div class="priceRanges view">
<h2><?php  echo __('Price Range');?></h2>
	<dl>
		<dt><?php echo __('Price Range Id'); ?></dt>
		<dd>
			<?php echo h($priceRange['PriceRange']['price_range_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Low Value'); ?></dt>
		<dd>
			<?php echo h($priceRange['PriceRange']['low_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('High Value'); ?></dt>
		<dd>
			<?php echo h($priceRange['PriceRange']['high_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Price Range'), array('action' => 'edit', $priceRange['PriceRange']['price_range_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Price Range'), array('action' => 'delete', $priceRange['PriceRange']['price_range_id']), null, __('Are you sure you want to delete # %s?', $priceRange['PriceRange']['price_range_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Price Ranges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Price Range'), array('action' => 'add')); ?> </li>
	</ul>
</div>
