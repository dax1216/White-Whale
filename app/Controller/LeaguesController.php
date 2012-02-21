<?php
App::uses('AppController', 'Controller');
/**
 * Leagues Controller
 *
 * @property League $League
 */
class LeaguesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->League->recursive = 0;
		$this->set('leagues', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->League->id = $id;
		if (!$this->League->exists()) {
			throw new NotFoundException(__('Invalid league'));
		}
		$this->set('league', $this->League->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->League->create();
			if ($this->League->save($this->request->data)) {
				$this->Session->setFlash(__('The league has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The league could not be saved. Please, try again.'));
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
		$this->League->id = $id;
		if (!$this->League->exists()) {
			throw new NotFoundException(__('Invalid league'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->League->save($this->request->data)) {
				$this->Session->setFlash(__('The league has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The league could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->League->read(null, $id);
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
		$this->League->id = $id;
		if (!$this->League->exists()) {
			throw new NotFoundException(__('Invalid league'));
		}
		if ($this->League->delete()) {
			$this->Session->setFlash(__('League deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('League was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
