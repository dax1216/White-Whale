<div class="setInfos view">
<h2><?php  echo __('Set Info');?></h2>
	<dl>
		<dt><?php echo __('Set Info Id'); ?></dt>
		<dd>
			<?php echo h($setInfo['SetInfo']['set_info_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acc Catalog'); ?></dt>
		<dd>
			<?php echo $this->Html->link($setInfo['AccCatalog']['name'], array('controller' => 'acc_catalogs', 'action' => 'view', $setInfo['AccCatalog']['acc_catalog_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($setInfo['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $setInfo['Brand']['brand_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subset Name'); ?></dt>
		<dd>
			<?php echo h($setInfo['SetInfo']['subset_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dist Start Year'); ?></dt>
		<dd>
			<?php echo h($setInfo['SetInfo']['dist_start_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dist End Year'); ?></dt>
		<dd>
			<?php echo h($setInfo['SetInfo']['dist_end_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Set Wiki Info'); ?></dt>
		<dd>
			<?php echo $this->Html->link($setInfo['SetWikiInfo']['set_wiki_info_id'], array('controller' => 'set_wiki_infos', 'action' => 'view', $setInfo['SetWikiInfo']['set_wiki_info_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($setInfo['SetInfo']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Set Info'), array('action' => 'edit', $setInfo['SetInfo']['set_info_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Set Info'), array('action' => 'delete', $setInfo['SetInfo']['set_info_id']), null, __('Are you sure you want to delete # %s?', $setInfo['SetInfo']['set_info_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Wiki Infos'), array('controller' => 'set_wiki_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Wiki Info'), array('controller' => 'set_wiki_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acc Catalogs'), array('controller' => 'acc_catalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acc Catalog'), array('controller' => 'acc_catalogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cards');?></h3>
	<?php if (!empty($setInfo['Card'])):?>
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
		foreach ($setInfo['Card'] as $card): ?>
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
