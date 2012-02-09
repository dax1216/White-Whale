<?php
App::uses('AppController', 'Controller');
/**
 * Watches Controller
 *
 * @property Watch $Watch
 */
class WatchesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Watch->recursive = 0;
		$this->set('watches', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Watch->id = $id;
		if (!$this->Watch->exists()) {
			throw new NotFoundException(__('Invalid watch'));
		}
		$this->set('watch', $this->Watch->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Watch->create();
			if ($this->Watch->save($this->request->data)) {
				$this->Session->setFlash(__('The watch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The watch could not be saved. Please, try again.'));
			}
		}
		$userCards = $this->Watch->UserCard->find('list');
		$users = $this->Watch->User->find('list');
		$this->set(compact('userCards', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Watch->id = $id;
		if (!$this->Watch->exists()) {
			throw new NotFoundException(__('Invalid watch'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Watch->save($this->request->data)) {
				$this->Session->setFlash(__('The watch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The watch could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Watch->read(null, $id);
		}
		$userCards = $this->Watch->UserCard->find('list');
		$users = $this->Watch->User->find('list');
		$this->set(compact('userCards', 'users'));
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
		$this->Watch->id = $id;
		if (!$this->Watch->exists()) {
			throw new NotFoundException(__('Invalid watch'));
		}
		if ($this->Watch->delete()) {
			$this->Session->setFlash(__('Watch deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Watch was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
