<?= $this->Html->css(array('jquery.fancybox-1.3.4',), null, array('inline' => false)) ?>
<?= $this->Html->script(array('jquery-1.7.1','jquery.easing-1.3.pack','jquery.fancybox-1.3.4.pack'), array('inline' => false)); ?>

<script type="text/javascript">
    function popup_image(card_variation_img_id, orientation) {
        var width = 600;
        
        if(orientation == 'horizontal') {  
            width = 730;
        }
        
        $.fancybox({
            'width'         : width,		
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'type'          : 'iframe',
            'speedIn'       : 600, 
            'speedOut'      : 200,
            'href'          : '/Images/card_variation_image_popup/' + card_variation_img_id,
            'onComplete'    : function() {
                $('#fancybox-frame').load(function() { // wait for frame to load and then gets it's height
                    $('#fancybox-content').height($(this).contents().find('body').height()+20);
                });
            }
        });
    }
    
    function view_hi_res(image_path) {
        $.fancybox({		
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'type'          : 'image',
            'speedIn'       : 600, 
            'speedOut'      : 200,
            'href'          : image_path
        });
    }
</script>
<div class="cards view">
<h2><?php  echo __('Card');?></h2>
	<dl>
		<dt><?php echo __('Card Id'); ?></dt>
		<dd>
			<?php echo h($card['Card']['card_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($card['Card']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Name'); ?></dt>
		<dd>
			<?php echo h($card['Card']['short_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descriptor'); ?></dt>
		<dd>
			<?php echo h($card['Card']['descriptor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Number'); ?></dt>
		<dd>
			<?php echo h($card['Card']['card_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Set Info'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['SetInfo']['name'], array('controller' => 'set_infos', 'action' => 'view', $card['SetInfo']['set_info_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Wiki Info'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['CardWikiInfo']['card_wiki_info_id'], array('controller' => 'card_wiki_infos', 'action' => 'view', $card['CardWikiInfo']['card_wiki_info_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Franchise Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($card['FranchiseGroup']['name'], array('controller' => 'franchise_groups', 'action' => 'view', $card['FranchiseGroup']['franchise_group_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Id'); ?></dt>
		<dd>
			<?php echo h($card['Card']['team_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($card['Card']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($card['Card']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($card['Card']['updated']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Card Image')?></dt>
                <dd>
                    <?= $this->Html->image("/files/card_images/card_variations/" . $card_image['CardVariationImage']['card_variation_id'] ."/large/" . $card_image['FrontImage']['file_name'], array('alt' => '', 
                                                                                                            'onclick' => 'popup_image('.$card_image['CardVariationImage']['card_variation_id'].',"'.$card_image['FrontImage']['orientation'].'")'))?>
                </dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card'), array('action' => 'edit', $card['Card']['card_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card'), array('action' => 'delete', $card['Card']['card_id']), null, __('Are you sure you want to delete # %s?', $card['Card']['card_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Infos'), array('controller' => 'set_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Info'), array('controller' => 'set_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Wiki Infos'), array('controller' => 'card_wiki_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Wiki Info'), array('controller' => 'card_wiki_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Franchise Groups'), array('controller' => 'franchise_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Franchise Group'), array('controller' => 'franchise_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Players'), array('controller' => 'card_players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Players'), array('controller' => 'card_players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variations'), array('controller' => 'card_variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Card Players');?></h3>
	<?php if (!empty($card['CardPlayers'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Card Player Id'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Player Id'); ?></th>
		<th><?php echo __('Is Primary'); ?></th>
		<th><?php echo __('Card First Name'); ?></th>
		<th><?php echo __('Card Last Name'); ?></th>
		<th><?php echo __('Card Nick Name'); ?></th>
		<th><?php echo __('Franchise Group Id'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($card['CardPlayers'] as $cardPlayers): ?>
		<tr>
			<td><?php echo $cardPlayers['card_player_id'];?></td>
			<td><?php echo $cardPlayers['card_id'];?></td>
			<td><?php echo $cardPlayers['position_id'];?></td>
			<td><?php echo $cardPlayers['player_id'];?></td>
			<td><?php echo $cardPlayers['is_primary'];?></td>
			<td><?php echo $cardPlayers['card_first_name'];?></td>
			<td><?php echo $cardPlayers['card_last_name'];?></td>
			<td><?php echo $cardPlayers['card_nick_name'];?></td>
			<td><?php echo $cardPlayers['franchise_group_id'];?></td>
			<td><?php echo $cardPlayers['team_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'card_players', 'action' => 'view', $cardPlayers['card_player_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'card_players', 'action' => 'edit', $cardPlayers['card_player_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'card_players', 'action' => 'delete', $cardPlayers['card_player_id']), null, __('Are you sure you want to delete # %s?', $cardPlayers['card_player_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card Players'), array('controller' => 'card_players', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Card Variations');?></h3>
	<?php if (!empty($card['CardVariation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Card Variation Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Card Id'); ?></th>
		<th><?php echo __('Variation Id'); ?></th>
		<th><?php echo __('Is Base'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($card['CardVariation'] as $cardVariation): ?>
		<tr>
			<td><?php echo $cardVariation['card_variation_id'];?></td>
			<td><?php echo $cardVariation['name'];?></td>
			<td><?php echo $cardVariation['card_id'];?></td>
			<td><?php echo $cardVariation['variation_id'];?></td>
			<td><?php echo $cardVariation['is_base'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'card_variations', 'action' => 'view', $cardVariation['card_variation_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'card_variations', 'action' => 'edit', $cardVariation['card_variation_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'card_variations', 'action' => 'delete', $cardVariation['card_variation_id']), null, __('Are you sure you want to delete # %s?', $cardVariation['card_variation_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card Variation'), array('controller' => 'card_variations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
