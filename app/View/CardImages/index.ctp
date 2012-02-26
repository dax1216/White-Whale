
<?= $this->Html->css(array('jquery.fancybox-1.3.4',), null, array('inline' => false)) ?>
<?= $this->Html->script(array('jquery-1.7.1','jquery.easing-1.3.pack','jquery.fancybox-1.3.4.pack'), array('inline' => false)); ?>

<iframe src="/CardImages/add" width="500" height="300" frameborder="0" marginheight="10" marginwidth="10"></iframe>

<h3>Samples</h3>
<?= $this->Html->image("/files/card_images/small/frontside/" . $card_image['CardImage']['front_img'], array('alt' => '', 
                                                                                                            'onclick' => 'popup_image('.$card_image['CardImage']['card_image_id'].',"'.$card_image['CardImage']['card_orientation'].'")'))?>
<script type="text/javascript">
    function popup_image(img_id, orientation) {
        var width = 600;
        
        if(orientation == 'horizontal') {  
            width = 730;
        }
        
        $.fancybox({
            'width'         : width,		
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'type'          : 'iframe',
            'speedIn'       : 600, 
            'speedOut'      : 200,
            'href'          : '/card_images/popup/' + img_id,
            'onComplete'    : function() {
                $('#fancybox-frame').load(function() { // wait for frame to load and then gets it's height
                    $('#fancybox-content').height($(this).contents().find('body').height()+20);
                });
            }
        });
    }
    
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