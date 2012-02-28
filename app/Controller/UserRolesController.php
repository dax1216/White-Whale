<?php
App::uses('AppController', 'Controller');
/**
 * UserRoles Controller
 *
 * @property UserRole $UserRole
 */
class UserRolesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserRole->recursive = 0;
		$this->set('userRoles', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UserRole->id = $id;
		if (!$this->UserRole->exists()) {
			throw new NotFoundException(__('Invalid user role'));
		}
		$this->set('userRole', $this->UserRole->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserRole->create();
			if ($this->UserRole->save($this->request->data)) {
				$this->Session->setFlash(__('The user role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user role could not be saved. Please, try again.'));
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
		$this->UserRole->id = $id;
		if (!$this->UserRole->exists()) {
			throw new NotFoundException(__('Invalid user role'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserRole->save($this->request->data)) {
				$this->Session->setFlash(__('The user role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user role could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UserRole->read(null, $id);
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
		$this->UserRole->id = $id;
		if (!$this->UserRole->exists()) {
			throw new NotFoundException(__('Invalid user role'));
		}
		if ($this->UserRole->delete()) {
			$this->Session->setFlash(__('User role deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User role was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
