<div class="cardWikiInfos index">
	<h2><?php echo __('Card Wiki Infos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('card_wiki_info_id');?></th>
			<th><?php echo $this->Paginator->sort('overview');?></th>
			<th><?php echo $this->Paginator->sort('variations');?></th>
			<th><?php echo $this->Paginator->sort('rarity');?></th>
			<th><?php echo $this->Paginator->sort('famous_copies');?></th>
			<th><?php echo $this->Paginator->sort('public_sales');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cardWikiInfos as $cardWikiInfo): ?>
	<tr>
		<td><?php echo h($cardWikiInfo['CardWikiInfo']['card_wiki_info_id']); ?>&nbsp;</td>
		<td><?php echo h($cardWikiInfo['CardWikiInfo']['overview']); ?>&nbsp;</td>
		<td><?php echo h($cardWikiInfo['CardWikiInfo']['variations']); ?>&nbsp;</td>
		<td><?php echo h($cardWikiInfo['CardWikiInfo']['rarity']); ?>&nbsp;</td>
		<td><?php echo h($cardWikiInfo['CardWikiInfo']['famous_copies']); ?>&nbsp;</td>
		<td><?php echo h($cardWikiInfo['CardWikiInfo']['public_sales']); ?>&nbsp;</td>
		<td><?php echo h($cardWikiInfo['CardWikiInfo']['created']); ?>&nbsp;</td>
		<td><?php echo h($cardWikiInfo['CardWikiInfo']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cardWikiInfo['CardWikiInfo']['card_wiki_info_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cardWikiInfo['CardWikiInfo']['card_wiki_info_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cardWikiInfo['CardWikiInfo']['card_wiki_info_id']), null, __('Are you sure you want to delete # %s?', $cardWikiInfo['CardWikiInfo']['card_wiki_info_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Card Wiki Info'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
