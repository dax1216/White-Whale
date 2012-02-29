<div class="cardImageTypes form">
<?php echo $this->Form->create('CardImageType');?>
	<fieldset>
		<legend><?php echo __('Add Card Image Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Card Image Types'), array('action' => 'index'));?></li>
	</ul>
</div>
