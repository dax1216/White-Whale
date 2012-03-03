<?php
App::uses('AppController', 'Controller');
/**
 * CardHome Controller
 *
 * @property Card $Card
 */
class CardHomeController extends AppController {
	
public $uses=array('Card');
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
	public function view($id = null) {
		$this->Card->id = $id;
		if (!$this->Card->exists()) {
			throw new NotFoundException(__('Invalid card'));
		}
		$this->set('card', $this->Card->read(null, $id));
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
                                    // TODO: Upload images here and return image_id's

                                    /* TODO: Save card variation images. 
                                    // Build the Card Variation Image data
                                    $this->request->data[ 'CardVariation' ][ 'CardVariationImages' ][ 'card_variation_id' ] = $this->Card->CardVariation->id;
                                    $this->request->data[ 'CardVariation' ][ 'CardVariationImages' ][ 'rear_img_id' ] = 1;
                                    $this->request->data[ 'CardVariation' ][ 'CardVariationImages' ][ 'front_img_id' ] = 1;

                                    // Save Card Variation Images
                                    $this->Card->CardVariation->CardVariationImages->save( $this->request->data );
                                    */
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
	public function edit($id = null) {
		$this->Card->id = $id;
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
		$this->set(compact('setInfos', 'cardWikiInfos', 'teams'));
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
        
	public function ajax_add_player_row($row_count = 0) {
	
		if ($this->RequestHandler->isAjax()) { 
			$this->set('row_count', $row_count);
			$this->set('data', $this->request->data[ 'player' ]);
			$this->render('/Elements/CardHome/add_player_row');
		} 
	}        
}
