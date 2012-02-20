<?php
    $card_dir = '/files/card_images/';
?>
<?= $this->Html->css(array('whitewhale', 'jquery.jqzoom'), null, array('inline' => false)) ?>
<?= $this->Html->script(array('jquery-1.7.1', 'jquery.jqzoom.pack'), array('inline' => false))?>
<div class="clearfix">
<a href="<?=$card_dir?>1000x1250/frontside/kennypowersfront.jpg" class="jqzoom" rel='gal1' title="Kenny Powers" >
    <img src="<?=$card_dir?>280x360/frontside/kennypowersfront.jpg" title="Kenny Powers"  style="border: 4px solid #666;">
</a>

</div>
<div class="clearfix" >
    <ul id="thumblist" class="clearfix" >
        <li><a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?=$card_dir?>280x360/frontside/kennypowersfront.jpg',largeimage: '<?=$card_dir?>1000x1250/frontside/kennypowersfront.jpg'}"><img src='<?=$card_dir?>thumbnail/frontside/kennypowersfront.jpg'></a></li>
        <li><a href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?=$card_dir?>280x360/backside/kennypowersback.jpg',largeimage: '<?=$card_dir?>1000x1250/backside/kennypowersback.jpg'}"><img src='<?=$card_dir?>thumbnail/backside/kennypowersback.jpg'></a></li>        
    </ul>
</div>
<script type="text/javascript">

$(document).ready(function() {
    $('.jqzoom').jqzoom({
        zoomType: 'standard',
        zoomWidth: 280,
        zoomHeight: 360,
        lens:true,
        preloadImages: false,
        alwaysOn:true
    });        
});


</script>