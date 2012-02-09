<div class="teams view">
<h2><?php  echo __('Team');?></h2>
	<dl>
		<dt><?php echo __('Team Id'); ?></dt>
		<dd>
			<?php echo h($team['Team']['team_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($team['Team']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Franchise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($team['Franchise']['name'], array('controller' => 'franchises', 'action' => 'view', $team['Franchise']['franchise_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('League'); ?></dt>
		<dd>
			<?php echo $this->Html->link($team['League']['name'], array('controller' => 'leagues', 'action' => 'view', $team['League']['league_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ballpark'); ?></dt>
		<dd>
			<?php echo h($team['Team']['ballpark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Started'); ?></dt>
		<dd>
			<?php echo h($team['Team']['year_started']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Finished'); ?></dt>
		<dd>
			<?php echo h($team['Team']['year_finished']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Team'), array('action' => 'edit', $team['Team']['team_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Team'), array('action' => 'delete', $team['Team']['team_id']), null, __('Are you sure you want to delete # %s?', $team['Team']['team_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Franchises'), array('controller' => 'franchises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Franchise'), array('controller' => 'franchises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
