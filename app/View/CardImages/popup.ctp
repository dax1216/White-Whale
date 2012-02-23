<?php
    $card_dir = '/files/card_images/';
?>
<?= $this->Html->css(array('whitewhale', 'jquery.cloudzoom'), null, array('inline' => false)) ?>
<?= $this->Html->script(array('jquery-1.7.1', 'jquery.cloudzoom'), array('inline' => false))?>
<div class="clearfix">
<a href="<?=$card_dir?>max_size/frontside/kennypowersfront.jpg" class="cloud-zoom" id="zoom1" title="Kenny Powers">
    <img src="<?=$card_dir?>large/frontside/kennypowersfront.jpg" title="Kenny Powers">
</a>

</div>
<div class="clearfix" >
    <ul id="thumblist" class="clearfix" >
        <li><a href='<?=$card_dir?>max_size/frontside/kennypowersfront.jpg' class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?=$card_dir?>large/frontside/kennypowersfront.jpg'"><img src='<?=$card_dir?>thumbnail/frontside/kennypowersfront.jpg'></a></li>
        <li><a href='<?=$card_dir?>max_size/frontside/kennypowersback.jpg' class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?=$card_dir?>large/backside/kennypowersback.jpg'"><img src='<?=$card_dir?>thumbnail/backside/kennypowersback.jpg'></a></li>        
    </ul>
</div>
<script type="text/javascript">

$(document).ready(function() {
//    $('.jqzoom').jqzoom({
//        zoomType: 'standard',
//        zoomWidth: 280,
//        zoomHeight: 360,
//        lens:true,
//        preloadImages: false,
//        alwaysOn:true
//    });        
});


</script>