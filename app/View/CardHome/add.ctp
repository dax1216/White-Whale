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
            
           /* $('#add_player_form').submit(function (eve) {
                    eve.preventDefault();
                    var row_count = $('#added-card-players > tbody > tr').length;
                    var url = $(this).attr('action') + row_count;
                    $.ajax({
                            url:url,
                            type: "POST",
                            datatype: "html",
                            data: $(this).serialize(),
                            beforeSend: function () {

                            },
                            success: function (html) {
                                    $(html).fadeIn().appendTo('#added-card-players > tbody');
                                    var targetOffset = $('#added-card-players').offset().top;
                                    $('html,body').animate({scrollTop: targetOffset}, 500, 'easeInQuint');
                                    $('player-notice').hide();
                            }
                    });
            });*/
            
            $('#add_player').live('click', function(eve) {
                    eve.preventDefault();
                    var row_count = $('#added-card-players > tbody > tr').length;
                    var url = 'ajax_add_player_row/' + row_count;
                    $.ajax({
                            url:url,
                            type: "POST",
                            datatype: "html",
                            data: $('#add_card_form').serialize(),//{player_firstname:'Carlos'},
                            beforeSend: function () {

                            },
                            success: function (html) {
                                    $(html).fadeIn().appendTo('#added-card-players > tbody');
                                    var targetOffset = $('#added-card-players').offset().top;
                                    $('html,body').animate({scrollTop: targetOffset}, 500, 'easeInQuint');
                                    $('#no_player_notice').fadeOut();
                            }
                    });
            })

            $('.delete_player').live('click', function(eve) {
            
                    if ( !confirm( 'Removing player!' ) )
                    {
                        return false;
                    }
            
                    eve.preventDefault();
                    $(this).closest('tr').fadeOut();
                    // $(this).closest('tr').remove();
            });
            
            $('.id-2-name').live('change', function(eve) {
                eve.preventDefault();
                //alert( $(this).find( 'option:selected' ).text() );
                var x = $(this).next();
                $(this).next().val( $(this).find( 'option:selected' ).text() );
            })
        });
        
    })(jQuery);
</script>



<div class="container">
	<?php //echo $this->Form->create('Card');?>
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('Add Card'); ?></h1>
	</header>
        <form id="add_card_form" method="POST">
	<section id="set_select" class="well">
            <div class="page-header">
                    <h2>
                            Card Set
                            <small>Select a Set the new Card belongs to.</small>
                    </h2>
            </div>
            <div class="row">
                <div class="span12">
                    <?php 
                        // echo $this->Form->input( 'set_info_select', array( 'label' => false, 'class' => 'search-query', 'data-provide' => 'typeahead', 'data-source' => '["Carlos","Diana","John Cedrick", "John Jacob"]' ) ); 
                        echo $this->Form->input( 'set_info_id', array( 'label' => false ) ); 
                    ?>
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
                            <?php
                                    echo $this->Form->input('name', array( 'class' => 'span4' ) );
                                    echo $this->Form->input('descriptor', array( 'class' => 'span4' ));
                                    echo $this->Form->input('card_number', array( 'class' => 'span3' ));
                                    echo $this->Form->input('franchise_group_id', array( 'label' => 'Franchise', 'class' => 'span3' ) );
                                    echo $this->Form->input('notes', array( 'type' => 'textarea', 'class' => 'span4' ) );
                            ?>				
                    </div>
                    <div class="span6">
                            <h3>Card Pictures</h3>
                            <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
                            <ul class="thumbnails">
                                    <li class="span3">
                                            <div class="thumbnail">
                                                    <img alt="" src="http://placehold.it/260x180">
                                                    <div class="caption">
                                                            <h5>Front</h5>
                                                            <p>The front side of the card.</p>
                                                            <p>
                                                                    <a class="btn btn-primary" href="#">Upload</a>
                                                            </p>
                                                    </div>
                                            </div>
                                    </li>
                                    <li class="span3">
                                            <div class="thumbnail">
                                                    <img alt="" src="http://placehold.it/260x180">
                                                    <div class="caption">
                                                            <h5>Back</h5>
                                                            <p>The back side of the card.</p>
                                                            <p>
                                                                    <a class="btn btn-primary" href="#">Action</a>
                                                                    <a class="btn" href="#">Action</a>
                                                            </p>
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
                        <small>Enter players found in the card here.</small>
                </h2>
            </div>

            <div class="row">
                
                <div class="span12">
                        <div>
                            <a id="add-player-toggle" style="cursor:pointer;"><i class="icon-chevron-up"></i>Hide Form</a>
                        </div>
                        <div id="add-player-form">
                            <!--<form method="POST" action="ajax_add_player_row/" id="add_player_form"> //-->
                                <fieldset class="add-player-set">
                                <div class="span12">
                                    <div class="row">
                                        <div class="span3 input select">
                                           <label for="PlayerPlayerId">Player</label>
                                           <select id="PlayerPlayerId" name="player[id]" class="span3 id-2-name">
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
                                            <input id="PlayerFirstName" type="text" name="player[first_name]" value="" class="span2" />
                                        </div>
                                        <div class="span2 input text">
                                            <label for="PlayerLastname">Lastname (on Card)</label>
                                            <input id="PlayerLastName" type="text" name="player[last_name]" value="" class="span2" />
                                        </div>
                                        <div class="span2 input text">
                                            <label for="PlayerNickName">Nickname</label>
                                            <input id="PlayerNickName" type="text" name="player[nick_name]" value="" class="span2" />
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
                                            <input type="hidden" id="PlayerPositionName" name="player[position_name]" />
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
                                            <input type="hidden" id="PlayerFranchiseGroupName" name="player[franchise_group_name]" />
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
                    <table id="added-card-players" class="table table-striped table-condensed span12">
                    <thead>
                        <tr>
                            <th class="span1"><?php echo __('Player');?></th>
                            <th class="span2"><?php echo __('Firstname');?></th>
                            <th class="span2"><?php echo __('Lastname');?></th>
                            <th class="span2"><?php echo __('Nickname');?></th>
                            <th class="span2"><?php echo __('Franchise');?></th>
                            <th class="span1"><?php echo __('Position');?></th>
                            <th class="span1"><?php echo __('Pimary');?></th>
                            <th class="span2"><?php echo __('Action(s)');?></th>                                
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                </div>
            </div>
	</section>	
	<?php echo $this->Form->end( array( 'label' => __( 'Submit' ), 'class' => 'btn btn-success' ) ); ?>
</div>