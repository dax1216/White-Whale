<div class="mycollectionImages form">
<?php echo $this->Form->create('MycollectionImage');?>
	<fieldset>
		<legend><?php echo __('Edit Mycollection Image'); ?></legend>
	<?php
		echo $this->Form->input('mycollection_image_id');
		echo $this->Form->input('user_card_id');
		echo $this->Form->input('rear_img_id');
		echo $this->Form->input('front_img_id');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MycollectionImage.mycollection_image_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MycollectionImage.mycollection_image_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mycollection Images'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rear Img'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
