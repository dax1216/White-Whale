<?= $this->Html->script(array('jquery-1.7.1','jquery.form.js'), array('inline' => false)); ?>

<?php echo $this->Form->create('Card', array(
                                                'inputDefaults' => array(
                                                    'label' => false,
                                                    'div' => false
                                                ),
                                                'url' => '/Test/add',
                                                'enctype' => 'multipart/form-data'));?>
<?php echo __('Add Card Image'); ?>
<table>
    <tr>
        <td><?= $this->Form->label('Card.card_front_side', 'Frontside'); ?></td>
        <td>
            <?php echo $this->Form->input('card_front_side', array('type' => 'file', 'onchange' => 'imagePreview(this.files, this)'));?>
            <div class="preview"></div>
        </td>
    </tr>
    <tr>
        <td><?= $this->Form->label('Card.card_back_side', 'Backside'); ?></td>
        <td>
            <?php echo $this->Form->input('card_back_side', array('type' => 'file', 'onchange' => 'imagePreview(this.files, this)')); ?>
            <div class="preview"></div>
        </td>
    </tr>
    <tr>
        <td><?= $this->Form->label('Card.card_orientation', 'Orientation'); ?></td>
        <td>
<?php  
        $attributes = array('legend' => false, 'value' => 'vertical');           
        
        echo $this->Form->radio('card_orientation', array('vertical' => 'Vertical', 'horizontal' => 'Horizontal'), $attributes);
?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo $this->Form->end(__('Submit'));?></td>
    </tr>
</table>

<script type="text/javascript">
    function imagePreview(files, input_obj) {
        var file = files[0];
        var imageType = /image.*/;
        if (!file.type.match(imageType)) {
            alert('The file selected is not an image');
            return false;
        }  
        var img = document.createElement("img");
        img.classList.add("obj");
        img.height = 100;
        img.file = file;
        $(input_obj).siblings('.preview').html(img);
        var reader = new FileReader();
        reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
        reader.readAsDataURL(file);
    }
</script>