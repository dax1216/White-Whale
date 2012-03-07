<?php
App::uses('AppController', 'Controller');
/**
 * CardPlayers Controller
 *
 * @property CardPlayer $CardPlayer
 */
class CardPlayersController extends AppController {

    public $uses=array('CardPlayer');
    public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CardPlayer->recursive = 0;
		$this->set('cardPlayers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CardPlayer->id = $id;
		if (!$this->CardPlayer->exists()) {
			throw new NotFoundException(__('Invalid card player'));
		}
		$this->set('cardPlayer', $this->CardPlayer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CardPlayer->create();
			if ($this->CardPlayer->save($this->request->data)) {
				$this->Session->setFlash(__('The card player has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card player could not be saved. Please, try again.'));
			}
		}
		$cards = $this->CardPlayer->Card->find('list');
		$positions = $this->CardPlayer->Position->find('list');
		$players = $this->CardPlayer->Player->find('list');
		$franchiseGroups = $this->CardPlayer->FranchiseGroup->find('list');
		$this->set(compact('cards', 'positions', 'players', 'franchiseGroups'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CardPlayer->id = $id;
		if (!$this->CardPlayer->exists()) {
			throw new NotFoundException(__('Invalid card player'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CardPlayer->save($this->request->data)) {
				$this->Session->setFlash(__('The card player has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card player could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CardPlayer->read(null, $id);
		}
		$cards = $this->CardPlayer->Card->find('list');
		$positions = $this->CardPlayer->Position->find('list');
		$players = $this->CardPlayer->Player->find('list');
		$franchiseGroups = $this->CardPlayer->FranchiseGroup->find('list');
		$this->set(compact('cards', 'positions', 'players', 'franchiseGroups'));
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
		$this->CardPlayer->id = $id;
		if (!$this->CardPlayer->exists()) {
			throw new NotFoundException(__('Invalid card player'));
		}
		if ($this->CardPlayer->delete()) {
			$this->Session->setFlash(__('Card player deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Card player was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
        
        // Ajax functions
        
        public function save_player_and_add_row( $row_count = 0 )
        {
            if ( $this->RequestHandler->isAjax() )
            {
                // Save player to db
                if ( isset( $this->request->data ) )
                {
                   debug( $this->request->data[ 'Player' ]);
                    $this->CardPlayer->create();
                   if ( $this->CardPlayer->save( $this->request->data[ 'Player' ] ) )
                   {
                       // Handle save success here...
                   }
                }
                
                $this->set('row_count', $row_count);
                $this->set('data', $this->CardPlayer->data);                
                
                $this->render('/Elements/CardHome/save_player_and_add');                
                
                // Build row return
                
            }
        }        
        
        public function set_as_primary( $val = true )
        {
            $result = array( 'status' => 0, 'message' => 'Failed!' );
            if ( $this->RequestHandler->isAjax() )
            {
                $this->layout = 'json';
                if ( isset( $this->request->data ) )
                {                
                    // TODO: Optimize update code
                    foreach( $this->request->data[ 'CardPlayer' ] as $key => $cardPlayer )
                    {
                        $data = array( 'card_player_id' => $cardPlayer[ 'card_player_id' ],
                                       'is_primary' => $cardPlayer[ 'is_primary' ] ? true : false );
                        if ( $this->CardPlayer->save( $data ) )
                        {
                            $result[ 'status' ] = 1;
                            $result[ 'message' ] = 'New primary player is set.';
                        }
                        
                        debug( $this->CardPlayer->validationErrors );
                    }
                }
            }
            
            $this->set( 'data', $result );
        }
        
        public function remove_player_from_card( $card_player_id )
        {
            $result = array( 'status' => 0, 'message' => 'Failed!' );
            if ( $this->RequestHandler->isAjax() )
            {
                $this->layout = 'json';
                
                $this->CardPlayer->findCardPlayerId( $card_player_id );
                if ( $this->CardPlayer->delete() )
                {
                    $result[ 'status' ] = 1;
                    $result[ 'message' ] = 'Player is removed from Card.';
                }

            }
            
            $this->set( 'data', $result );            
        }
}
