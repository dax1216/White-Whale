<h3>Samples</h3>
<?= $this->Html->css(array('jquery.fancybox-1.3.4',), null, array('inline' => false)) ?>
<?= $this->Html->script(array('jquery-1.7.1','jquery.easing-1.3.pack','jquery.fancybox-1.3.4.pack'), array('inline' => false)); ?>

<?= $this->Html->image("/files/card_images/small/frontside/kennypowersfront.jpg", array('alt' => 'Baseball player', 'class' => 'card_image_popup'))?>
<br />
<?= $this->Html->image("/files/card_images/small/frontside/vintagefront1.jpg", array('alt' => 'Baseball player', 'class' => 'card_image_popup2'))?>
<script type="text/javascript">
    $(document).ready( function () {                        
        $('.card_image_popup').click( function () {
            
            $.fancybox({
		'width'		: 650,		
                'autoScale'     : false,
                'transitionIn'	: 'none',
                'transitionOut'	: 'none',
                'type'		: 'iframe',
                'speedIn'	: 600, 
                'speedOut'	: 200,
                'href'          : '/card_images/popup',
                'onComplete' : function() {
                    $('#fancybox-frame').load(function() { // wait for frame to load and then gets it's height
                        $('#fancybox-content').height($(this).contents().find('body').height()+20);
                    });
                }
            });
            
        });
        
        $('.card_image_popup2').click( function () {   
            $.fancybox({
		'width'		: 800,		
                'autoScale'     : false,
                'transitionIn'	: 'none',
                'transitionOut'	: 'none',
                'type'		: 'iframe',
                'speedIn'	: 600, 
                'speedOut'	: 200,
                'href'          : '/card_images/popup2',
                'onComplete' : function() {
                    $('#fancybox-frame').load(function() { // wait for frame to load and then gets it's height
                        $('#fancybox-content').height($(this).contents().find('body').height()+20);
                    });
                }
            });
            
        })
    });
    
    function view_hi_res(image_path) {
        $.fancybox({		
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'type'          : 'image',
            'speedIn'       : 600, 
            'speedOut'      : 200,
            'href'          : image_path
        });
    }
</script>