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