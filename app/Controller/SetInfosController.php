<?php
App::uses('AppController', 'Controller');
/**
 * SetInfos Controller
 *
 * @property SetInfo $SetInfo
 */
class SetInfosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SetInfo->recursive = 0;
		$this->set('setInfos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SetInfo->id = $id;
		if (!$this->SetInfo->exists()) {
			throw new NotFoundException(__('Invalid set info'));
		}
		$this->set('setInfo', $this->SetInfo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SetInfo->create();
			if ($this->SetInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The set info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set info could not be saved. Please, try again.'));
			}
		}
		$setWikiInfos = $this->SetInfo->SetWikiInfo->find('list');
		$brands = $this->SetInfo->Brand->find('list');
		$accCatalogs = $this->SetInfo->AccCatalog->find('list');
		$this->set(compact('setWikiInfos', 'brands', 'accCatalogs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SetInfo->id = $id;
		if (!$this->SetInfo->exists()) {
			throw new NotFoundException(__('Invalid set info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SetInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The set info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set info could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SetInfo->read(null, $id);
		}
		$setWikiInfos = $this->SetInfo->SetWikiInfo->find('list');
		$brands = $this->SetInfo->Brand->find('list');
		$accCatalogs = $this->SetInfo->AccCatalog->find('list');
		$this->set(compact('setWikiInfos', 'brands', 'accCatalogs'));
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
		$this->SetInfo->id = $id;
		if (!$this->SetInfo->exists()) {
			throw new NotFoundException(__('Invalid set info'));
		}
		if ($this->SetInfo->delete()) {
			$this->Session->setFlash(__('Set info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Set info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
