<div class="players view">
<h2><?php  echo __('Player');?></h2>
	<dl>
		<dt><?php echo __('Player Id'); ?></dt>
		<dd>
			<?php echo h($player['Player']['player_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($player['Player']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($player['Player']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($player['Player']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nick Name'); ?></dt>
		<dd>
			<?php echo h($player['Player']['nick_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Given Name'); ?></dt>
		<dd>
			<?php echo h($player['Player']['given_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Note'); ?></dt>
		<dd>
			<?php echo h($player['Player']['name_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Started'); ?></dt>
		<dd>
			<?php echo h($player['Player']['year_started']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Finished'); ?></dt>
		<dd>
			<?php echo h($player['Player']['year_finished']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hall Of Fame'); ?></dt>
		<dd>
			<?php echo h($player['Player']['hall_of_fame']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player'), array('action' => 'edit', $player['Player']['player_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player'), array('action' => 'delete', $player['Player']['player_id']), null, __('Are you sure you want to delete # %s?', $player['Player']['player_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?> </li>
	</ul>
</div>
