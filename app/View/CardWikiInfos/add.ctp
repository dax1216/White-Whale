<div class="cardWikiInfos form">
<?php echo $this->Form->create('CardWikiInfo');?>
	<fieldset>
		<legend><?php echo __('Add Card Wiki Info'); ?></legend>
	<?php
		echo $this->Form->input('overview');
		echo $this->Form->input('variations');
		echo $this->Form->input('rarity');
		echo $this->Form->input('famous_copies');
		echo $this->Form->input('public_sales');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Card Wiki Infos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
