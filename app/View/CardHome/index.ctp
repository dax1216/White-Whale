<div class="cards index">
	<h2><?php echo __('Cards');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('card_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('short_name');?></th>
			<th><?php echo $this->Paginator->sort('descriptor');?></th>
			<th><?php echo $this->Paginator->sort('card_number');?></th>
			<th><?php echo $this->Paginator->sort('set_info_id');?></th>
			<th><?php echo $this->Paginator->sort('card_wiki_info_id');?></th>
			<th><?php echo $this->Paginator->sort('franchise_group_id');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cards as $card): ?>
	<tr>
		<td><?php echo h($card['Card']['card_id']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['name']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['short_name']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['descriptor']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['card_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($card['SetInfo']['name'], array('controller' => 'set_infos', 'action' => 'view', $card['SetInfo']['set_info_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($card['CardWikiInfo']['card_wiki_info_id'], array('controller' => 'card_wiki_infos', 'action' => 'view', $card['CardWikiInfo']['card_wiki_info_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($card['FranchiseGroup']['name'], array('controller' => 'franchise_groups', 'action' => 'view', $card['FranchiseGroup']['franchise_group_id'])); ?>
		</td>
		<td><?php echo h($card['Card']['notes']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['created']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $card['Card']['card_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $card['Card']['card_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $card['Card']['card_id']), null, __('Are you sure you want to delete # %s?', $card['Card']['card_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('controller' => 'set_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Info'), array('controller' => 'set_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Wiki Infos'), array('controller' => 'card_wiki_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Wiki Info'), array('controller' => 'card_wiki_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Franchise Groups'), array('controller' => 'franchise_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Franchise Group'), array('controller' => 'franchise_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Players'), array('controller' => 'card_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Players'), array('controller' => 'card_players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
	</ul>
</div>
