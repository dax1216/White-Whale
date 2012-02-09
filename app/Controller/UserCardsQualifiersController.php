<?php
App::uses('AppController', 'Controller');
/**
 * UserCardsQualifiers Controller
 *
 * @property UserCardsQualifier $UserCardsQualifier
 */
class UserCardsQualifiersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserCardsQualifier->recursive = 0;
		$this->set('userCardsQualifiers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UserCardsQualifier->id = $id;
		if (!$this->UserCardsQualifier->exists()) {
			throw new NotFoundException(__('Invalid user cards qualifier'));
		}
		$this->set('userCardsQualifier', $this->UserCardsQualifier->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserCardsQualifier->create();
			if ($this->UserCardsQualifier->save($this->request->data)) {
				$this->Session->setFlash(__('The user cards qualifier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user cards qualifier could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UserCardsQualifier->id = $id;
		if (!$this->UserCardsQualifier->exists()) {
			throw new NotFoundException(__('Invalid user cards qualifier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserCardsQualifier->save($this->request->data)) {
				$this->Session->setFlash(__('The user cards qualifier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user cards qualifier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UserCardsQualifier->read(null, $id);
		}
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
		$this->UserCardsQualifier->id = $id;
		if (!$this->UserCardsQualifier->exists()) {
			throw new NotFoundException(__('Invalid user cards qualifier'));
		}
		if ($this->UserCardsQualifier->delete()) {
			$this->Session->setFlash(__('User cards qualifier deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User cards qualifier was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
