<div class="mycollectionImages index">
	<h2><?php echo __('Mycollection Images');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('mycollection_image_id');?></th>
			<th><?php echo $this->Paginator->sort('user_card_id');?></th>
			<th><?php echo $this->Paginator->sort('rear_img_id');?></th>
			<th><?php echo $this->Paginator->sort('front_img_id');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($mycollectionImages as $mycollectionImage): ?>
	<tr>
		<td><?php echo h($mycollectionImage['MycollectionImage']['mycollection_image_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mycollectionImage['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $mycollectionImage['UserCard']['user_card_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mycollectionImage['RearImg']['image_id'], array('controller' => 'images', 'action' => 'view', $mycollectionImage['RearImg']['image_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mycollectionImage['FrontImg']['image_id'], array('controller' => 'images', 'action' => 'view', $mycollectionImage['FrontImg']['image_id'])); ?>
		</td>
		<td><?php echo h($mycollectionImage['MycollectionImage']['is_active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mycollectionImage['MycollectionImage']['mycollection_image_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mycollectionImage['MycollectionImage']['mycollection_image_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mycollectionImage['MycollectionImage']['mycollection_image_id']), null, __('Are you sure you want to delete # %s?', $mycollectionImage['MycollectionImage']['mycollection_image_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mycollection Image'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rear Img'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
