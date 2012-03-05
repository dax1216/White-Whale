<?php 
    echo $this->Html->script( 'jquery/jquery-1.7.1.min.js', array( 'inline' => false ) ); 
    echo $this->Html->script( 'jquery/jquery-ui-1.8.17.custom.min', array( 'inline' => false ) ); 
    echo $this->Html->script( 'jquery/plugin/jquery.table.addrow.js', array( 'inline' => false ) ); 
    //echo $this->Html->script( 'bootstrap/bootstrap-collapse.js', array( 'inline' => false ) ); 
    echo $this->Html->script( 'bootstrap/bootstrap-typeahead.js', array( 'inline' => false ) ); 
    echo $this->Html->css(array('jquery.fancybox-1.3.4',), null, array('inline' => false));
    echo $this->Html->script(array('jquery-1.7.1','jquery.easing-1.3.pack','jquery.fancybox-1.3.4.pack'), array('inline' => false));
?>

<script type="text/javascript">
    function popup_image(card_variation_img_id, orientation) {
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
            'href'          : '/Images/card_variation_image_popup/' + card_variation_img_id,
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

            //if we're doing a lot of toggling then let's cache the selectors in a variable to minimize overhead
            var $add_player_toggle = $("#add-player-toggle");
            var $add_player_form = $('#add-player-form');

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
                    
                    var url = '/CardPlayers/save_player_and_add_row/' + row_count;
                    $.ajax({
                            url:url,
                            type: "POST",
                            datatype: "html",
                            data: $('#add_player_form').serialize(),
                            beforeSend: function () {

                            },
                            success: function (html) {
                                    $(html).fadeIn().appendTo('#card_players > tbody');
                                    var targetOffset = $('#added-card-players').offset().top;
                                    
                                    // TODO: Somehow this is throwing an error. Check.
                                    // $('html,body').animate({scrollTop: targetOffset}, 500, 'easeInQuint');
                                    
                                    resetForm( $( '#add-player-form' ) );
                            }
                    });
            })

            $('.delete-player').live('click', function(eve) {
            
                    if ( !confirm( 'Remove player!' ) )
                    {
                        return false;
                    }
                    var url = '/CardPlayers/remove_player_from_card/';
                    $.ajax({
                            url:url,
                            type: "GET",
                            datatype: "html",
                            data: $(this).closest( 'td' ).find( 'input' ).val(),
                            beforeSend: function () {
                                // Additional processing before sending out request
                            },
                            success: function (html) {
                                        // TODO: Add functionality to display success message on page
                                    }
                    });                     
                    
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
                
                var btn_clicked = $(this);
                
                // Unmark everything
                $('#card_players tr').each(function() {
                    $(this).find('td').eq(6).each(function() {
                        $(this).find('input').val('0');
                        $(this).find('i').removeClass('icon-flag');
                    })
                })

                $(this).closest('tr').find('td').eq(6).find('input').val('1');
                $(this).closest('tr').find('td').eq(6).find('i').addClass('icon-flag');                
                
                var url = '/CardPlayers/set_as_primary/';
                $.ajax({
                        url:url,
                        type: "POST",
                        datatype: "html",
                        data: $('#add_player_form').serialize(),
                        beforeSend: function () {
                            // Additional processing before sending out request
                        },
                        success: function (html) {
                                    // TODO: Add functionality to display success message on page
                                }
                });                
            })
        });
        
    })(jQuery);
    
    // Clear form fields values
    function resetForm( target_div )
    {
        // TODO: Find a way to parse through the form instead of updating each and every field elements
        
        // Reset input fields
        $( '#PlayerFirstName' ).val( '' );
        $( '#PlayerLastName' ).val( '' );
        $( '#PlayerNickName' ).val( '' );
        
        // Reset select fields
        $( '#PlayerPlayerId' ).val( 0 );
        $( '#PlayerPositionId' ).val( 0 );
        $( '#PlayerFranchiseGroupId' ).val( 0 );
    }
    
</script>

<div class="container">
	<?php 
            $card = $data[ 'Card' ];
            // var_dump( $data[ 'Card' ] );
        ?>
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('View Card'); ?></h1>
	</header>
	<section id="set_select" class="well">
            <div class="page-header">
                    <h2>
                            Card Set
                            <small>The Set the card belongs to</small>
                    </h2>
            </div>
            <div class="row">
                <div class="span12">
                    <strong>
                    <?php 
                        echo __( $setInfos[ $card[ 'set_info_id' ] ] ); 
                    ?>
                    </strong>
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
                            <div>
                                <label>Name:</label>
                                <strong>
                                <?php 
                                    echo __( $card[ 'name' ] ); 
                                ?>
                                </strong>                            
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div>
                                <label>Short Name:</label>
                                <strong>
                                <?php 
                                    echo __( $card[ 'short_name' ] ); 
                                ?>
                                </strong>                            
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div>
                                <label>Descriptor:</label>
                                <strong>
                                <?php 
                                    echo __( $card[ 'descriptor' ] ); 
                                ?>
                                </strong>                            
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div>
                                <label>Card Number:</label>
                                <strong>
                                <?php 
                                    echo __( $card[ 'card_number' ] ); 
                                ?>
                                </strong>                            
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div>
                                <label>Franchise Group:</label>
                                <strong>
                                <?php 
                                    echo __( $franchiseGroups[ $card[ 'franchise_group_id' ] ] ); 
                                ?>
                                </strong>                            
                            </div>
                            <div>&nbsp;</div>
                        </li>
                        <li>
                            <div>
                                <label>Notes:</label>
                                <strong>
                                <?php 
                                    echo __( $card[ 'notes' ] ); 
                                ?>
                                </strong>                            
                            </div>
                            <div>&nbsp;</div>
                        </li>
                    </ul>
                    </fieldset>
                </div>
                
                    <div class="span6">
                            <h3>Base Card Images</h3>
                            <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
                            <ul class="thumbnails">
                                    <li class="span3">
                                            <div class="thumbnail">
                                                    <img alt="" src="http://placehold.it/260x180">
                                                    <div class="caption">
                                                            <h5>Front</h5>
                                                            <p>The front side of the card.</p>
                                                    </div>
                                            </div>
                                    </li>
                                    <li class="span3">
                                            <div class="thumbnail">
                                                    <img alt="" src="http://placehold.it/260x180">
                                                    <div class="caption">
                                                            <h5>Back</h5>
                                                            <p>The back side of the card.</p>
                                                    </div>
                                            </div>
                                    </li>
                            </ul>
                    </div>
            </div>
	</section>

<?php echo $this->Form->create( 'CardPlayer', array( 'id' => 'add_player_form' ) ); ?>        
        <section id="card_players" class="well">
            <div class="page-header">
                <h2>
                        Card Players
                        <small>Players found on this Card.</small>
                </h2>
            </div>
            
                <div class="row">
                    <div class="span12">
                            <div>
                                <a id="add-player-toggle" style="cursor:pointer;"><i class="icon-chevron-up"></i>Hide Form</a>
                            </div>
                            <div id="add-player-form">
                                    <fieldset class="add-player-set">
                                    <?php
                                        echo $this->Form->input( 'Player.card_id', array( 'type' => 'hidden', 'value' => $card[ 'card_id' ] ) );
                                    ?>
                                    <div class="span12">
                                        <div class="row">
                                            <div class="span3 input select">
                                               <label for="PlayerPlayerId">Player</label>
                                               <select id="PlayerPlayerId" name="data[Player][player_id]" class="span3 id-2-name">
                                                    <option value="0">-- Select a Player</option>
                                                    <?php
                                                        foreach( $players as $player_id => $player )
                                                        {
                                                            echo "<option value='{$player_id}'>{$player}</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <input type="hidden" id="PlayerName" name="data[Player][name]" />
                                            </div>                                    
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="row">
                                            <div class="span2 input text">
                                                <label for="PlayerFirstName">Firstname (on Card)</label>
                                                <input id="PlayerFirstName" type="text" name="data[Player][card_first_name]" value="" class="span2" />
                                            </div>
                                            <div class="span2 input text">
                                                <label for="PlayerLastname">Lastname (on Card)</label>
                                                <input id="PlayerLastName" type="text" name="data[Player][card_last_name]" value="" class="span2" />
                                            </div>
                                            <div class="span2 input text">
                                                <label for="PlayerNickName">Nickname</label>
                                                <input id="PlayerNickName" type="text" name="data[Player][card_nick_name]" value="" class="span2" />
                                            </div>
                                            <div class="span2 input select">
                                                <label for="PlayerPositionId">Position</label>
                                                <select id="PlayerPositionId" name="data[Player][position_id]" class="span2 id-2-name">
                                                    <option value="0">-- Select a Position</option>
                                                    <?php
                                                        foreach( $positions as $position_id => $position )
                                                        {
                                                            echo "<option value='{$position_id}'>{$position}</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <input type="hidden" id="PlayerPositionName" name="data[Player][position_name]" value="" />
                                            </div>
                                            <div class="span2 input select">
                                                <label for="PlayerFranchiseGroupId">Franchise Group</label>
                                                <select id="PlayerFranchiseGroupId" name="data[Player][franchise_group_id]" class="span2 id-2-name">
                                                    <option value="0">-- Select a Franchise</option>
                                                    <?php
                                                        foreach( $franchiseGroups as $franchise_id => $franchise )
                                                        {
                                                            echo "<option value='{$franchise_id}'>{$franchise}</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <input type="hidden" id="PlayerFranchiseGroupName" name="data[Player][franchise_group_name]" value="" />
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
                    </div>                  

                    <div class="span12">&nbsp;</div>             

            <div class="row">
                <form id="card_players_form"
                <fieldset>
                <div class="span12">
                    <table id="card_players" class="table table-striped table-condensed span11">
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
                                $cardPlayer[ 'position_name' ] = isset( $positions[ $cardPlayer[ 'position_id' ] ] ) ? $positions[ $cardPlayer[ 'position_id' ] ] : '';
                                $cardPlayer[ 'franchise_group_name' ] = isset( $franchiseGroups[ $cardPlayer[ 'franchise_group_id' ] ] ) ? $franchiseGroups[ $cardPlayer[ 'franchise_group_id' ] ] : '';
                                echo $this->element( 'CardHome/add_player_row', array( 'row_count' => $key, 'data' => $cardPlayer ) );
                            }
                        }
                    ?>
                    </tbody>
                    </table>
                </div>
                </fieldset>
            </div>
	</section>	
        <?php $this->Form->end(); ?>
</div>
