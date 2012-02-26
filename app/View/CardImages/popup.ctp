<?php
    $card_dir = '/files/card_images/';
?>
<?= $this->Html->css(array('whitewhale', 'jquery.jqzoom'), null, array('inline' => false)) ?>
<?= $this->Html->script(array('jquery-1.7.1', 'jquery.jqzoom.pack'), array('inline' => false))?>
<div class="clearfix">
    <a href="<?=$card_dir?>max_size/frontside/<?=$card_image['CardImage']['front_img']?>" class="jqzoom" rel='gal1' title="Kenny Powers">
        <img src="<?=$card_dir?>large/frontside/<?=$card_image['CardImage']['front_img']?>" title="Kenny Powers">
    </a>    
</div>
<p><a href="javascript:void(0)" class="view_hi_res">View Hi-res Image</a></p>
<div class="clearfix" >
    <ul id="thumblist" class="clearfix" >
        <li><a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?=$card_dir?>large/frontside/<?=$card_image['CardImage']['front_img']?>', largeimage: '<?=$card_dir?>max_size/frontside/<?=$card_image['CardImage']['front_img']?>'}">
                <img src='<?=$card_dir?>thumbnail/frontside/<?=$card_image['CardImage']['front_img']?>'>
            </a>
        </li>
        <li><a href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?=$card_dir?>large/backside/<?=$card_image['CardImage']['rear_img']?>', largeimage: '<?=$card_dir?>max_size/backside/<?=$card_image['CardImage']['rear_img']?>'}">
                <img src='<?=$card_dir?>thumbnail/backside/<?=$card_image['CardImage']['rear_img']?>'>
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