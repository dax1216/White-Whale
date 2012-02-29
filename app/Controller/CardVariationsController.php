<?php
App::uses('AppController', 'Controller');
/**
 * CardVariations Controller
 *
 * @property CardVariation $CardVariation
 */
class CardVariationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CardVariation->recursive = 0;
		$this->set('cardVariations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CardVariation->id = $id;
		if (!$this->CardVariation->exists()) {
			throw new NotFoundException(__('Invalid card variation'));
		}
		$this->set('cardVariation', $this->CardVariation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CardVariation->create();
			if ($this->CardVariation->save($this->request->data)) {
				$this->Session->setFlash(__('The card variation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card variation could not be saved. Please, try again.'));
			}
		}
		$variations = $this->CardVariation->Variation->find('list');
		$cards = $this->CardVariation->Card->find('list');
		$this->set(compact('variations', 'cards'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CardVariation->id = $id;
		if (!$this->CardVariation->exists()) {
			throw new NotFoundException(__('Invalid card variation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CardVariation->save($this->request->data)) {
				$this->Session->setFlash(__('The card variation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card variation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CardVariation->read(null, $id);
		}
		$variations = $this->CardVariation->Variation->find('list');
		$cards = $this->CardVariation->Card->find('list');
		$this->set(compact('variations', 'cards'));
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
		$this->CardVariation->id = $id;
		if (!$this->CardVariation->exists()) {
			throw new NotFoundException(__('Invalid card variation'));
		}
		if ($this->CardVariation->delete()) {
			$this->Session->setFlash(__('Card variation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Card variation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
