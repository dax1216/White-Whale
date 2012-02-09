<div class="setInfos index">
	<h2><?php echo __('Set Infos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('set_info_id');?></th>
			<th><?php echo $this->Paginator->sort('acc_catalog_id');?></th>
			<th><?php echo $this->Paginator->sort('brand_id');?></th>
			<th><?php echo $this->Paginator->sort('subset_name');?></th>
			<th><?php echo $this->Paginator->sort('dist_start_year');?></th>
			<th><?php echo $this->Paginator->sort('dist_end_year');?></th>
			<th><?php echo $this->Paginator->sort('wiki_info_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($setInfos as $setInfo): ?>
	<tr>
		<td><?php echo h($setInfo['SetInfo']['set_info_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($setInfo['AccCatalog']['name'], array('controller' => 'acc_catalogs', 'action' => 'view', $setInfo['AccCatalog']['acc_catalog_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($setInfo['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $setInfo['Brand']['brand_id'])); ?>
		</td>
		<td><?php echo h($setInfo['SetInfo']['subset_name']); ?>&nbsp;</td>
		<td><?php echo h($setInfo['SetInfo']['dist_start_year']); ?>&nbsp;</td>
		<td><?php echo h($setInfo['SetInfo']['dist_end_year']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($setInfo['WikiInfo']['wiki_info_id'], array('controller' => 'wiki_infos', 'action' => 'view', $setInfo['WikiInfo']['wiki_info_id'])); ?>
		</td>
		<td><?php echo h($setInfo['SetInfo']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $setInfo['SetInfo']['set_info_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setInfo['SetInfo']['set_info_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $setInfo['SetInfo']['set_info_id']), null, __('Are you sure you want to delete # %s?', $setInfo['SetInfo']['set_info_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Set Info'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Wiki Infos'), array('controller' => 'wiki_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wiki Info'), array('controller' => 'wiki_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acc Catalogs'), array('controller' => 'acc_catalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acc Catalog'), array('controller' => 'acc_catalogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
