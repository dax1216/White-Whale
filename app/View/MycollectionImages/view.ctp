<div class="mycollectionImages view">
<h2><?php  echo __('Mycollection Image');?></h2>
	<dl>
		<dt><?php echo __('Mycollection Image Id'); ?></dt>
		<dd>
			<?php echo h($mycollectionImage['MycollectionImage']['mycollection_image_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Card'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mycollectionImage['UserCard']['user_card_id'], array('controller' => 'user_cards', 'action' => 'view', $mycollectionImage['UserCard']['user_card_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rear Img'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mycollectionImage['RearImg']['image_id'], array('controller' => 'images', 'action' => 'view', $mycollectionImage['RearImg']['image_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Front Img'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mycollectionImage['FrontImg']['image_id'], array('controller' => 'images', 'action' => 'view', $mycollectionImage['FrontImg']['image_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($mycollectionImage['MycollectionImage']['is_active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mycollection Image'), array('action' => 'edit', $mycollectionImage['MycollectionImage']['mycollection_image_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mycollection Image'), array('action' => 'delete', $mycollectionImage['MycollectionImage']['mycollection_image_id']), null, __('Are you sure you want to delete # %s?', $mycollectionImage['MycollectionImage']['mycollection_image_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mycollection Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mycollection Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Cards'), array('controller' => 'user_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Card'), array('controller' => 'user_cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rear Img'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
