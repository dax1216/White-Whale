<div class="franchises view">
<h2><?php  echo __('Franchise');?></h2>
	<dl>
		<dt><?php echo __('Franchise Id'); ?></dt>
		<dd>
			<?php echo h($franchise['Franchise']['franchise_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($franchise['Franchise']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nat Assoc'); ?></dt>
		<dd>
			<?php echo h($franchise['Franchise']['nat_assoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($franchise['Franchise']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Franchise'), array('action' => 'edit', $franchise['Franchise']['franchise_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Franchise'), array('action' => 'delete', $franchise['Franchise']['franchise_id']), null, __('Are you sure you want to delete # %s?', $franchise['Franchise']['franchise_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Franchises'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Franchise'), array('action' => 'add')); ?> </li>
	</ul>
</div>
