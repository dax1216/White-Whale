<?php
App::uses('AppController', 'Controller');
/**
 * CardVariationTypes Controller
 *
 * @property CardVariationType $CardVariationType
 */
class CardVariationTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CardVariationType->recursive = 0;
		$this->set('cardVariationTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CardVariationType->id = $id;
		if (!$this->CardVariationType->exists()) {
			throw new NotFoundException(__('Invalid card variation type'));
		}
		$this->set('cardVariationType', $this->CardVariationType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CardVariationType->create();
			if ($this->CardVariationType->save($this->request->data)) {
				$this->Session->setFlash(__('The card variation type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card variation type could not be saved. Please, try again.'));
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
		$this->CardVariationType->id = $id;
		if (!$this->CardVariationType->exists()) {
			throw new NotFoundException(__('Invalid card variation type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CardVariationType->save($this->request->data)) {
				$this->Session->setFlash(__('The card variation type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card variation type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CardVariationType->read(null, $id);
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
		$this->CardVariationType->id = $id;
		if (!$this->CardVariationType->exists()) {
			throw new NotFoundException(__('Invalid card variation type'));
		}
		if ($this->CardVariationType->delete()) {
			$this->Session->setFlash(__('Card variation type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Card variation type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
