<div class="wikiInfos view">
<h2><?php  echo __('Wiki Info');?></h2>
	<dl>
		<dt><?php echo __('Wiki Info Id'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['wiki_info_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overview'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['overview']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('History'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['history']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Production'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['production']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distribution'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['distribution']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rarity'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['rarity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variations'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['variations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Counterfeit'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['counterfeit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Famous Copies'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['famous_copies']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Public Sales'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['public_sales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($wikiInfo['WikiInfo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wiki Info'), array('action' => 'edit', $wikiInfo['WikiInfo']['wiki_info_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wiki Info'), array('action' => 'delete', $wikiInfo['WikiInfo']['wiki_info_id']), null, __('Are you sure you want to delete # %s?', $wikiInfo['WikiInfo']['wiki_info_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wiki Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wiki Info'), array('action' => 'add')); ?> </li>
	</ul>
</div>
