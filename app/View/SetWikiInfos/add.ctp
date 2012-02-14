<div class="setWikiInfos form">
<?php echo $this->Form->create('SetWikiInfo');?>
	<fieldset>
		<legend><?php echo __('Add Set Wiki Info'); ?></legend>
	<?php
		echo $this->Form->input('overview');
		echo $this->Form->input('size');
		echo $this->Form->input('production');
		echo $this->Form->input('distribution');
		echo $this->Form->input('rarity');
		echo $this->Form->input('base_overview');
		echo $this->Form->input('variations');
		echo $this->Form->input('famous_copies');
		echo $this->Form->input('counterfeit');
		echo $this->Form->input('references');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Set Wiki Infos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('controller' => 'set_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Info'), array('controller' => 'set_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
