<div class="cards view">
<h2><?php  echo __('Card');?></h2>
	<dl>
		<dt><?php echo __('Card Id'); ?></dt>
		<dd>
			<?php echo h($card['Card']['card_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($card['Card']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Number'); ?></dt>
		<dd>
			<?php echo h($card['Card']['card_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Set Info'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['SetInfo']['set_info_id'], array('controller' => 'set_infos', 'action' => 'view', $card['SetInfo']['set_info_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wiki Info'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['WikiInfo']['wiki_info_id'], array('controller' => 'wiki_infos', 'action' => 'view', $card['WikiInfo']['wiki_info_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['Team']['name'], array('controller' => 'teams', 'action' => 'view', $card['Team']['team_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dist Start Year'); ?></dt>
		<dd>
			<?php echo h($card['Card']['dist_start_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dist End Year'); ?></dt>
		<dd>
			<?php echo h($card['Card']['dist_end_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($card['Card']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($card['Card']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($card['Card']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card'), array('action' => 'edit', $card['Card']['card_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card'), array('action' => 'delete', $card['Card']['card_id']), null, __('Are you sure you want to delete # %s?', $card['Card']['card_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('controller' => 'set_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Info'), array('controller' => 'set_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wiki Infos'), array('controller' => 'wiki_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wiki Info'), array('controller' => 'wiki_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Players'), array('controller' => 'card_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Players'), array('controller' => 'card_players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Card Players');?></h3>
	<?php if (!empty($card['CardPlayers'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Card Player Id'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Player Id'); ?></th>
		<th><?php echo __('Is Primary'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($card['CardPlayers'] as $cardPlayers): ?>
		<tr>
			<td><?php echo $cardPlayers['card_player_id'];?></td>
			<td><?php echo $cardPlayers['card_id'];?></td>
			<td><?php echo $cardPlayers['position_id'];?></td>
			<td><?php echo $cardPlayers['player_id'];?></td>
			<td><?php echo $cardPlayers['is_primary'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'card_players', 'action' => 'view', $cardPlayers['card_player_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'card_players', 'action' => 'edit', $cardPlayers['card_player_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'card_players', 'action' => 'delete', $cardPlayers['card_player_id']), null, __('Are you sure you want to delete # %s?', $cardPlayers['card_player_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card Players'), array('controller' => 'card_players', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Card Variations');?></h3>
	<?php if (!empty($card['CardVariation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Card Variation Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Front Img'); ?></th>
		<th><?php echo __('Rear Img'); ?></th>
		<th><?php echo __('Is Base'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($card['CardVariation'] as $cardVariation): ?>
		<tr>
			<td><?php echo $cardVariation['card_variation_id'];?></td>
			<td><?php echo $cardVariation['name'];?></td>
			<td><?php echo $cardVariation['front_img'];?></td>
			<td><?php echo $cardVariation['rear_img'];?></td>
			<td><?php echo $cardVariation['is_base'];?></td>
			<td><?php echo $cardVariation['card_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'card_variations', 'action' => 'view', $cardVariation['card_variation_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'card_variations', 'action' => 'edit', $cardVariation['card_variation_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'card_variations', 'action' => 'delete', $cardVariation['card_variation_id']), null, __('Are you sure you want to delete # %s?', $cardVariation['card_variation_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
