<div class="cardImageTypes view">
<h2><?php  echo __('Card Image Type');?></h2>
	<dl>
		<dt><?php echo __('Card Image Type Id'); ?></dt>
		<dd>
			<?php echo h($cardImageType['CardImageType']['card_image_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cardImageType['CardImageType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card Image Type'), array('action' => 'edit', $cardImageType['CardImageType']['card_image_type_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card Image Type'), array('action' => 'delete', $cardImageType['CardImageType']['card_image_type_id']), null, __('Are you sure you want to delete # %s?', $cardImageType['CardImageType']['card_image_type_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Image Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Image Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
