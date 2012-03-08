<?php 
    // echo $this->Html->script( 'jquery/jquery-1.7.1.min.js', array( 'inline' => false ) ); 
    echo $this->Html->css(array('jquery.fancybox-1.3.4',), null, array('inline' => false));
    echo $this->Html->script(array('jquery-1.7.1','jquery.easing-1.3.pack','jquery.fancybox-1.3.4.pack'), array('inline' => false));
?>

<script type="text/javascript">
    function popup_image(card_variation_img_id, side, orientation) {
        var width = 620;
        
        if(orientation == 'horizontal') {  
            width = 735;
        }
        
        $.fancybox({
            'width'         : width,		
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'type'          : 'iframe',
            'speedIn'       : 600, 
            'speedOut'      : 200,
            'href'          : '/Images/card_variation_image_popup/' + card_variation_img_id + '/' + side,
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
    
    (function($){
        $(document).ready(function(){
            $('#CardVariationCardId').live('change', function(eve) {
                eve.preventDefault();
                window.location = '/CardVariations/add/' + $(this).val();
            })
        })
    })(jQuery);
    
    function imagePreview(files, input_obj) {
        var file = files[0];
        var imageType = /image.*/;
        if (!file.type.match(imageType)) {
            alert('The file selected is not an image');
            return false;
        }  
        var img = document.createElement("img");
        
        if($('input.card_orientation:checked').val() == 'horizontal') {
            img.style.height = '100px';
            img.height = 100;
        } else {
            img.style.height = '150px';
            img.height = 150;
        }
        
        img.file = file;
        $(input_obj).parent('div').siblings('.preview').html(img);
        var reader = new FileReader();
        reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
        reader.readAsDataURL(file);
    }
   
</script>
<div class="container">
	<header id="title" class="jumbotron subhead">
            <h1>
                <?php echo __('Add Card Variation'); ?>
                <small>
                    [<?php echo $this->Html->link( 'Enter a New Variation', '#card_details' ); ?>]
                    [<?php echo $this->Html->link( 'View Current Variations', '#card_variations' ); ?>]
                </small>
            </h1>
	</header>
        
        <?php echo $this->Form->create( 'CardVariation', array( 'type' => 'file' ) ); ?>
	<section id="set_select" class="well">
            <div class="page-header">
                    <h2>
                            Card
                            <small>Add variation to this card.</small>
                    </h2>
            </div>
            <div class="row">
                <div class="span12">
                    <fieldset>
                    <?php 
                        $selectedCardId = isset( $data[ 'Card' ][ 'card_id' ] ) ? $data[ 'Card' ][ 'card_id' ] : '';
                        echo $this->Form->input( 'CardVariation.card_id', array( 'label' => false, 'value' => $selectedCardId, 'width' => '650', 'style' => 'width:650px' ) ); 
                    ?>
                    </fieldset>
                </div>
            </div>
	</section>
	<section id="card_details" class="well">
            <div class="page-header">
                    <h2>
                            Card Variation Details
                            <small>Enter variation details below.</small>
                    </h2>
            </div>
            <div class="row">
                <div class="span4">
                    <fieldset>
                    <ul class="unstyled">
                        <li>
                            <?php echo $this->Form->input('CardVariation.variation_id', array( 'label' => 'Variation', 'class' => 'span3' ) ); ?>
                        </li>
                    </ul>
                    </fieldset>
                </div>
                <div class="span6">
                    <h3>Variation Pictures</h3>
                    <p>With a bit of extra markup, it's possible to add any kind of HTML content.</p>
                    <fieldset>
                    <div>
                    <?php  
                        echo $this->Form->label('Card.card_orientation');

                        $attributes = array('legend' => false, 'value' => 'vertical', 'label' => false, 'class' => 'card_orientation');           

                        echo $this->Form->radio('CardVariationImage.card_orientation', array('vertical' => 'Vertical', 'horizontal' => 'Horizontal'), $attributes);
                    ?>        
                    </div>
                    <ul class="thumbnails">
                        <li>
                            <div class="thumbnail">
                                <div class="preview">
                                    <img src="http://placehold.it/260x180" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Front</h5>
                                    <p>The front side of the card.</p>
                                </div>
                                <?php 
                                    echo $this->Form->input('CardVariationImage.card_front_side', array('type' => 'file', 'label' => false, 'onchange' => 'imagePreview(this.files, this)'));
                                ?>                
                            </div>
                        </li>
                        <li>
                            <div class="thumbnail">
                                <div class="preview">
                                    <img src="http://placehold.it/260x180" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Back</h5>
                                    <p>The back side of the card.</p>
                                </div>
                                <?php 
                                    echo $this->Form->input('CardVariationImage.card_back_side', array('type' => 'file', 'label' => false, 'onchange' => 'imagePreview(this.files, this)')); 
                                ?>                
                            </div>
                        </li>
                    </ul>
                    </fieldset>
                </div>
            </div>
	</section>
        <?php echo $this->Form->end(  array( 'label' => __( 'Submit' ), 'class' => 'btn btn-success' )  ); ?>
        
        <section id="card_variations" class="well">
            <div class="page-header">
                <h2>
                        Current Variations
                        <small>Current variations here.</small>
                </h2>
            </div>

            <div class="row">
                <div class="span12">
                <?php 
                    // debug( $data[ 'CardVariation' ] );
                    if ( isset( $data[ 'CardVariation' ] ) && !empty( $data[ 'CardVariation' ] ) )
                    {
                        echo $this->element( 'CardVariations/card_variation_list', array( 'data' => $data ) );
                    } 
                    else 
                    {
                        echo '<span>(No variations)</span>';
                    }
                ?>
                </div>
            </div>
	</section>	
</div>

<!--
<div class="cardVariations form">
<?php echo $this->Form->create('CardVariation');?>
	<fieldset>
		<legend><?php echo __('Add Card Variation'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('card_id');
		echo $this->Form->input('variation_id');
		echo $this->Form->input('is_base');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Card Variations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Variations'), array('controller' => 'variations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variation'), array('controller' => 'variations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Variation Images'), array('controller' => 'card_variation_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Variation Image'), array('controller' => 'card_variation_images', 'action' => 'add')); ?> </li>
	</ul>
</div>
//-->