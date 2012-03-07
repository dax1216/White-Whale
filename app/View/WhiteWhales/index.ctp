
 <div class="container-fluid">
  	<div class="row-fluid">
 		<div class="span12">
      		<h1>White Whales Home Page </h1>
      	</div>
      </div>
      	<div class="row-fluid">
 		
      </div>
      
      <div class="row-fluid">
      
        <div class="span3">
         
                <button class="btn-mini " data-toggle="collapse" data-target="#advanced_search">
                Advanced Search
                </button>
             
                <div id="advanced_search" class="collapse in">
                
					<?php echo $this->Form->create(null, array('url' => array('controller' => 'CardWiki', 'action' => 'search'),'class'=>'well'));?>
                        
                        <label>Keyword Search</label>
                        <?php echo $this->Form->input('Search.name',array('label' => '', 'class'=>'span6', 'placeholder' => 'Enter Keyword')); ?>
                        <!--    
                        <label class="checkbox">
                        <input type="checkbox"> Include Base Cards
                        </label>
                        <label class="checkbox">
                        <input type="checkbox"> Include Card Variations
                        </label>
                       
                         <label>Team</label>
                        <input type="text" id="team_typeahead" data-provide="typeahead" placeholder='Enter Keyword' data-source="echo json_encode($staff);)>
                       -->
                        <button type="submit" class="btn">Search</button>
                        </form>
                    
                    <?php echo $this->Form->end();?>
            </div>
        </div><!--/span-->

        <div class="span9">
         
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="search_results">
            <thead>
               <tr>
			<th>Name</th>
			<th>Grade Type</th>
			<th>Grade Value</th>
			<th>Grade Number</th>
			<th>price</th>
		
	</tr>
        
            </thead>
            <tbody>
                <?php
                $i = 0;
        foreach ($cards as $userCard): 
        
            $rowClass = $i % 2 ? "even gradeX": "odd gradeX";
            $i++;
            echo '<tr class="'.$rowClass.'">';
            ?>
		<td>
			<?php echo $this->Html->link($userCard['CardVariation']['name'], array('controller' => 'card_variations', 'action' => 'view', $userCard['CardVariation']['card_variation_id'])); ?>
		</td>
		
        <td><?php echo h($userCard['GradeType']['name']); ?>&nbsp;</td>
		 <td><?php echo h($userCard['GradeValue']['name']); ?>&nbsp;</td>
		<td><?php echo h($userCard['UserCard']['grade_number']); ?>&nbsp;</td>
		
		<td><?php echo h($userCard['UserCard']['sell_price']); ?>&nbsp;</td>
		
		
       </tr>
    <?php endforeach; ?>
            </tbody>
        </table>
                
            </div><!--/span-->
      </div><!--/row-->
<div class="span12" style="margin-top:10px;margin-bottom:10px;">
      		<a class="btn-primary btn-small" href="collections/add_cards_to_collection">Add Selected Cards to Collection</a>

      	</div>
 <?php echo $this->Html->script('search_onload');?>   

<?php echo $this->element('debug_dump');?>

<?php

//echo $this->element('sql_dump'); 
//dump($cards);

?>