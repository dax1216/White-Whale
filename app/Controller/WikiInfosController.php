<?php
App::uses('AppController', 'Controller');
/**
 * WikiInfos Controller
 *
 * @property WikiInfo $WikiInfo
 */
class WikiInfosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->WikiInfo->recursive = 0;
		$this->set('wikiInfos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->WikiInfo->id = $id;
		if (!$this->WikiInfo->exists()) {
			throw new NotFoundException(__('Invalid wiki info'));
		}
		$this->set('wikiInfo', $this->WikiInfo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WikiInfo->create();
			if ($this->WikiInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The wiki info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wiki info could not be saved. Please, try again.'));
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
		$this->WikiInfo->id = $id;
		if (!$this->WikiInfo->exists()) {
			throw new NotFoundException(__('Invalid wiki info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->WikiInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The wiki info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wiki info could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->WikiInfo->read(null, $id);
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
		$this->WikiInfo->id = $id;
		if (!$this->WikiInfo->exists()) {
			throw new NotFoundException(__('Invalid wiki info'));
		}
		if ($this->WikiInfo->delete()) {
			$this->Session->setFlash(__('Wiki info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Wiki info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
