<div class="accCatalogs form">
<?php echo $this->Form->create('AccCatalog');?>
	<fieldset>
		<legend><?php echo __('Add Acc Catalog'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Acc Catalogs'), array('action' => 'index'));?></li>
	</ul>
</div>
