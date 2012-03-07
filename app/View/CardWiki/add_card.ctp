<?php 
    echo $this->Html->script( 'jquery/jquery-1.7.1.min.js', array( 'inline' => false ) ); 
    echo $this->Html->script( 'jquery/jquery-ui-1.8.17.custom.min', array( 'inline' => false ) ); 
    echo $this->Html->script( 'jquery/plugin/jquery.table.addrow.js', array( 'inline' => false ) ); 
    //echo $this->Html->script( 'bootstrap/bootstrap-collapse.js', array( 'inline' => false ) ); 
    echo $this->Html->script( 'bootstrap/bootstrap-typeahead.js', array( 'inline' => false ) ); 
?>
<script type="text/javascript">
    (function($){
        $(document).ready(function(){
            /*$('.search-player').typeahead({
                source: ['Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Dakota','North Carolina','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming']
            });*/

            //if we're doing a lot of toggling then let's cache the selectors in a variable to minimize overhead
            var $add_player_toggle = $("#add-player-toggle");
            var $add_player_form = $('#add_player_form');

            $add_player_toggle.bind('click',function(eve) {
                    eve.preventDefault();
                    if($add_player_form.is(':hidden'))
                    {
                            $add_player_toggle.html('<i class="icon-chevron-up"></i>Hide Form');
                    }
                    else
                    {
                            $add_player_toggle.html('<i class="icon-chevron-down"></i>Add  New Player');
                    }
                    // stop animation stacking and execute the final animation
                    $add_player_form.stop(true,true).slideToggle();
            });
            
            $('#add_player').live('click', function(eve) {
                    eve.preventDefault();
                    
                    var row_count = $('#added-card-players > tbody > tr').length;
                    
                    if ( row_count > 0 ) 
                    {
                        $('#added-card-players tr:last').each(function() {
                            row_count = Number( $( this ).find("td:first").find("input:first").val() ) + 1;    
                        });
                    }
                    
                    var url = 'ajax_add_player_row/' + row_count;
                    $.ajax({
                            url:url,
                            type: "POST",
                            datatype: "html",
                            data: $('#add_card_form').serialize(),
                            beforeSend: function () {

                            },
                            success: function (html) {
                                    $(html).fadeIn().appendTo('#added-card-players > tbody');
                                    var targetOffset = $('#added-card-players').offset().top;
                                    
                                    // TODO: Somehow this is throwing an error. Check.
                                    // $('html,body').animate({scrollTop: targetOffset}, 500, 'easeInQuint');
                                    
                                    resetForm( $( '#add_player_form' ) );
                            }
                    });
            })

            $('.delete-player').live('click', function(eve) {
            
                    if ( !confirm( 'Remove player!' ) )
                    {
                        return false;
                    }
            
                    eve.preventDefault();
                    $(this).closest('tr').fadeOut().remove();
            });
            
            // For each select onchange event, update it's corresponding hidden input
            $('.id-2-name').live('change', function(eve) {
                eve.preventDefault();
                var selected_text = $(this).find( 'option:selected' ).text();
                $(this).next().val( selected_text );
                if( $( this ).attr( 'id' ) == 'PlayerPlayerId' )
                {
                    /* 
                     * Populate the firstname and lastname fields based on the selected player from the droplist.
                     * TODO: Check what is causing the slowdown. */
                    var name = selected_text.split( ' ' );
                    $( '#PlayerFirstName' ).val( name[0] );
                    $( '#PlayerLastName' ).val( name[1] );
                }
            })
            
            $('.set-as-primary-btn').live('click', function(eve) {
                eve.preventDefault();
                
                // Unmark everything
                $('#added-card-players tr').each(function() {
                    $(this).find('td').eq(6).each(function() {
                        $(this).find('input').val('0');
                        $(this).find('i').removeClass('icon-flag');
                    })
                })
                
                $(this).closest('tr').find('td').eq(6).find('input').val('1');
                $(this).closest('tr').find('td').eq(6).find('i').addClass('icon-flag');
            })
        });
        
    })(jQuery);
    
    // Clear form fields values
    function resetForm( target_div )
    {
        // TODO: Find a way to parse through the form instead of updating each and every field elements
        // $(target_div).find('input[type=text]').val('');
        // $(target_div).find('option:selected').removeAttr('selected');
        
        
        // Reset input fields
        $( '#PlayerFirstName' ).val( '' );
        $( '#PlayerLastName' ).val( '' );
        $( '#PlayerNickName' ).val( '' );        
        
        // Reset select fields
        $( '#PlayerPlayerId' ).val( 0 );
        $( '#PlayerPositionId' ).val( 0 );
        $( '#PlayerFranchiseGroupId' ).val( 0 );        
    }
    
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
	<?php //echo $this->Form->create('Card');?>
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('Add Card'); ?></h1>
	</header>
        <form id="add_card_form" method="POST" enctype="multipart/form-data">
	<section id="set_select" class="well">
            <div class="page-header">
                    <h2>
                            Card Set
                            <small>Select a Set the new Card belongs to.</small>
                    </h2>
            </div>
            <div class="row">
                <div class="span12">
                    <fieldset>
                    <?php 
                        // echo $this->Form->input( 'set_info_select', array( 'label' => false, 'class' => 'search-query', 'data-provide' => 'typeahead', 'data-source' => '["Carlos","Diana","John Cedrick", "John Jacob"]' ) ); 
                        echo $this->Form->input( 'Card.set_info_id', array( 'label' => false ) ); 
                    ?>
                    </fieldset>
                </div>
            </div>
	</section>
	<section id="card_details" class="well">
            <div class="page-header">
                    <h2>
                            Card Details
                            <small>Enter card details below.</small>
                    </h2>
            </div>
            <div class="row">
                <div class="span4">
                    <fieldset>
                    <ul class="unstyled">
                        <li>
                            <?php /*echo $this->Form->input('Card.name', 
                                                          array( 'class' => 'span4',
                                                                 'disabled' => '1',
                                                                 'error' => array( 'attributes' => array( 'class' => 'label label-important' ) ) ) );*/ ?>
                        </li>
                        <li>
                            <?php echo $this->Form->input('Card.descriptor', array( 'class' => 'span4' )); ?>
                        </li>
                        <li>
                            <?php echo $this->Form->input('Card.card_number',  
                                                          array( 'class' => 'span3',
                                                                 'error' => array( 'attributes' => array( 'class' => 'label label-important' ) ) ) ); ?>
                        </li>
                        <li>
                            <?php echo $this->Form->input('Card.franchise_group_id', array( 'label' => 'Franchise', 'class' => 'span3' ) ); ?>
                        </li>
                        <li>
                            <?php echo $this->Form->input('variation_id', array( 'label' => 'Variation', 'class' => 'span3' ) ); ?>
                        </li>
                        <li>
                            <?php  echo $this->Form->input('Card.notes', array( 'type' => 'textarea', 'class' => 'span4' ) ); ?>
                        </li>
                    </ul>
                    </fieldset>
                </div>
                <div class="span6">
                    <h3>Card Pictures</h3>
                    <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
                    <fieldset>
                    <div>
                    <?php  
                        echo $this->Form->label('Card.card_orientation');

                        $attributes = array('legend' => false, 'value' => 'vertical', 'label' => false, 'class' => 'card_orientation');           

                        echo $this->Form->radio('Card.card_orientation', array('vertical' => 'Vertical', 'horizontal' => 'Horizontal'), $attributes);
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
                                    echo $this->Form->input('Card.card_front_side', array('type' => 'file', 'label' => false, 'onchange' => 'imagePreview(this.files, this)'));
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
                                    echo $this->Form->input('Card.card_back_side', array('type' => 'file', 'label' => false, 'onchange' => 'imagePreview(this.files, this)')); 
                                ?>                
                            </div>
                        </li>
                    </ul>
                    </fieldset>
                </div>                
            </div>
	</section>

        <section id="card_players" class="well">
            <div class="page-header">
                <h2>
                        Card Players
                        <small>Enter players found in the card here.</small>
                </h2>
            </div>

            <div class="row">
                
                <div class="span12">
                        <div>
                            <a id="add-player-toggle" style="cursor:pointer;"><i class="icon-chevron-up"></i>Hide Form</a>
                        </div>
                        <div id="add_player_form">
                            <!--<form method="POST" action="ajax_add_player_row/" id="add_player_form"> //-->
                                <fieldset>
                                <div class="span12">
                                    <div class="row">
                                        <div class="span3 input select">
                                           <label for="PlayerPlayerId">Player</label>
                                           <select id="PlayerPlayerId" name="player[player_id]" class="span3 id-2-name">
                                                <option value="0">-- Select a Player</option>
                                                <?php
                                                    foreach( $players as $player_id => $player )
                                                    {
                                                        echo "<option value='{$player_id}'>{$player}</option>";
                                                    }
                                                ?>
                                            </select>
                                            <input type="hidden" id="PlayerName" name="player[name]" />
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="span12">
                                    <div class="row">
                                        <div class="span2 input text">
                                            <label for="PlayerFirstName">Firstname (on Card)</label>
                                            <input id="PlayerFirstName" type="text" name="player[card_first_name]" value="" class="span2" />
                                        </div>
                                        <div class="span2 input text">
                                            <label for="PlayerLastname">Lastname (on Card)</label>
                                            <input id="PlayerLastName" type="text" name="player[card_last_name]" value="" class="span2" />
                                        </div>
                                        <div class="span2 input text">
                                            <label for="PlayerNickName">Nickname</label>
                                            <input id="PlayerNickName" type="text" name="player[card_nick_name]" value="" class="span2" />
                                        </div>
                                        <div class="span2 input select">
                                            <label for="PlayerPositionId">Position</label>
                                            <select id="PlayerPositionId" name="player[position_id]" class="span2 id-2-name">
                                                <option value="0">-- Select a Position</option>
                                                <?php
                                                    foreach( $positions as $position_id => $position )
                                                    {
                                                        echo "<option value='{$position_id}'>{$position}</option>";
                                                    }
                                                ?>
                                            </select>
                                            <input type="hidden" id="PlayerPositionName" name="player[position_name]" value="" />
                                        </div>
                                        <div class="span2 input select">
                                            <label for="PlayerFranchiseGroupId">Franchise Group</label>
                                            <select id="PlayerFranchiseGroupId" name="player[franchise_group_id]" class="span2 id-2-name">
                                                <option value="0">-- Select a Franchise</option>
                                                <?php
                                                    foreach( $franchiseGroups as $franchise_id => $franchise )
                                                    {
                                                        echo "<option value='{$franchise_id}'>{$franchise}</option>";
                                                    }
                                                ?>
                                            </select>
                                            <input type="hidden" id="PlayerFranchiseGroupName" name="player[franchise_group_name]" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="span12">
                                    <button id="add_player" name="add_player" type="button" class="add-new-player btn btn-primary">
                                        <i class="icon-plus icon-white"></i>
                                        Add Player
                                    </button>
                                </div>
                                </fieldset>
                        </div>
                </div>                  
                
                <div class="span12">&nbsp;</div>
                
                <div class="span12">
                    <table id="added-card-players" class="table table-striped table-condensed span11">
                    <thead>
                        <tr>
                            <th class="span1"><?php echo __('Player');?></th>
                            <th class="span2"><?php echo __('Firstname');?></th>
                            <th class="span2"><?php echo __('Lastname');?></th>
                            <th class="span2"><?php echo __('Nickname');?></th>
                            <th class="span1"><?php echo __('Position');?></th>
                            <th class="span2"><?php echo __('Franchise');?></th>
                            <th class="span1"><?php echo __('Primary');?></th>
                            <th class="span2"><?php echo __('Action(s)');?></th>                                
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if( isset( $data[ 'CardPlayer' ] ) ) {
                            foreach( $data[ 'CardPlayer' ] as $key => $cardPlayer )
                            {
                                echo $this->element( 'CardHome/add_player_row', array( 'row_count' => $key, 'data' => $cardPlayer ) );
                            }
                        }
                    ?>
                    </tbody>
                    </table>
                </div>
            </div>
	</section>	
	<?php echo $this->Form->end( array( 'label' => __( 'Submit' ), 'class' => 'btn btn-success' ) ); ?>
</div>
