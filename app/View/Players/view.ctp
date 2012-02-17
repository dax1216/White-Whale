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
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cards');?></h3>
	<?php if (!empty($player['Card'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Card Number'); ?></th>
		<th><?php echo __('Set Info Id'); ?></th>
		<th><?php echo __('Card Wiki Info Id'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($player['Card'] as $card): ?>
		<tr>
			<td><?php echo $card['card_id'];?></td>
			<td><?php echo $card['name'];?></td>
			<td><?php echo $card['card_number'];?></td>
			<td><?php echo $card['set_info_id'];?></td>
			<td><?php echo $card['card_wiki_info_id'];?></td>
			<td><?php echo $card['team_id'];?></td>
			<td><?php echo $card['notes'];?></td>
			<td><?php echo $card['created'];?></td>
			<td><?php echo $card['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cards', 'action' => 'view', $card['card_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cards', 'action' => 'edit', $card['card_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cards', 'action' => 'delete', $card['card_id']), null, __('Are you sure you want to delete # %s?', $card['card_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
