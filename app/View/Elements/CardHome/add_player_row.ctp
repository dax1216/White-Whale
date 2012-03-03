<tr>
        <td>
		<?php 
                	echo $this->Form->hidden( "CardPlayer.{$row_count}.row_count", array( 'class' => 'row-count', 'value' => $row_count ) );
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
                    echo $this->Form->hidden( "CardPlayer.{$row_count}.is_pimary", array( 'value' => $row_count ? '0' : '1' ) );
                    if ( $row_count > 0 )
                    {
                        echo '&nbsp;';
                    }
                    else
                    {
                        echo $this->Html->tag( 'i', '', array( 'class' => 'icon-flag' ) );
                    }
		?>
	</td>
	<td>
		<button id="set_as_primary" class="btn btn-success" type="button">
			<i class="icon-flag icon-white"></i>
		</button>
		<button id="edit_player" class="btn btn-success" type="button">
			<i class="icon-pencil icon-white"></i>
		</button>
		<button id="delete_players" class="btn btn-danger delete_player" type="button">
			<i class="icon-remove icon-white"></i>
		</button>
	</td>
</tr>