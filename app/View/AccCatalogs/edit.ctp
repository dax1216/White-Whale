<div class="accCatalogs form">
<?php echo $this->Form->create('AccCatalog');?>
	<fieldset>
		<legend><?php echo __('Edit Acc Catalog'); ?></legend>
	<?php
		echo $this->Form->input('acc_catalog_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AccCatalog.acc_catalog_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AccCatalog.acc_catalog_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Acc Catalogs'), array('action' => 'index'));?></li>
	</ul>
</div>
