<div class="setInfos form">
<?php echo $this->Form->create('SetInfo');?>
	<fieldset>
		<legend><?php echo __('Edit Set Info'); ?></legend>
	<?php
		echo $this->Form->input('set_info_id');
		echo $this->Form->input('acc_catalog_id');
		echo $this->Form->input('brand_id');
		echo $this->Form->input('subset_name');
		echo $this->Form->input('dist_start_year');
		echo $this->Form->input('dist_end_year');
		echo $this->Form->input('wiki_info_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SetInfo.set_info_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SetInfo.set_info_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('action' => 'index'));?></li>
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
