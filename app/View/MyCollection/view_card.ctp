<div class="userCards view">
<h2><?php  echo __('User Card');?></h2>
	<dl>
		<dt><?php echo __('User Card Id'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['user_card_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCard['User']['user_id'], array('controller' => 'users', 'action' => 'view', $userCard['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Variation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCard['CardVariation']['name'], array('controller' => 'card_variations', 'action' => 'view', $userCard['CardVariation']['card_variation_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCard['GradeType']['name'], array('controller' => 'grade_types', 'action' => 'view', $userCard['GradeType']['grade_type_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Value'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCard['GradeValue']['name'], array('controller' => 'grade_values', 'action' => 'view', $userCard['GradeValue']['grade_value_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Number'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['grade_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Own Card'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['own_card']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active Sell'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['active_sell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('White Whale'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['white_whale']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bought Date'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['bought_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Listed Date'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['listed_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sell Price'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['sell_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Low Price'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['low_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('High Price'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['high_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Private Notes'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['private_notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Public Notes'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['public_notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($userCard['UserCard']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Card'), array('action' => 'edit', $userCard['UserCard']['user_card_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Card'), array('action' => 'delete', $userCard['UserCard']['user_card_id']), null, __('Are you sure you want to delete # %s?', $userCard['UserCard']['user_card_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grade Types'), array('controller' => 'grade_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade Type'), array('controller' => 'grade_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grade Values'), array('controller' => 'grade_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade Value'), array('controller' => 'grade_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Watches'), array('controller' => 'watches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Watch'), array('controller' => 'watches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mycollection Images'), array('controller' => 'mycollection_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mycollection Image'), array('controller' => 'mycollection_images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifiers'), array('controller' => 'qualifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualifier'), array('controller' => 'qualifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Watches');?></h3>
	<?php if (!empty($userCard['Watch'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Watch Id'); ?></th>
		<th><?php echo __('User Card Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userCard['Watch'] as $watch): ?>
		<tr>
			<td><?php echo $watch['watch_id'];?></td>
			<td><?php echo $watch['user_card_id'];?></td>
			<td><?php echo $watch['user_id'];?></td>
			<td><?php echo $watch['created'];?></td>
			<td><?php echo $watch['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'watches', 'action' => 'view', $watch['watch_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'watches', 'action' => 'edit', $watch['watch_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'watches', 'action' => 'delete', $watch['watch_id']), null, __('Are you sure you want to delete # %s?', $watch['watch_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Watch'), array('controller' => 'watches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Offers');?></h3>
	<?php if (!empty($userCard['Offer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Offer Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('User Card Id'); ?></th>
		<th><?php echo __('Accepted'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userCard['Offer'] as $offer): ?>
		<tr>
			<td><?php echo $offer['offer_id'];?></td>
			<td><?php echo $offer['amount'];?></td>
			<td><?php echo $offer['user_id'];?></td>
			<td><?php echo $offer['user_card_id'];?></td>
			<td><?php echo $offer['accepted'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'offers', 'action' => 'view', $offer['offer_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'offers', 'action' => 'edit', $offer['offer_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'offers', 'action' => 'delete', $offer['offer_id']), null, __('Are you sure you want to delete # %s?', $offer['offer_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mycollection Images');?></h3>
	<?php if (!empty($userCard['MycollectionImage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Mycollection Image Id'); ?></th>
		<th><?php echo __('User Card Id'); ?></th>
		<th><?php echo __('Rear Img Id'); ?></th>
		<th><?php echo __('Front Img Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userCard['MycollectionImage'] as $mycollectionImage): ?>
		<tr>
			<td><?php echo $mycollectionImage['mycollection_image_id'];?></td>
			<td><?php echo $mycollectionImage['user_card_id'];?></td>
			<td><?php echo $mycollectionImage['rear_img_id'];?></td>
			<td><?php echo $mycollectionImage['front_img_id'];?></td>
			<td><?php echo $mycollectionImage['is_active'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mycollection_images', 'action' => 'view', $mycollectionImage['mycollection_image_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mycollection_images', 'action' => 'edit', $mycollectionImage['mycollection_image_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mycollection_images', 'action' => 'delete', $mycollectionImage['mycollection_image_id']), null, __('Are you sure you want to delete # %s?', $mycollectionImage['mycollection_image_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mycollection Image'), array('controller' => 'mycollection_images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Qualifiers');?></h3>
	<?php if (!empty($userCard['Qualifier'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Qualifier Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userCard['Qualifier'] as $qualifier): ?>
		<tr>
			<td><?php echo $qualifier['qualifier_id'];?></td>
			<td><?php echo $qualifier['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qualifiers', 'action' => 'view', $qualifier['qualifier_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qualifiers', 'action' => 'edit', $qualifier['qualifier_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qualifiers', 'action' => 'delete', $qualifier['qualifier_id']), null, __('Are you sure you want to delete # %s?', $qualifier['qualifier_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qualifier'), array('controller' => 'qualifiers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Themes');?></h3>
	<?php if (!empty($userCard['Theme'])):?>
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
		foreach ($userCard['Theme'] as $theme): ?>
		<tr>
			<td><?php echo $theme['theme_id'];?></td>
			<td><?php echo $theme['name'];?></td>
			<td><?php echo $theme['user_id'];?></td>
			<td><?php echo $theme['parent_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'themes', 'action' => 'view', $theme['theme_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'themes', 'action' => 'edit', $theme['theme_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'themes', 'action' => 'delete', $theme['theme_id']), null, __('Are you sure you want to delete # %s?', $theme['theme_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
