<div class="setWikiInfos index">
	<h2><?php echo __('Set Wiki Infos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('set_wiki_info_id');?></th>
			<th><?php echo $this->Paginator->sort('overview');?></th>
			<th><?php echo $this->Paginator->sort('size');?></th>
			<th><?php echo $this->Paginator->sort('production');?></th>
			<th><?php echo $this->Paginator->sort('distribution');?></th>
			<th><?php echo $this->Paginator->sort('rarity');?></th>
			<th><?php echo $this->Paginator->sort('base_overview');?></th>
			<th><?php echo $this->Paginator->sort('variations');?></th>
			<th><?php echo $this->Paginator->sort('famous_copies');?></th>
			<th><?php echo $this->Paginator->sort('counterfeit');?></th>
			<th><?php echo $this->Paginator->sort('references');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($setWikiInfos as $setWikiInfo): ?>
	<tr>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['set_wiki_info_id']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['overview']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['size']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['production']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['distribution']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['rarity']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['base_overview']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['variations']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['famous_copies']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['counterfeit']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['references']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['created']); ?>&nbsp;</td>
		<td><?php echo h($setWikiInfo['SetWikiInfo']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $setWikiInfo['SetWikiInfo']['set_wiki_info_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setWikiInfo['SetWikiInfo']['set_wiki_info_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $setWikiInfo['SetWikiInfo']['set_wiki_info_id']), null, __('Are you sure you want to delete # %s?', $setWikiInfo['SetWikiInfo']['set_wiki_info_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Set Wiki Info'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('controller' => 'set_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Info'), array('controller' => 'set_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
