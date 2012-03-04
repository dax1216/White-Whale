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
                    
                    var url = '/CardHome/ajax_save_player_and_add/' + row_count;
                    $.ajax({
                            url:url,
                            type: "POST",
                            datatype: "html",
                            data: $('#add_player_form').serialize(),
                            beforeSend: function () {

                            },
                            success: function (html) {
                                    $(html).fadeIn().appendTo('#added-card-players > tbody');
                                    var targetOffset = $('#added-card-players').offset().top;
                                    
                                    // TODO: Somehow this is throwing an error. Check.
                                    // $('html,body').animate({scrollTop: targetOffset}, 500, 'easeInQuint');
                                    
                                    resetForm( $( '#add-player-form' ) );
                            }
                    });
            })

            $('.delete_player').live('click', function(eve) {
            
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
                                <?php echo $this->Form->create( 'CardPlayer', array( 'id' => 'add_player_form' ) ); ?>
                                    <fieldset class="add-player-set">
                                    <?php
                                        echo $this->Form->input( 'card_id', array( 'type' => 'hidden', 'value' => $card[ 'name' ] ) );
                                    ?>
                                    <div class="span12">
                                        <div class="row">
                                            <div class="span3 input select">
                                               <label for="PlayerPlayerId">Player</label>
                                               <select id="PlayerPlayerId" name="data[CardPlayer][player_id]" class="span3 id-2-name">
                                                    <option value="0">-- Select a Player</option>
                                                    <?php
                                                        foreach( $players as $player_id => $player )
                                                        {
                                                            echo "<option value='{$player_id}'>{$player}</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <input type="hidden" id="PlayerName" name="data[CardPlayer][name]" />
                                            </div>                                    
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="row">
                                            <div class="span2 input text">
                                                <label for="PlayerFirstName">Firstname (on Card)</label>
                                                <input id="PlayerFirstName" type="text" name="data[CardPlayer][card_first_name]" value="" class="span2" />
                                            </div>
                                            <div class="span2 input text">
                                                <label for="PlayerLastname">Lastname (on Card)</label>
                                                <input id="PlayerLastName" type="text" name="data[CardPlayer][card_last_name]" value="" class="span2" />
                                            </div>
                                            <div class="span2 input text">
                                                <label for="PlayerNickName">Nickname</label>
                                                <input id="PlayerNickName" type="text" name="data[CardPlayer][card_nick_name]" value="" class="span2" />
                                            </div>
                                            <div class="span2 input select">
                                                <label for="PlayerPositionId">Position</label>
                                                <select id="PlayerPositionId" name="data[CardPlayer][position_id]" class="span2 id-2-name">
                                                    <option value="0">-- Select a Position</option>
                                                    <?php
                                                        foreach( $positions as $position_id => $position )
                                                        {
                                                            echo "<option value='{$position_id}'>{$position}</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <input type="hidden" id="PlayerPositionName" name="data[CardPlayer][position_name]" value="" />
                                            </div>
                                            <div class="span2 input select">
                                                <label for="PlayerFranchiseGroupId">Franchise Group</label>
                                                <select id="PlayerFranchiseGroupId" name="data[CardPlayer][franchise_group_id]" class="span2 id-2-name">
                                                    <option value="0">-- Select a Franchise</option>
                                                    <?php
                                                        foreach( $franchiseGroups as $franchise_id => $franchise )
                                                        {
                                                            echo "<option value='{$franchise_id}'>{$franchise}</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <input type="hidden" id="PlayerFranchiseGroupName" name="data[CardPlayer][franchise_group_name]" value="" />
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
                                <?php echo $this->Form->end(); ?>
                            </div>
                        </div>
                    </div>                  

                    <div class="span12">&nbsp;</div>             

            <div class="row">
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
                                $cardPlayer[ 'position_name' ] = isset( $positions[ $cardPlayer[ 'position_id' ] ] ) ? $positions[ $cardPlayer[ 'position_id' ] ] : '';
                                $cardPlayer[ 'franchise_group_name' ] = isset( $franchiseGroups[ $cardPlayer[ 'franchise_group_id' ] ] ) ? $franchiseGroups[ $cardPlayer[ 'franchise_group_id' ] ] : '';
                                echo $this->element( 'CardHome/add_player_row', array( 'row_count' => $key, 'data' => $cardPlayer ) );
                            }
                        }
                    ?>
                    </tbody>
                    </table>
                    
                </div>
            </div>
	</section>	
</div>
