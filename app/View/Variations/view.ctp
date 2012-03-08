<div class="variations view">
<h2><?php  echo __('Variation');?></h2>
	<dl>
		<dt><?php echo __('Variation Id'); ?></dt>
		<dd>
			<?php echo h($variation['Variation']['variation_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($variation['Variation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variation Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($variation['VariationType']['name'], array('controller' => 'variation_types', 'action' => 'view', $variation['VariationType']['variation_type_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Name'); ?></dt>
		<dd>
			<?php echo h($variation['Variation']['short_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Variation'), array('action' => 'edit', $variation['Variation']['variation_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Variation'), array('action' => 'delete', $variation['Variation']['variation_id']), null, __('Are you sure you want to delete # %s?', $variation['Variation']['variation_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Variations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Variation Types'), array('controller' => 'variation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variation Type'), array('controller' => 'variation_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
