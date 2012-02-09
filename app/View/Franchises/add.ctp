<div class="franchises form">
<?php echo $this->Form->create('Franchise');?>
	<fieldset>
		<legend><?php echo __('Add Franchise'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('nat_assoc');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Franchises'), array('action' => 'index'));?></li>
	</ul>
</div>
