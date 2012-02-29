<div class="franchiseGroups view">
<h2><?php  echo __('Franchise Group');?></h2>
	<dl>
		<dt><?php echo __('Franchise Group Id'); ?></dt>
		<dd>
			<?php echo h($franchiseGroup['FranchiseGroup']['franchise_group_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($franchiseGroup['FranchiseGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Started'); ?></dt>
		<dd>
			<?php echo h($franchiseGroup['FranchiseGroup']['year_started']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Finished'); ?></dt>
		<dd>
			<?php echo h($franchiseGroup['FranchiseGroup']['year_finished']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Franchise Group'), array('action' => 'edit', $franchiseGroup['FranchiseGroup']['franchise_group_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Franchise Group'), array('action' => 'delete', $franchiseGroup['FranchiseGroup']['franchise_group_id']), null, __('Are you sure you want to delete # %s?', $franchiseGroup['FranchiseGroup']['franchise_group_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Franchise Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Franchise Group'), array('action' => 'add')); ?> </li>
	</ul>
</div>
