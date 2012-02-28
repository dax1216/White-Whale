<div class="offerImages form">
<?php echo $this->Form->create('OfferImage');?>
	<fieldset>
		<legend><?php echo __('Edit Offer Image'); ?></legend>
	<?php
		echo $this->Form->input('offer_image_id');
		echo $this->Form->input('image_id');
		echo $this->Form->input('offer_id');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OfferImage.offer_image_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OfferImage.offer_image_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Offer Images'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
	</ul>
</div>
