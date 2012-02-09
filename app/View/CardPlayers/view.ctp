<div class="cardPlayers view">
<h2><?php  echo __('Card Player');?></h2>
	<dl>
		<dt><?php echo __('Card Player Id'); ?></dt>
		<dd>
			<?php echo h($cardPlayer['CardPlayer']['card_player_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardPlayer['Card']['name'], array('controller' => 'cards', 'action' => 'view', $cardPlayer['Card']['card_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardPlayer['Position']['name'], array('controller' => 'positions', 'action' => 'view', $cardPlayer['Position']['position_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cardPlayer['Player']['name'], array('controller' => 'players', 'action' => 'view', $cardPlayer['Player']['player_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Primary'); ?></dt>
		<dd>
			<?php echo h($cardPlayer['CardPlayer']['is_primary']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card Player'), array('action' => 'edit', $cardPlayer['CardPlayer']['card_player_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card Player'), array('action' => 'delete', $cardPlayer['CardPlayer']['card_player_id']), null, __('Are you sure you want to delete # %s?', $cardPlayer['CardPlayer']['card_player_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
