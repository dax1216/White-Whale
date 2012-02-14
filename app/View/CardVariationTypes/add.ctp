<div class="cardVariationTypes form">
<?php echo $this->Form->create('CardVariationType');?>
	<fieldset>
		<legend><?php echo __('Add Card Variation Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Card Variation Types'), array('action' => 'index'));?></li>
	</ul>
</div>
