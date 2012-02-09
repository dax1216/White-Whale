<?php
App::uses('AppController', 'Controller');
/**
 * Qualifiers Controller
 *
 * @property Qualifier $Qualifier
 */
class QualifiersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Qualifier->recursive = 0;
		$this->set('qualifiers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Qualifier->id = $id;
		if (!$this->Qualifier->exists()) {
			throw new NotFoundException(__('Invalid qualifier'));
		}
		$this->set('qualifier', $this->Qualifier->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Qualifier->create();
			if ($this->Qualifier->save($this->request->data)) {
				$this->Session->setFlash(__('The qualifier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qualifier could not be saved. Please, try again.'));
			}
		}
		$userCards = $this->Qualifier->UserCard->find('list');
		$this->set(compact('userCards'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Qualifier->id = $id;
		if (!$this->Qualifier->exists()) {
			throw new NotFoundException(__('Invalid qualifier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Qualifier->save($this->request->data)) {
				$this->Session->setFlash(__('The qualifier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qualifier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Qualifier->read(null, $id);
		}
		$userCards = $this->Qualifier->UserCard->find('list');
		$this->set(compact('userCards'));
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
		$this->Qualifier->id = $id;
		if (!$this->Qualifier->exists()) {
			throw new NotFoundException(__('Invalid qualifier'));
		}
		if ($this->Qualifier->delete()) {
			$this->Session->setFlash(__('Qualifier deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Qualifier was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
