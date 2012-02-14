<div class="cardWikiInfos form">
<?php echo $this->Form->create('CardWikiInfo');?>
	<fieldset>
		<legend><?php echo __('Edit Card Wiki Info'); ?></legend>
	<?php
		echo $this->Form->input('card_wiki_info_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CardWikiInfo.card_wiki_info_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CardWikiInfo.card_wiki_info_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Card Wiki Infos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
