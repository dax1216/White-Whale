<?php

if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>


<h3><?php echo __d('cake_dev', 'Admin Links'); ?></h3>
<p>
<h2>Base Input Types</h2>
	<?php
		echo $this->Html->link('List Cards','/cards/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Sets','/set_infos/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Wiki Info','/wiki_infos/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Card-Players','/card_players/index', array('escape' => false))."<br/>";
		?>
 <br/>
<h2>User Generated Types</h2>
		<?php
		echo $this->Html->link('List Users','/users/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List User-Cards','/user_cards/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Transactions','/transactions/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Comments','/comments/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Themes','/themes/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Watches','/transactions/index', array('escape' => false))."<br/>";
	?>
     <br/>
    <h2>Static Tables</h2>
    	<?php
        echo $this->Html->link('List Players','/players/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Teams','/teams/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Leagues','/leagues/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Franchises','/franchises/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Acc Catalogs','/acc_catalogs/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Brands','/brands/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Positions','/positions/index', array('escape' => false))."<br/>";
        echo $this->Html->link('List Price Ranges','/price_ranges/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Grade Types','/grade_types/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Grade Values','/grade_values/index', array('escape' => false))."<br/>";
		echo $this->Html->link('List Qualifiers','/qualifiers/index', array('escape' => false))."<br/>";
		
		?>
</p>

