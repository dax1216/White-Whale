<div class="setWikiInfos view">
<h2><?php  echo __('Set Wiki Info');?></h2>
	<dl>
		<dt><?php echo __('Set Wiki Info Id'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['set_wiki_info_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overview'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['overview']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Production'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['production']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distribution'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['distribution']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rarity'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['rarity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base Overview'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['base_overview']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variations'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['variations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Famous Copies'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['famous_copies']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Counterfeit'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['counterfeit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('References'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['references']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($setWikiInfo['SetWikiInfo']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Set Wiki Info'), array('action' => 'edit', $setWikiInfo['SetWikiInfo']['set_wiki_info_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Set Wiki Info'), array('action' => 'delete', $setWikiInfo['SetWikiInfo']['set_wiki_info_id']), null, __('Are you sure you want to delete # %s?', $setWikiInfo['SetWikiInfo']['set_wiki_info_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Wiki Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Wiki Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('controller' => 'set_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Info'), array('controller' => 'set_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Set Infos');?></h3>
	<?php if (!empty($setWikiInfo['SetInfo'])):?>
		<dl>
			<dt><?php echo __('Set Info Id');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['set_info_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Name');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['name'];?>
&nbsp;</dd>
		<dt><?php echo __('Short Name');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['short_name'];?>
&nbsp;</dd>
		<dt><?php echo __('Subset Name');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['subset_name'];?>
&nbsp;</dd>
		<dt><?php echo __('Acc Catalog Id');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['acc_catalog_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Brand Id');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['brand_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Dist Start Year');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['dist_start_year'];?>
&nbsp;</dd>
		<dt><?php echo __('Dist End Year');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['dist_end_year'];?>
&nbsp;</dd>
		<dt><?php echo __('Set Wiki Info Id');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['set_wiki_info_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Created');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['created'];?>
&nbsp;</dd>
		<dt><?php echo __('Updated');?></dt>
		<dd>
	<?php echo $setWikiInfo['SetInfo']['updated'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Set Info'), array('controller' => 'set_infos', 'action' => 'edit', $setWikiInfo['SetInfo']['set_info_id'])); ?></li>
			</ul>
		</div>
	</div>
	