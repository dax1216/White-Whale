<div class="wikiInfos form">
<?php echo $this->Form->create('WikiInfo');?>
	<fieldset>
		<legend><?php echo __('Add Wiki Info'); ?></legend>
	<?php
		echo $this->Form->input('overview');
		echo $this->Form->input('history');
		echo $this->Form->input('size');
		echo $this->Form->input('production');
		echo $this->Form->input('distribution');
		echo $this->Form->input('rarity');
		echo $this->Form->input('other');
		echo $this->Form->input('info');
		echo $this->Form->input('variations');
		echo $this->Form->input('counterfeit');
		echo $this->Form->input('famous_copies');
		echo $this->Form->input('public_sales');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Wiki Infos'), array('action' => 'index'));?></li>
	</ul>
</div>
