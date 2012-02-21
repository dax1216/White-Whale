<?php
App::uses('AppController', 'Controller');
/**
 * Franchises Controller
 *
 * @property Franchise $Franchise
 */
class FranchisesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Franchise->recursive = 0;
		$this->set('franchises', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Franchise->id = $id;
		if (!$this->Franchise->exists()) {
			throw new NotFoundException(__('Invalid franchise'));
		}
		$this->set('franchise', $this->Franchise->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Franchise->create();
			if ($this->Franchise->save($this->request->data)) {
				$this->Session->setFlash(__('The franchise has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The franchise could not be saved. Please, try again.'));
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
		$this->Franchise->id = $id;
		if (!$this->Franchise->exists()) {
			throw new NotFoundException(__('Invalid franchise'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Franchise->save($this->request->data)) {
				$this->Session->setFlash(__('The franchise has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The franchise could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Franchise->read(null, $id);
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
		$this->Franchise->id = $id;
		if (!$this->Franchise->exists()) {
			throw new NotFoundException(__('Invalid franchise'));
		}
		if ($this->Franchise->delete()) {
			$this->Session->setFlash(__('Franchise deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Franchise was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
