<?php
App::uses('AppController', 'Controller');
/**
 * Variations Controller
 *
 * @property Variation $Variation
 */
class VariationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Variation->recursive = 0;
		$this->set('variations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Variation->id = $id;
		if (!$this->Variation->exists()) {
			throw new NotFoundException(__('Invalid variation'));
		}
		$this->set('variation', $this->Variation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Variation->create();
			if ($this->Variation->save($this->request->data)) {
				$this->Session->setFlash(__('The variation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The variation could not be saved. Please, try again.'));
			}
		}
		$setInfos = $this->Variation->SetInfo->find('list');
		$this->set(compact('setInfos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Variation->id = $id;
		if (!$this->Variation->exists()) {
			throw new NotFoundException(__('Invalid variation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Variation->save($this->request->data)) {
				$this->Session->setFlash(__('The variation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The variation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Variation->read(null, $id);
		}
		$setInfos = $this->Variation->SetInfo->find('list');
		$this->set(compact('setInfos'));
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
		$this->Variation->id = $id;
		if (!$this->Variation->exists()) {
			throw new NotFoundException(__('Invalid variation'));
		}
		if ($this->Variation->delete()) {
			$this->Session->setFlash(__('Variation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Variation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
