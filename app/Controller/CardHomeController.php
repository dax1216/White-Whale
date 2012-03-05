<?php
App::uses('AppController', 'Controller');

// Import images controller for uploading of card images
App::import('Controller', 'Images');
/**
 * CardHome Controller
 *
 * @property Card $Card
 */
class CardHomeController extends AppController {
	
public $uses = array('Card', 'Image');
public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Card->recursive = 0;
		$this->set('cards', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) 
        {
               
                $card = $this->Card->findByCardId( $id );
                if ( !$card )
                {
                    throw new NotFoundException(__('Invalid card'));
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

                
		$this->set(compact('setInfos', 'players', 'positions','franchiseGroups','variations'));                
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                    
                    // Send to view
                    $this->set( 'data', $this->request->data );
                    
                    // Remove add player form fields
                    unset( $this->request->data[ 'player' ] );
                    
                    // Set the data to the model
                    $this->Card->set( $this->request->data );
                    
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
                                $this->request->data[ 'CardVariation' ][ 'name' ] = 'SOME-NAME-HERE'; // TODO: Create a sensible name

                                // Save the Base Card
                                if( $this->Card->CardVariation->save( $this->request->data ) )
                                {
                                    // Import ImagesController to upload images
                                    $cardImages = new ImagesController();
                                    $cardImages->constructClasses();                

                                    $params = array('front_img' => $this->request->data['Card']['card_front_side'],
                                                    'rear_img' => $this->request->data['Card']['card_back_side'],
                                                    'card_orientation' => $this->request->data['Card']['card_orientation'],
                                                    'filename' => '1909_T206_TyCobb_WhiteSleaves_OldMill', // Change this when you have figured out how to generate the card name
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
                                $this->redirect( array( 'action' => 'view', $this->Card->id ) );
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
                
                // List of variations
                $variations = $this->Card->CardVariation->Variation->find('list');
                
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
	public function edit($id = null) 
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
	public function delete($id = null) {
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
}
