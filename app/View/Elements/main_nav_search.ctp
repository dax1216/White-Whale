<?php echo $this->Form->create('temp', array('url' => array('controller' => 'Search', 'action' => 'search'), 'class' => 'navbar-search pull-right'));?>
<?php
		echo $this->Form->input('Search.name',array('label' => '', 'div' => '', 'class' => 'search-query', 'placeholder' => 'Enter a Keyword'));
	?>
	
	<!--
	<li>
    <pre>
	<?php
		echo $this->Form->input( 'SearchType', array(
        'type' => 'select',
		'label' => '',
        'options' => array(
            '1' => 'Card Wiki',
            '2' => 'Buy/Sell',
			'3' => 'Collections',
			'4' => 'White Whales',
        ),
    ));

	?>
    </pre>
	</li>
    -->
<?php echo $this->Form->end();?>