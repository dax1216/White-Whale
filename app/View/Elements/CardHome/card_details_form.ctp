<ul class="unstyled">
    <li>
        <?php 
            echo $this->Form->input('Card.name', 
                                    array( 'class' => 'span4',
                                           'error' => array( 'attributes' => array( 'class' => 'label label-important' ) ) ) ); 
        ?>
    </li>
    <li>
        <?php 
            echo $this->Form->input('Card.descriptor', array( 'class' => 'span4' )); 
        ?>
    </li>
    <li>
        <?php 
            echo $this->Form->input('Card.card_number',  
                                    array( 'class' => 'span3',
                                           'error' => array( 'attributes' => array( 'class' => 'label label-important' ) ) ) ); 
        ?>
    </li>
    <li>
        <?php 
            echo $this->Form->input('Card.franchise_group_id', array( 'label' => 'Franchise', 'class' => 'span3' ) ); 
        ?>
    </li>
    <li>
        <?php 
            echo $this->Form->input('variation_id', array( 'label' => 'Variation', 'class' => 'span3' ) ); 
        ?>
    </li>
    <li>
        <?php 
            echo $this->Form->input('Card.notes', array( 'type' => 'textarea', 'class' => 'span4' ) ); 
        ?>
    </li>
</ul>