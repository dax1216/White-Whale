<div class="themes view">
<h2><?php  echo __('Theme');?></h2>
	<dl>
		<dt><?php echo __('Theme Id'); ?></dt>
		<dd>
			<?php echo h($theme['Theme']['theme_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($theme['Theme']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($theme['User']['user_id'], array('controller' => 'users', 'action' => 'view', $theme['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Theme'); ?></dt>
		<dd>
			<?php echo $this->Html->link($theme['ParentTheme']['name'], array('controller' => 'themes', 'action' => 'view', $theme['ParentTheme']['theme_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Theme'), array('action' => 'edit', $theme['Theme']['theme_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Theme'), array('action' => 'delete', $theme['Theme']['theme_id']), null, __('Are you sure you want to delete # %s?', $theme['Theme']['theme_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Themes');?></h3>
	<?php if (!empty($theme['ChildTheme'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Theme Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($theme['ChildTheme'] as $childTheme): ?>
		<tr>
			<td><?php echo $childTheme['theme_id'];?></td>
			<td><?php echo $childTheme['name'];?></td>
			<td><?php echo $childTheme['user_id'];?></td>
			<td><?php echo $childTheme['parent_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'themes', 'action' => 'view', $childTheme['theme_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'themes', 'action' => 'edit', $childTheme['theme_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'themes', 'action' => 'delete', $childTheme['theme_id']), null, __('Are you sure you want to delete # %s?', $childTheme['theme_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Theme'), array('controller' => 'themes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Cards');?></h3>
	<?php if (!empty($theme['UserCard'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Card Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Card Variation Id'); ?></th>
		<th><?php echo __('Grade Type Id'); ?></th>
		<th><?php echo __('Grade Value Id'); ?></th>
		<th><?php echo __('Grade Number'); ?></th>
		<th><?php echo __('Own Card'); ?></th>
		<th><?php echo __('Active Sell'); ?></th>
		<th><?php echo __('White Whale'); ?></th>
		<th><?php echo __('Front Img'); ?></th>
		<th><?php echo __('Rear Img'); ?></th>
		<th><?php echo __('Bought Date'); ?></th>
		<th><?php echo __('Listed Date'); ?></th>
		<th><?php echo __('Sell Price'); ?></th>
		<th><?php echo __('Low Price'); ?></th>
		<th><?php echo __('High Price'); ?></th>
		<th><?php echo __('Private Notes'); ?></th>
		<th><?php echo __('Public Notes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($theme['UserCard'] as $userCard): ?>
		<tr>
			<td><?php echo $userCard['user_card_id'];?></td>
			<td><?php echo $userCard['user_id'];?></td>
			<td><?php echo $userCard['card_variation_id'];?></td>
			<td><?php echo $userCard['grade_type_id'];?></td>
			<td><?php echo $userCard['grade_value_id'];?></td>
			<td><?php echo $userCard['grade_number'];?></td>
			<td><?php echo $userCard['own_card'];?></td>
			<td><?php echo $userCard['active_sell'];?></td>
			<td><?php echo $userCard['white_whale'];?></td>
			<td><?php echo $userCard['front_img'];?></td>
			<td><?php echo $userCard['rear_img'];?></td>
			<td><?php echo $userCard['bought_date'];?></td>
			<td><?php echo $userCard['listed_date'];?></td>
			<td><?php echo $userCard['sell_price'];?></td>
			<td><?php echo $userCard['low_price'];?></td>
			<td><?php echo $userCard['high_price'];?></td>
			<td><?php echo $userCard['private_notes'];?></td>
			<td><?php echo $userCard['public_notes'];?></td>
			<td><?php echo $userCard['created'];?></td>
			<td><?php echo $userCard['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_cards', 'action' => 'view', $userCard['user_card_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_cards', 'action' => 'edit', $userCard['user_card_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_cards', 'action' => 'delete', $userCard['user_card_id']), null, __('Are you sure you want to delete # %s?', $userCard['user_card_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
