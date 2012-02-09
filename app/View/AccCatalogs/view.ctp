<div class="accCatalogs view">
<h2><?php  echo __('Acc Catalog');?></h2>
	<dl>
		<dt><?php echo __('Acc Catalog Id'); ?></dt>
		<dd>
			<?php echo h($accCatalog['AccCatalog']['acc_catalog_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($accCatalog['AccCatalog']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acc Catalog'), array('action' => 'edit', $accCatalog['AccCatalog']['acc_catalog_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acc Catalog'), array('action' => 'delete', $accCatalog['AccCatalog']['acc_catalog_id']), null, __('Are you sure you want to delete # %s?', $accCatalog['AccCatalog']['acc_catalog_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acc Catalogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acc Catalog'), array('action' => 'add')); ?> </li>
	</ul>
</div>
