<tr>
        <td>
		<?php 
                	echo $this->Form->hidden( "CardPlayer.{$row_count}.row_count", array( 'class' => 'row-count', 'value' => $row_count ) );
                        if ( isset( $data["card_player_id"] ) )
                        {
                            echo $this->Form->hidden( "CardPlayer.{$row_count}.card_player_id", array( 'value' => isset( $data["card_player_id"] ) ? $data["card_player_id"] : "" ) );
                        }
                        if( isset( $data["card_id"] ) )
                        {
                            echo $this->Form->hidden( "CardPlayer.{$row_count}.card_id", array( 'value' => isset( $data["card_id"] ) ? $data["card_id"] : "" ) );
                        }
			echo $this->Form->hidden( "CardPlayer.{$row_count}.player_id", array( 'class' => 'player_id', 'value' => $data["player_id"] ) );
                        echo $data["player_id"];
		?>
	</td>
	<td>
		<?php 
			echo $this->Form->hidden( "CardPlayer.{$row_count}.card_first_name", array( 'value' => $data["card_first_name"] ) );
			echo $data["card_first_name"];
		?>
	</td>
	<td>
		<?php 
			echo $this->Form->hidden( "CardPlayer.{$row_count}.card_last_name", array( 'value' => $data["card_last_name"] ) );
			echo $data["card_last_name"];
		?>
	</td>
	<td>
		<?php 
			echo $this->Form->hidden( "CardPlayer.{$row_count}.card_nick_name", array( 'value' => $data["card_nick_name"] ) );
			echo $data["card_nick_name"];
		?>
	</td>
	<td>
		<?php 
			echo $this->Form->hidden( "CardPlayer.{$row_count}.position_id", array( 'value' => $data["position_id"] ) );
			echo $this->Form->hidden( "CardPlayer.{$row_count}.position_name", array( 'value' => $data["position_name"] ) );
			echo $data["position_name"];
		?>
	</td>
	<td>
		<?php 
			echo $this->Form->hidden( "CardPlayer.{$row_count}.franchise_group_id", array( 'value' => $data["franchise_group_id"] ) );
			echo $this->Form->hidden( "CardPlayer.{$row_count}.franchise_group_name", array( 'value' => $data["franchise_group_name"] ) );
			echo $data["franchise_group_name"];
		?>
	</td>
	<td>
                <?php 
                    if ( isset( $data["is_primary"] ) )
                    {
                        $is_primary = $data["is_primary"] ? $data["is_primary"] : '0';
                    }
                    else
                    {
                        $is_primary = !$row_count ? '1' : '0';
                    }
                    // $is_primary = isset( $data["is_primary"] ) ? $data["is_primary"] : '0';
                    echo $this->Form->hidden( "CardPlayer.{$row_count}.is_primary", array( 'value' => $is_primary ) );
                    if ( !$is_primary )
                    {
                        echo $this->Html->tag( 'i', '' );
                    }
                    else
                    {
                        echo $this->Html->tag( 'i', '', array( 'class' => 'icon-flag' ) );
                    }
		?>
	</td>
	<td>
               <?php
                    echo $this->Form->hidden( "CardPlayer.{$row_count}.card_player_id", array( 'value' => isset( $data["card_player_id"] ) ? $data["card_player_id"] : "" ) );
                ?>
		<button id="set_as_primary" class="btn btn-success set-as-primary-btn" type="button">
			<i class="icon-flag icon-white"></i>
		</button>
		<button id="edit_player" class="btn btn-success disabled" type="button">
			<i class="icon-pencil icon-white"></i>
		</button>
		<button id="delete_players[<?php echo isset( $data["card_player_id"] ) ? $data["card_player_id"] : $row_count; ?>]" class="btn btn-danger delete-player" type="button">
			<i class="icon-remove icon-white"></i>
		</button>
	</td>
</tr>