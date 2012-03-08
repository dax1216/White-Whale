<?php
App::uses('AppController', 'Controller');

// Import images controller for uploading of card images
App::import('Controller', 'Images');
/**
 * CardHome Controller
 *
 * @property Card $Card
 */
class CardWikiController extends AppController {
	
public $uses = array('Card', 'Image','CardVariation','SetInfo');
public $components = array('RequestHandler');
public $actsAs = array('Containable');

	function search() {
		// the page we will redirect to
		$url['action'] = 'index';
		
		// build a URL will all the search elements in it
		// the resulting URL will be 
		// /search/Search.keywords:mykeyword/Search.tag_id:3
		foreach ($this->data as $k=>$v){ 
			foreach ($v as $kk=>$vv){ 
				$url[$k.'.'.$kk]=$vv; 
			} 
		}

		// redirect the user to the url
		$this->redirect($url, null, true);
	}
	
	public function index() {
		
		$title = array();
		
		//
		// filter by name
		//
		$card_filter='';
		$set_filter='';
		$franchise_filter='';
		
		if(isset($this->passedArgs['Search.name']) && $this->passedArgs['Search.name'] != '') {
			
			$searchTerm = '%'.$this->passedArgs['Search.name'].'%';
			
			$card_filter =  array("CardVariation.name LIKE '".$searchTerm."'");
			$set_filter =  array("SetInfo.name LIKE '".$searchTerm."'");
			$franchise_filter =  array("FranchiseGroup.name LIKE '".$searchTerm."'");
			
				//"SetInfo.name LIKE '".$searchTerm."'",
				//"FranchiseGroup.name LIKE '".$searchTerm."'"
				//);
				
			$this->request->data['Search']['name'] = $this->passedArgs['Search.name'];
			$title[] = __('Name',true).': '.$this->passedArgs['Search.name'];
		}
		
		$params = array(
			'conditions' => array($card_filter),
			'contain' => array(
				'Card' =>  array(
					'fields'=> array('name', 'descriptor', 'set_info_id', 'card_wiki_info_id', 'franchise_group_id', 'card_number', 'notes'), 
					'FranchiseGroup' => array( 'franchise_group_id', 'name', 'year_started','year_finished'),	  
					'SetInfo' => array('set_info_id', 'name')
					)			
				),
			'recursive' => 2, //int
			'fields' => '', //array of field names
			'order' => '', //array('Card.name'), //string or array defining order
			'group' => '', //fields to GROUP BY
			'limit' => 300 //int
			);

		$this->CardVariation->Behaviors->attach('Containable');
		
		$cards = $this->CardVariation->find('all', $params);

		// set title
		$title = implode(' | ',$title);
		$title = (isset($title)&&$title)?$title:__('All Cards',true);
		
		// set related data
		$this->set('cards', $cards);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view_card($id = null) 
        {
            $card = $this->Card->findByCardId( $id );
            if ( !$card )
            {
                throw new NotFoundException(__('Invalid card'));
            }

            foreach( $card[ 'CardVariation' ] as $key => $cardVariation )
            {
                $cardVariationImage = $this->Card->CardVariation->CardVariationImage->findByCardVariationId( $cardVariation[ 'card_variation_id' ] );
                $cardVariation[ 'images' ] = $cardVariationImage;
                $card[ 'CardVariation' ][ $key ] = $cardVariation;
            }
            $this->set( 'data', $card );

            // List of card sets
            $setInfos = $this->Card->SetInfo->find('list');

            // List of card wikis
                            // $cardWikiInfos = $this->Card->CardWikiInfo->find('list');

            // List of variations
            $variations = $this->Card->CardVariation->Variation->find('list');

            // List of players
            $players = $this->Card->CardPlayer->Player->find('list', array( 'order' => 'name ASC' ) );

            // List of various positions
            $positions = $this->Card->CardPlayer->Position->find('list'); 

            // List of franchise groups
            $franchiseGroups = $this->Card->FranchiseGroup->find('list');

            // Controller::loadModel( 'CardVariationImage' );

            $card_image = $this->Card->CardVariation->CardVariationImage->findByCardVariationId($card['BaseCardVariationImage']['card_variation_id']);

            $this->set(compact('setInfos', 'players', 'positions','franchiseGroups','variations', 'card_image'));              
	}

/**
 * add method
 *
 * @return void
 */
	public function add_card() {
            
                // List of variations
                $variations = $this->Card->CardVariation->Variation->find('list');
                // debug( $variations );
                    
		if ($this->request->is('post')) {
                    
                    // Send to view
                    $this->set( 'data', $this->request->data );
                    
                    // Remove add player form fields
                    unset( $this->request->data[ 'player' ] );
                    
                    // Set the data to the model
                    $this->Card->set( $this->request->data );
                    
                    $setInfoId = $this->request->data[ 'Card' ][ 'set_info_id' ];
                    $setInfo = $this->Card->SetInfo->findBySetInfoId( $setInfoId );
                    //debug( $this->request->data );
                    //debug( $setInfo );
                    // Create and set the name
                    $cardName = trim( $setInfo[ 'SetInfo' ][ 'dist_start_year' ] ) . '-' 
                                . trim( $setInfo[ 'SetInfo' ][ 'dist_end_year' ] ) . ' '  
                                . trim( $setInfo[ 'AccCatalog' ][ 'name' ] ) . ' '  
                                . trim( $setInfo[ 'Brand' ][ 'name' ] ) . ' '  
                                . trim( $this->request->data[ 'Card' ][ 'card_number' ] ) . ' '  
                                . trim( $setInfo[ 'SetInfo' ][ 'subset_name' ] );
                    
                    // Get primary player name
                    $primaryPlayer = '';    
                    foreach( $this->request->data[ 'CardPlayer' ] as $cardPlayer )
                    {
                        if ( $cardPlayer[ 'is_primary' ] )
                        {
                            $primaryPlayer = $cardPlayer[ 'card_first_name' ] . ' ' . $cardPlayer[ 'card_last_name' ];
                            break;
                        }
                    }
                    
                    $cardName .= ' [' . trim( $primaryPlayer ) . ']'
                                      . ' ' . trim( $this->request->data[ 'Card' ][ 'descriptor' ] );

                    // Get variation name
                    if ( $variations[ $this->request->data[ 'variation_id' ] ] )
                    {
                        $cardName .= ' (' . trim( $variations[ $this->request->data[ 'variation_id' ] ] ) . ')';
                    }
                    
                    $this->request->data[ 'Card' ][ 'name' ] = $cardName;
                    
                    // debug( $this->request->data );
                    
                    // Validate card
                    if ( $this->Card->validates() )
                    {
                        if ( !isset( $this->request->data[ 'CardPlayer' ] ) )
                        {
                            $this->Session->setFlash( __( 'Must have at least one player.' ), 'default', array( 'class' => 'alert alert-error' ) );
                        }
                        else
                        {
                            // Create a blank card wiki info for card
                            Controller::loadModel( 'CardWikiInfo' );
                            $this->CardWikiInfo->create();
                            $cardWikiInfo = $this->CardWikiInfo->save();
                            $cardWikiInfoId = $cardWikiInfo[ 'CardWikiInfo' ][ 'card_wiki_info_id' ];

                            // Assign wiki info to card
                            $this->request->data[ 'Card' ][ 'card_wiki_info_id' ] = $cardWikiInfoId;

                            // Save Card and Card Players
                            if ( $this->Card->saveAssociated($this->request->data, array('atomic' => false))) 
                            {
                                // Build the Base Card data
                                $this->request->data[ 'CardVariation' ][ 'variation_id' ] = $this->request->data[ 'variation_id' ];
                                $this->request->data[ 'CardVariation' ][ 'card_id' ] = $this->Card->id;
                                $this->request->data[ 'CardVariation' ][ 'is_base' ] = 1;
                                $this->request->data[ 'CardVariation' ][ 'name' ] = $cardName; // TODO: Create a sensible name. Using the Card Name for now.

                                // Save the Base Card
                                if( $this->Card->CardVariation->save( $this->request->data ) )
                                {
                                    // Import ImagesController to upload images
                                    $cardImages = new ImagesController();
                                    $cardImages->constructClasses();                

                                    // Remove bracket and parenthesis
                                    $filename = str_replace( array( '(', ')', '[', ']' ), '', $cardName );
                                    $filename = str_replace( array( ' ', '-' ), '_', $filename );
                                    // debug( $filename );
                                                                        
                                    $params = array('front_img' => $this->request->data['Card']['card_front_side'],
                                                    'rear_img' => $this->request->data['Card']['card_back_side'],
                                                    'card_orientation' => $this->request->data['Card']['card_orientation'],
                                                    'filename' => $filename, 
                                                    'image_group_type' => 'card_variations', 
                                                    'image_group_id' => $this->Card->CardVariation->id);

                                    if(($res = $cardImages->upload_images($params)) !== FALSE) {       
                                        // TODO: Save card variation images. 
                                        // Build the Card Variation Image data
                                        $this->request->data[ 'CardVariationImage' ][ 'card_variation_id' ] = $this->Card->CardVariation->id;
                                        $this->request->data[ 'CardVariationImage' ][ 'rear_img_id' ] = $res['rear_img_id'];
                                        $this->request->data[ 'CardVariationImage' ][ 'front_img_id' ] = $res['front_img_id'];;

                                        // Save Card Variation Images
                                        $this->Card->CardVariation->CardVariationImage->save( $this->request->data );
                                    }
                                }

                                // debug($this->Card->CardVariation->validationErrors);

                                $this->Session->setFlash(__('The card has been saved'), 'default', array( 'class' => 'alert alert-success' ));
                                $this->redirect( array( 'action' => 'view_card', $this->Card->id ) );
                            } else {
                                    $this->Session->setFlash(__('The card could not be saved. Please, try again.'), 'default', array( 'class' => 'alert alert-error' ));
                            }  
                        }
                    }
                    else
                    {
                        $this->Session->setFlash(__('The card could not be saved. Invalid data.'), 'default', array( 'class' => 'alert alert-error' ));
                    }

                    // debug($this->Card->validationErrors);
		}

                // List of card sets
                $setInfos = $this->Card->SetInfo->find('list'); 
               
                // List of card wikis
		// $cardWikiInfos = $this->Card->CardWikiInfo->find('list');
                
                // List of players
                $players = $this->Card->CardPlayer->Player->find('list', array( 'order' => 'name ASC' ) );
                
                // List of various positions
                $positions = $this->Card->CardPlayer->Position->find('list'); 

                // List of franchise groups
                $franchiseGroups = $this->Card->FranchiseGroup->find('list');

                
		$this->set(compact('setInfos', 'players', 'positions','franchiseGroups','variations'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit_card($id = null) 
        {
            if ( isset( $this->request->data ) ) 
            {
                if ( !empty( $this->request->data ) )
                {
                    // var_dump( $this->request->data );
                    if ( $this->Card->save( $this->request->data ) )
                    {
                        $this->Session->setFlash(__('The card has been saved'), 'default', array( 'class' => 'alert alert-success' ));
                        $this->redirect( array( 'action' => 'view', $this->Card->id ) );
                    }
                    else
                    {
                        $this->Session->setFlash(__('This card could not be saved. Please try again.'), 'default', array( 'class' => 'alert alert-error' ));
                    }
                    
                    // debug($this->Card->validationErrors);
                }
            }
            else
            {
                $this->Card->id = $id;
                if (!$this->Card->exists()) {
                        throw new NotFoundException(__('Invalid card'), 'default', array( 'class' => 'alert alert-error' ));
                }
                $card = $this->Card->read(null, $id);
                // $this->set( 'card', $card ); 
                $this->data = $card;
            }
            
            //echo "<pre>";
            //var_dump( $this->Card->data );
            //echo "</pre>";
                
            // List of card sets
            $setInfos = $this->Card->SetInfo->find('list');

            // List of franchise groups
            $franchiseGroups = $this->Card->FranchiseGroup->find('list');

            $this->set(compact('setInfos', 'franchiseGroups'));    
            
            
		/*$this->Card->id = $id;
		if (!$this->Card->exists()) {
			throw new NotFoundException(__('Invalid card'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Card->save($this->request->data)) {
				$this->Session->setFlash(__('The card has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Card->read(null, $id);
		}
		$setInfos = $this->Card->SetInfo->find('list');
		$cardWikiInfos = $this->Card->CardWikiInfo->find('list');
		$teams = $this->Card->Team->find('list');
		$this->set(compact('setInfos', 'cardWikiInfos', 'teams'));*/
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete_card($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Card->id = $id;
		if (!$this->Card->exists()) {
			throw new NotFoundException(__('Invalid card'));
		}
		if ($this->Card->delete()) {
			$this->Session->setFlash(__('Card deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Card was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
        
	public function ajax_add_player_row($row_count = 0) 
        {
            if ($this->RequestHandler->isAjax()) { 
                $this->set('row_count', $row_count);
                $this->set('data', $this->request->data[ 'player' ]);
                $this->render('/Elements/CardHome/add_player_row');
            } 
	}        
        
        public function ajax_save_player_and_add( $row_count = 0 )
        {
            if ( $this->RequestHandler->isAjax() )
            {
                // Save player to db
                if ( isset( $this->request->data ) )
                {
                   $this->Card->CardPlayer->create();
                   if ( $this->Card->CardPlayer->save( $this->request->data ) )
                   {
                       // Handle save success here...
                   }
                }
                
                $this->set('row_count', $row_count);
                $this->set('data', $this->request->data[ 'CardPlayer' ]);                
                
                $this->render('/Elements/CardHome/save_player_and_add');                
                
                // Build row return
                
            }
        }
		
/**
 * view_set method
 *
 * @param string $id
 * @return void
 */
	public function view_set($id = null) {
		$this->SetInfo->id = $id;
		if (!$this->SetInfo->exists()) {
			throw new NotFoundException(__('Invalid set info'));
		}
		$this->set('setInfo', $this->SetInfo->read(null, $id));
	}

/**
 * add_set method
 *
 * @return void
 */
	public function add_set() {
		if ($this->request->is('post')) {
			$this->SetInfo->create();
			if ($this->SetInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The set info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set info could not be saved. Please, try again.'));
			}
		}
		$setWikiInfos = $this->SetInfo->SetWikiInfo->find('list');
		$brands = $this->SetInfo->Brand->find('list');
		$accCatalogs = $this->SetInfo->AccCatalog->find('list');
		$this->set(compact('setWikiInfos', 'brands', 'accCatalogs'));
	}

/**
 * edit_set method
 *
 * @param string $id
 * @return void
 */
	public function edit_set($id = null) {
		$this->SetInfo->id = $id;
		if (!$this->SetInfo->exists()) {
			throw new NotFoundException(__('Invalid set info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SetInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The set info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set info could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SetInfo->read(null, $id);
		}
		$setWikiInfos = $this->SetInfo->SetWikiInfo->find('list');
		$brands = $this->SetInfo->Brand->find('list');
		$accCatalogs = $this->SetInfo->AccCatalog->find('list');
		$this->set(compact('setWikiInfos', 'brands', 'accCatalogs'));
	}

/**
 * delete_set method
 *
 * @param string $id
 * @return void
 */
	public function delete_set($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->SetInfo->id = $id;
		if (!$this->SetInfo->exists()) {
			throw new NotFoundException(__('Invalid set info'));
		}
		if ($this->SetInfo->delete()) {
			$this->Session->setFlash(__('Set info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Set info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
