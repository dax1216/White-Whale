<h3>Samples</h3>
<?= $this->Html->css(array('jquery.fancybox-1.3.4',), null, array('inline' => false)) ?>
<?= $this->Html->script(array('jquery-1.7.1','jquery.easing-1.3.pack','jquery.fancybox-1.3.4.pack'), array('inline' => false)); ?>

<?= $this->Html->image("/files/card_images/100x140/frontside/kennypowersfront.jpg", array('alt' => 'Baseball player', 'class' => 'card_image_popup'))?>
<script type="text/javascript">
    $(document).ready( function () {                        
        $('.card_image_popup').click( function () {
            
            $.fancybox({
		'width'		: 630,
		'height'	: 500,
                'autoScale'     : false,
                'transitionIn'	: 'none',
                'transitionOut'	: 'none',
                'type'		: 'iframe',
                'speedIn'	: 600, 
                'speedOut'	: 200,
                'href'          : '/card_images/popup'
            });
            
        });
    });
</script>