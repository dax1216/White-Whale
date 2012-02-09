<div class="accCatalogs index">
	<h2><?php echo __('Acc Catalogs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('acc_catalog_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($accCatalogs as $accCatalog): ?>
	<tr>
		<td><?php echo h($accCatalog['AccCatalog']['acc_catalog_id']); ?>&nbsp;</td>
		<td><?php echo h($accCatalog['AccCatalog']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accCatalog['AccCatalog']['acc_catalog_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accCatalog['AccCatalog']['acc_catalog_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accCatalog['AccCatalog']['acc_catalog_id']), null, __('Are you sure you want to delete # %s?', $accCatalog['AccCatalog']['acc_catalog_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Acc Catalog'), array('action' => 'add')); ?></li>
	</ul>
</div>
