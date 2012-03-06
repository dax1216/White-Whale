<?php 
    $card_dir = '/files/card_images/' . $card_group . '/' . $card_image['CardVariationImage']['card_variation_id'] . '/';
?>
<?= $this->Html->css(array('whitewhale', 'jquery.jqzoom'), null, array('inline' => false)) ?>
<?= $this->Html->script(array('jquery-1.7.1', 'jquery.jqzoom.pack'), array('inline' => false))?>
<div class="clearfix">
<?php   if($set_side_display = 'front') { ?>
    <a href="<?=$card_dir?>max_size/<?=$card_image['FrontImage']['file_name']?>" class="jqzoom" rel='gal1' title="">
        <img src="<?=$card_dir?>large/<?=$card_image['FrontImage']['file_name']?>" title="">
    </a>
<?php   } else { ?>
    <a href="<?=$card_dir?>max_size/<?=$card_image['RearImage']['file_name']?>" class="jqzoom" rel='gal1' title="">
        <img src="<?=$card_dir?>large/<?=$card_image['RearImage']['file_name']?>" title="">
    </a>
<?php   } ?>
</div>
<p><a href="javascript:void(0)" class="view_hi_res">View Hi-res Image</a></p>
<div class="clearfix" >
    <ul id="thumblist" class="clearfix" >
        <li><a <?=($set_side_display = 'front') ? 'class="zoomThumbActive"' : ''?> href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?=$card_dir?>large/<?=$card_image['FrontImage']['file_name']?>', largeimage: '<?=$card_dir?>max_size/<?=$card_image['FrontImage']['file_name']?>'}">
                <img src='<?=$card_dir?>thumbnail/<?=$card_image['FrontImage']['file_name']?>'>
            </a>
        </li>
        <li><a <?=($set_side_display = 'rear') ? 'class="zoomThumbActive"' : ''?> href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?=$card_dir?>large/<?=$card_image['RearImage']['file_name']?>', largeimage: '<?=$card_dir?>max_size/<?=$card_image['RearImage']['file_name']?>'}">
                <img src='<?=$card_dir?>thumbnail/<?=$card_image['RearImage']['file_name']?>'>
            </a>
        </li>        
    </ul>
</div>
<script type="text/javascript">

$(document).ready(function() {
    $('.view_hi_res').click( function (e) {
        e.preventDefault();
        
        var selected_image = $('.jqzoom').attr('href');
        
        parent.view_hi_res(selected_image);
    });
    
    $('.jqzoom').jqzoom({
        zoomType: 'standard',
        zoomWidth: 300,
        zoomHeight: 300,
        lens:true,
        preloadImages: false,
        alwaysOn:true
    });        
});


</script>