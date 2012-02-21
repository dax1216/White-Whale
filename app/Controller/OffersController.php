<?php
App::uses('AppController', 'Controller');
/**
 * Offers Controller
 *
 * @property Offer $Offer
 */
class OffersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Offer->recursive = 0;
		$this->set('offers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Offer->id = $id;
		if (!$this->Offer->exists()) {
			throw new NotFoundException(__('Invalid offer'));
		}
		$this->set('offer', $this->Offer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Offer->create();
			if ($this->Offer->save($this->request->data)) {
				$this->Session->setFlash(__('The offer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The offer could not be saved. Please, try again.'));
			}
		}
		$users = $this->Offer->User->find('list');
		$userCards = $this->Offer->UserCard->find('list');
		$this->set(compact('users', 'userCards'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Offer->id = $id;
		if (!$this->Offer->exists()) {
			throw new NotFoundException(__('Invalid offer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Offer->save($this->request->data)) {
				$this->Session->setFlash(__('The offer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The offer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Offer->read(null, $id);
		}
		$users = $this->Offer->User->find('list');
		$userCards = $this->Offer->UserCard->find('list');
		$this->set(compact('users', 'userCards'));
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
		$this->Offer->id = $id;
		if (!$this->Offer->exists()) {
			throw new NotFoundException(__('Invalid offer'));
		}
		if ($this->Offer->delete()) {
			$this->Session->setFlash(__('Offer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Offer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
