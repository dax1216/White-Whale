<?php
App::uses('AppController', 'Controller');
/**
 * AccCatalogs Controller
 *
 * @property AccCatalog $AccCatalog
 */
class AccCatalogsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AccCatalog->recursive = 0;
		$this->set('accCatalogs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AccCatalog->id = $id;
		if (!$this->AccCatalog->exists()) {
			throw new NotFoundException(__('Invalid acc catalog'));
		}
		$this->set('accCatalog', $this->AccCatalog->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccCatalog->create();
			if ($this->AccCatalog->save($this->request->data)) {
				$this->Session->setFlash(__('The acc catalog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acc catalog could not be saved. Please, try again.'));
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
		$this->AccCatalog->id = $id;
		if (!$this->AccCatalog->exists()) {
			throw new NotFoundException(__('Invalid acc catalog'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccCatalog->save($this->request->data)) {
				$this->Session->setFlash(__('The acc catalog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acc catalog could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AccCatalog->read(null, $id);
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
		$this->AccCatalog->id = $id;
		if (!$this->AccCatalog->exists()) {
			throw new NotFoundException(__('Invalid acc catalog'));
		}
		if ($this->AccCatalog->delete()) {
			$this->Session->setFlash(__('Acc catalog deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Acc catalog was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
