<div class="cardImages form">
<?php echo $this->Form->create('CardImage', array(
                                                'inputDefaults' => array(
                                                    'label' => false,
                                                    'div' => false
                                                ),
                                                'enctype' => 'multipart/form-data'));?>
<?php echo __('Add Card Image'); ?>
<table>
    <tr>
        <td><?= $this->Form->label('CardImage.card_front_side', 'Frontside'); ?></td>
        <td><?php echo $this->Form->input('card_front_side', array('type' => 'file'));?></td>
    </tr>
<?php   if(isset($card_image['CardImage']['front_img'])) { ?>
    <tr>
        <td></td>
        <td><?=$this->Html->image('/files/card_images/thumbnail/frontside/' . $card_image['CardImage']['front_img']); ?></td>
    </tr>
<?php   } ?>
    <tr>
        <td><?= $this->Form->label('CardImage.card_back_side', 'Backside'); ?></td>
        <td><?php echo $this->Form->input('card_back_side', array('type' => 'file')); ?></td>
    </tr>
<?php   if(isset($card_image['CardImage']['rear_img'])) { ?>
    <tr>
        <td></td>
        <td><?=$this->Html->image('/files/card_images/thumbnail/backside/' . $card_image['CardImage']['rear_img']); ?></td>
    </tr>
<?php   } ?>
    <tr>
        <td><?= $this->Form->label('CardImage.card_orientation', 'Orientation'); ?></td>
        <td>
<?php   $selected_value = (isset($card_image['CardImage']['card_orientation'])) ? $card_image['CardImage']['card_orientation'] : 'vertical';
        $attributes = array('legend' => false, 'value' => $selected_value);           
        
        echo $this->Form->radio('card_orientation', array('vertical' => 'Vertical', 'horizontal' => 'Horizontal'), $attributes);
?>
        </td>
    </tr>
    <tr>
        <td>
<?php   if(isset($card_image['CardImage']['card_image_id'])) { 
            echo $this->Form->input('card_image_id', array('type' => 'hidden', 'value' => $card_image['CardImage']['card_image_id']));
        }
?>
        </td>
        <td><?php echo $this->Form->end(__('Submit'));?></td>
    </tr>
</table>
</div>