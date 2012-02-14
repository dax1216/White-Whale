<div class="cardImages form">
<?php echo $this->Form->create('CardImage', array('enctype' => 'multipart/form-data'));?>
	<fieldset>
		<legend><?php echo __('Add Card Image'); ?></legend>
	<?php
		echo $this->Form->input('card_front_side', array('type' => 'file'));
		echo $this->Form->input('card_back_side', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>