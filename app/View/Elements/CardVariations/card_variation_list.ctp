<table id="card_players" class="table table-striped table-condensed span11">
<thead>
    <tr>
        <th class="span2"><?php echo __('Preview');?></th>
        <th class="span4"><?php echo __('Name');?></th>
        <th class="span3"><?php echo __('Variation');?></th>
        <th class="span2"><?php echo __('Base');?></th>
        <!--//
        <th class="span2"><?php echo __('Action(s)');?></th>                                
        //-->
    </tr>
</thead>
<tbody>
<?php
    if( isset( $data[ 'CardVariation' ] ) ) {
        foreach( $data[ 'CardVariation' ] as $key => $cardVariation ) {
        // debug ($cardVariation)
?>        
    <td>
    <?php
        echo $this->Html->image("/files/card_images/card_variations/" . $cardVariation['card_variation_id'] ."/thumbnail/" . $cardVariation['images']['FrontImage']['file_name'], array('alt' => 'Front',
                                                                                                            'title' => 'Click to Enlarge',
                                                                                                            'onclick' => 'popup_image('.$cardVariation['card_variation_id'].',"front","'. ( isset( $cardVariation['images']['orientation'] ) ? $cardVariation['images']['orientation'] : '' ).'")'))
    ?>
    </td>
    <td>
    <?php 
        echo $this->Html->link( __( $cardVariation[ 'name' ] ), '/CardVariations/view/' . $cardVariation['card_variation_id']  );
    ?>
    </td>
    <td>
    <?php 
        if ( isset( $cardVariation[ 'variation_id' ] ) )
        {
            echo $this->Html->link( __( $variations[ $cardVariation[ 'variation_id' ] ] ), '/Variations/view/' . $cardVariation[ 'variation_id' ]  );
        }
        else
        {
            echo __( '[None]' );
        }
    ?>
    </td>
    <td>
    <?php 
        if ( $cardVariation[ 'is_base' ] )
        {
            echo '<i class="icon-flag"></i>'; 
        }
    ?>
    </td>
<?php } } ?>
</tbody>
</table>