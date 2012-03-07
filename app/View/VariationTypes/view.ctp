<div class="variationTypes view">
<h2><?php  echo __('Variation Type');?></h2>
	<dl>
		<dt><?php echo __('Variation Type Id'); ?></dt>
		<dd>
			<?php echo h($variationType['VariationType']['variation_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($variationType['VariationType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Variation Type'), array('action' => 'edit', $variationType['VariationType']['variation_type_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Variation Type'), array('action' => 'delete', $variationType['VariationType']['variation_type_id']), null, __('Are you sure you want to delete # %s?', $variationType['VariationType']['variation_type_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Variation Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variation Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
