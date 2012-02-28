<div class="cardWikiInfos view">
<h2><?php  echo __('Card Wiki Info');?></h2>
	<dl>
		<dt><?php echo __('Card Wiki Info Id'); ?></dt>
		<dd>
			<?php echo h($cardWikiInfo['CardWikiInfo']['card_wiki_info_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overview'); ?></dt>
		<dd>
			<?php echo h($cardWikiInfo['CardWikiInfo']['overview']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variations'); ?></dt>
		<dd>
			<?php echo h($cardWikiInfo['CardWikiInfo']['variations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rarity'); ?></dt>
		<dd>
			<?php echo h($cardWikiInfo['CardWikiInfo']['rarity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Famous Copies'); ?></dt>
		<dd>
			<?php echo h($cardWikiInfo['CardWikiInfo']['famous_copies']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Public Sales'); ?></dt>
		<dd>
			<?php echo h($cardWikiInfo['CardWikiInfo']['public_sales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cardWikiInfo['CardWikiInfo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($cardWikiInfo['CardWikiInfo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card Wiki Info'), array('action' => 'edit', $cardWikiInfo['CardWikiInfo']['card_wiki_info_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card Wiki Info'), array('action' => 'delete', $cardWikiInfo['CardWikiInfo']['card_wiki_info_id']), null, __('Are you sure you want to delete # %s?', $cardWikiInfo['CardWikiInfo']['card_wiki_info_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Wiki Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Wiki Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Cards');?></h3>
	<?php if (!empty($cardWikiInfo['Card'])):?>
		<dl>
			<dt><?php echo __('Card Id');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['card_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Name');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['name'];?>
&nbsp;</dd>
		<dt><?php echo __('Short Name');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['short_name'];?>
&nbsp;</dd>
		<dt><?php echo __('Descriptor');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['descriptor'];?>
&nbsp;</dd>
		<dt><?php echo __('Card Number');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['card_number'];?>
&nbsp;</dd>
		<dt><?php echo __('Set Info Id');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['set_info_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Card Wiki Info Id');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['card_wiki_info_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Team Id');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['team_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Notes');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['notes'];?>
&nbsp;</dd>
		<dt><?php echo __('Created');?></dt>
		<dd>
	<?php echo $cardWikiInfo['Card']['created'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Card'), array('controller' => 'cards', 'action' => 'edit', $cardWikiInfo['Card']['card_id'])); ?></li>
			</ul>
		</div>
	</div>
	