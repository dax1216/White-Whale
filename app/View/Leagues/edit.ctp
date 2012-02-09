<div class="leagues form">
<?php echo $this->Form->create('League');?>
	<fieldset>
		<legend><?php echo __('Edit League'); ?></legend>
	<?php
		echo $this->Form->input('league_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('League.league_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('League.league_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('action' => 'index'));?></li>
	</ul>
</div>
