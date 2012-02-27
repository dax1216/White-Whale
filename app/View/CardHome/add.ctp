<?php 
    echo $this->Html->script( 'jquery/jquery-1.7.1.min.js', array( 'inline' => false ) ); 
    echo $this->Html->script( 'jquery/plugin/jquery.table.addrow.js', array( 'inline' => false ) ); 
    echo $this->Html->script( 'bootstrap/bootstrap-collapse.js', array( 'inline' => false ) ); 
    echo $this->Html->script( 'bootstrap/bootstrap-typeahead.js', array( 'inline' => false ) ); 
    
    ?>

<script type="text/javascript">
    (function($){
        $(document).ready(function(){
            $('.search-player').typeahead({
                source: ['Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Dakota','North Carolina','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming']
            });

            jQuery( "#add-player-toggle" ).click( function() 
            {
               jQuery(  )
               if ( this.innerHTML != '<i class="icon-chevron-up"></i>Hide Form' )
               {
                   this.innerHTML = '<i class="icon-chevron-up"></i>Hide Form';
               }
               else
               {
                   this.innerHTML = '<i class="icon-chevron-down"></i>Add  New Player';
               }
            });
            
            jQuery( "#add-player" ).click( function() {
                
                // Renumber rows
                var counter = 0;
                $( "#added-card-players > tbody" ).find( "tr" ).each( function() {
                    var row = $( this );
                    row.find( "td" ).each( function() {
                        var cell_input = $( this ).find( 'input' );
                        if ( cell_input.attr( 'name' ) != undefined )
                        {
                            cell_input.attr( 'name', String( cell_input.attr( 'name' ) ).replace( /[0-9]/, counter ) );
                            cell_input.attr( 'id', String( cell_input.attr( 'id' ) ).replace( /[0-9]/, counter ) );
                        }
                    });
                    counter++
                })
                
                if ( counter == 0 )
                {
                    counter++;
                }
                
                var new_row = $( "#added-card-players tbody > tr:last" ).clone( true );
                $( 'td', new_row ).each( function( i, col ) {
                    
                    $( 'input, select, span', col ).each( function( j, elem ) {
                        // alert( $( elem ).get( 0 ).innerHTML );
                        var tag = $( elem ).get( 0 ).localName;

                        if ( tag == 'input' )
                        {
                            $( elem ).attr( 'name', String( $( elem ).attr( 'name' ).replace( '/[0-9]/', counter ) ) );
                            $( elem ).attr( 'id', String( $( elem ).attr( 'id' ).replace( '/[0-9]/', counter ) ) );
                            // Change the value
                        }
                        else if ( tag == 'span' )
                        {
                            // Set the display
                            $( elem ).get( 0 ).innerHTML = 'Diana Banawan';
                        }
                        
                    })
                    var form_field = $( this ).find( 'input' );
                    if ( form_field.attr( 'name' ) != undefined )
                    {
                        form_field.attr( 'name', String( form_field.attr( 'name' ).replace( '/[0-9]/', counter ) ) );
                        form_field.attr( 'id', String( form_field.attr( 'id' ).replace( '/[0-9]/', counter ) ) );
                        form_field.attr( 'value', $( "#" + form_field.attr( 'class' ) ).val() );
                    }
                })
                new_row.insertAfter( "#added-card-players tbody > tr:last" );
            });
           
            //$(".addPlayer").btnAddRow();
            //$(".delPlayer").btnDelRow();
        });
        
    })(jQuery);
</script>



<div class="container">
	<?php echo $this->Form->create('Card');?>
	<header id="title" class="jumbotron subhead">
            <h1><?php echo __('Add Card'); ?></h1>
	</header>
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
                        echo $this->Form->input( 'set_info', array( 'label' => false ) ); 
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
                                    echo $this->Form->input('short_name', array( 'class' => 'span3' ));
                                    echo $this->Form->input('descriptor', array( 'class' => 'span4' ));
                                    echo $this->Form->input('card_number', array( 'class' => 'span3' ));
                                    echo $this->Form->input('franchise_id', array( 'label' => 'Franchise', 'class' => 'span3' ) );
                                    echo $this->Form->input('team_id', array( 'class' => 'span3' ));
                                    // echo $this->Form->input('notes', array( 'type' => 'textarea', 'class' => 'span4' ) );
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
                    <div id="app-player-accordion" class="accordion">
                        <div>
                            <a id="add-player-toggle" href="#add-player-form" data-toggle="collapse"><i class="icon-chevron-up"></i>Hide Form</a>
                        </div>
                        <div id="add-player-form" class="accordion-body collapse in" style="height: auto;">
                            <div class="accordion-inner row">
                                <fieldset class="add-player-set">
                                <!-- 
                                <input type="hidden" id="card_player_id" value="" />
                                <div class="span12">
                                    Select a Player:
                                    <a href="#">Carlos B. Banawan Jr.</a> | <a href="#">Remove</a>
                                    <input type="hidden" id="player_id" value="1" />
                                </div>
                                
                                <div class="span12">
                                    <div class="controls">
                                        <div class="input-prepend">
                                            <span class="add-on">
                                                <i class="icon-search"></i>
                                            </span>
                                            <input class="span2 search-player" type="text" data-items="4" data-provide="typeahead" style="margin: 0 auto;" />
                                        </div>
                                    </div>
                                </div>
                                // -->
                                
                                <div class="span12">
                                    <div class="row">
                                        <div class="span3 input select">
                                            <label for="player_id">Player</label>
                                           <select id="player_id" name="player_id" class="span3">
                                                <option value="0">-- Select a Player</option>
                                                <?php
                                                    foreach( $players as $player_id => $player )
                                                    {
                                                        echo "<option id='{$player_id}'>{$player}</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="span12">
                                    <div class="row">
                                        <div class="span2 input text">
                                            <label for="player_firstname">Firstname (on Card)</label>
                                            <input id="player_firstname" type="text" name="player_firstname" class="span2" />
                                        </div>
                                        <div class="span2 input text">
                                            <label for="player_firstname">Lastname (on Card)</label>
                                            <input id="player_lastname" type="text" name="player_lastname" class="span2" />
                                        </div>
                                        <div class="span2 input text">
                                            <label for="player_nickname">Nickname</label>
                                            <input id="player_nickname" type="text" name="player_nickname" class="span2" />
                                        </div>
                                        <div class="span2 input select">
                                            <label for="player_position_id">Position</label>
                                            <select id="player_position_id" name="player_position_id" class="span2">
                                                <option value="0">-- Select a Position</option>
                                                <?php
                                                    foreach( $positions as $position_id => $position )
                                                    {
                                                        echo "<option id='{$position_id}'>{$position}</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="span2 input select">
                                            <label for="player_team_id">Team</label>
                                            <select id="player_team_id" name="player_team_id" class="span2">
                                                <option value="0">-- Select a Team</option>
                                                <?php
                                                    foreach( $teams as $team_id => $team )
                                                    {
                                                        echo "<option id='{$team_id}'>{$team}</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="span12">
                                    <button id="add-player" name="add-player" type="button" class="add-new-player btn btn-primary">
                                        <i class="icon-plus icon-white"></i>
                                        Add Player
                                    </button>
                                </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>                  
                
                <div class="span12">
                    <table id="added-card-players" class="table table-striped table-condensed">
                    <thead>
                        <tr>
                            <th><?php echo __('Player');?></th>
                            <th><?php echo __('Firstname');?></th>
                            <th><?php echo __('Lastname');?></th>
                            <th><?php echo __('Nickname');?></th>
                            <th><?php echo __('Team');?></th>
                            <th><?php echo __('Position');?></th>
                            <th><?php echo __('Pimary');?></th>
                            <th><?php echo __('Action(s)');?></th>                                
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php echo $this->Form->hidden( 'CardPlayer.0.card_player_id' ); ?>
                            <td>
                                <?php 
                                    echo $this->Form->hidden( 'CardPlayer.0.player_id', array( 'class' => 'player_id' ) );
                                ?>
                                <span>Carlos B. Banawan Jr.</span>
                            </td>
                            <td>
                                <?php 
                                    echo $this->Form->hidden( 'CardPlayer.0.firstname' );
                                    echo __('Carlos Jr.');
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $this->Form->hidden( 'CardPlayer.0.lastname' );
                                    echo __('Banawan');
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $this->Form->hidden( 'CardPlayer.0.nickname' );
                                    echo __('Jok2x');
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $this->Form->hidden( 'CardPlayer.0.position_id' );
                                    echo __('1B');
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $this->Form->hidden( 'CardPlayer.0.team_id' );
                                    echo __('Mobod Sox');
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $this->Form->hidden( 'CardPlayer.0.is_pimary' );
                                    echo $this->Html->tag( 'i', '', array( 'class' => 'icon-flag' ) );
                                ?>
                            </td>
                            <td>
                                <button id="set_as_primary" class="btn btn-success" type="button">
                                    <i class="icon-flag icon-white"></i>
                                </button>
                                <button id="edit_player" class="btn btn-success" type="button">
                                    <i class="icon-pencil icon-white"></i>
                                </button>
                                <button id="delete_players" class="btn btn-danger" type="button">
                                    <i class="icon-remove icon-white"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
           
                <!--
                <div class="span12">
                        <table class="table table-striped table-condensed">
                                <thead>
                                        <tr>
                                                <th><?php echo __('Player');?></th>
                                                <th><?php echo __('Firstname');?></th>
                                                <th><?php echo __('Lastname');?></th>
                                                <th><?php echo __('Team');?></th>
                                                <th><?php echo __('Position');?></th>
                                                <th><?php echo __('Is Primary?');?></th>
                                                <th><?php echo __('Action(s)');?></th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                <td><?php echo $this->Form->input( 'CardPlayer.0.player_id', array( 'label' => false ) ); ?></td>
                                                <td><?php echo $this->Form->input( 'name', array( 'label' => false )); ?></td>
                                                <td><?php echo $this->Form->input( 'name', array( 'label' => false )); ?></td>
                                                <td><?php echo $this->Form->input( 'team_id', array( 'label' => false )); ?></td>
                                                <td><?php echo $this->Form->input( 'CardPlayer.0.position_id', array( 'label' => false )); ?></td>
                                                <td>
                                                        <div>
                                                                <div class="span1">
                                                                <?php 
                                                                        // echo $this->Form->input( 'CardPlayer.0.is_primary', array( 'label' => false )); 
                                                                        echo $this->Html->tag( 'i', '', array( 'class' => 'icon-flag' ) );
                                                                ?>
                                                                </div>
                                                        </div>
                                                </td>
                                                <td>
                                                        <div class="row">
                                                                        <div class="span1">
                                                                                <?php echo $this->Form->button( $this->Html->tag( 'i', '', array( 'class' => 'icon-flag icon-white' ) ), array( 'type' => 'button', 'id' => 'primary_player', 'class' => 'primaryPlayer btn btn-success' ) );?>
                                                                        </div>
                                                                        <div class="span1">
                                                                                <?php echo $this->Form->button( $this->Html->tag( 'i', '', array( 'class' => 'icon-remove icon-white' ) ), array( 'type' => 'button', 'id' => 'del_player', 'class' => 'delPlayer btn btn-danger' ) );?>
                                                                        </div>
                                                        </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td colspan='4'>
                                                        <div>
                                                                <?php echo $this->Form->button( $this->Html->tag( 'i', '', array( 'class' => 'icon-plus icon-white' ) ), array( 'type' => 'button', 'id' => 'add_player', 'class' => 'addPlayer btn btn-success' ) );?>
                                                        </div>
                                                </td>
                                        </tr>
                                </tbody>
                        </table>				
                </div>
            </div> //-->
	</section>	
	<?php echo $this->Form->end( array( 'label' => __( 'Submit' ), 'class' => 'btn btn-success' ) ); ?>
</div>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />