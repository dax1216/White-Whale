<?= $this->Html->script(array('jquery-1.7.1','jquery.form.js'), array('inline' => false)); ?>

<div class="cardImages form">
<?php echo $this->Form->create('CardImage', array(
                                                'inputDefaults' => array(
                                                    'label' => false,
                                                    'div' => false
                                                ),
                                                'enctype' => 'multipart/form-data',
                                                'id' => 'card_image_upload_form'));?>
<?php echo __('Add Card Image'); ?>
<table>
    <tr>
        <td><?= $this->Form->label('CardImage.card_front_side', 'Frontside'); ?></td>
        <td>
            <?php echo $this->Form->input('card_front_side', array('type' => 'file', 'class' => 'card_image_upload'));?>
            <div id="card_front_preview"></div>
        </td>
    </tr>
    <tr>
        <td><?= $this->Form->label('CardImage.card_back_side', 'Backside'); ?></td>
        <td>
            <?php echo $this->Form->input('card_back_side', array('type' => 'file', 'class' => 'card_image_upload')); ?>
            <div id="card_rear_preview"></div>
        </td>
    </tr>
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
        <td><?php echo $this->Form->input('preview_selected', array('type' => 'hidden', 'value' => 'front', 'id' => 'preview_selected'))?></td>
        <td><?php echo $this->Form->end(__('Submit'));?></td>
    </tr>
</table>
</div>
<script type="text/javascript">
    $(document).ready( function() {
        $('.card_image_upload').change( function () {
            var div_target = '';
            
            if($(this).attr('id') == 'CardImageCardFrontSide') {
                div_target = '#card_front_preview';
                $('#preview_selected').val('front');
            } else {
                div_target = '#card_rear_preview';
                $('#preview_selected').val('rear');
            }
        
            var options = {
                target: div_target,
                url: '/CardImages/show_preview'
            };
            
            $('#card_image_upload_form').ajaxForm(options).submit();
        });
    });
</script>