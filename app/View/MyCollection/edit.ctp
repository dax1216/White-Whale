<div class="userCards form">
<?php echo $this->Form->create('UserCard');?>
	<fieldset>
		<legend><?php echo __('Edit User Card'); ?></legend>
	<?php
		echo $this->Form->input('user_card_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('card_variation_id');
		echo $this->Form->input('grade_type_id');
		echo $this->Form->input('grade_value_id');
		echo $this->Form->input('grade_number');
		echo $this->Form->input('own_card');
		echo $this->Form->input('active_sell');
		echo $this->Form->input('white_whale');
		echo $this->Form->input('front_img');
		echo $this->Form->input('rear_img');
		echo $this->Form->input('bought_date');
		echo $this->Form->input('listed_date');
		echo $this->Form->input('sell_price');
		echo $this->Form->input('low_price');
		echo $this->Form->input('high_price');
		echo $this->Form->input('private_notes');
		echo $this->Form->input('public_notes');
		echo $this->Form->input('Qualifier');
		echo $this->Form->input('Theme');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserCard.user_card_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserCard.user_card_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grade Types'), array('controller' => 'grade_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade Type'), array('controller' => 'grade_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grade Values'), array('controller' => 'grade_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade Value'), array('controller' => 'grade_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Watches'), array('controller' => 'watches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Watch'), array('controller' => 'watches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('controller' => 'offers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifiers'), array('controller' => 'qualifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualifier'), array('controller' => 'qualifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
