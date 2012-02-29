<?php
App::uses('AppController', 'Controller');
/**
 * CardPlayers Controller
 *
 * @property CardPlayer $CardPlayer
 */
class CardPlayersController extends AppController {


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
}
