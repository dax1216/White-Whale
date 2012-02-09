<div class="wikiInfos index">
	<h2><?php echo __('Wiki Infos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('wiki_info_id');?></th>
			<th><?php echo $this->Paginator->sort('overview');?></th>
			<th><?php echo $this->Paginator->sort('history');?></th>
			<th><?php echo $this->Paginator->sort('size');?></th>
			<th><?php echo $this->Paginator->sort('production');?></th>
			<th><?php echo $this->Paginator->sort('distribution');?></th>
			<th><?php echo $this->Paginator->sort('rarity');?></th>
			<th><?php echo $this->Paginator->sort('other');?></th>
			<th><?php echo $this->Paginator->sort('info');?></th>
			<th><?php echo $this->Paginator->sort('variations');?></th>
			<th><?php echo $this->Paginator->sort('counterfeit');?></th>
			<th><?php echo $this->Paginator->sort('famous_copies');?></th>
			<th><?php echo $this->Paginator->sort('public_sales');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($wikiInfos as $wikiInfo): ?>
	<tr>
		<td><?php echo h($wikiInfo['WikiInfo']['wiki_info_id']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['overview']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['history']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['size']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['production']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['distribution']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['rarity']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['other']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['info']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['variations']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['counterfeit']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['famous_copies']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['public_sales']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['created']); ?>&nbsp;</td>
		<td><?php echo h($wikiInfo['WikiInfo']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wikiInfo['WikiInfo']['wiki_info_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wikiInfo['WikiInfo']['wiki_info_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wikiInfo['WikiInfo']['wiki_info_id']), null, __('Are you sure you want to delete # %s?', $wikiInfo['WikiInfo']['wiki_info_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Wiki Info'), array('action' => 'add')); ?></li>
	</ul>
</div>
