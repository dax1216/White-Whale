<?php
App::uses('AppController', 'Controller');
/**
 * PriceRanges Controller
 *
 * @property PriceRange $PriceRange
 */
class PriceRangesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PriceRange->recursive = 0;
		$this->set('priceRanges', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PriceRange->id = $id;
		if (!$this->PriceRange->exists()) {
			throw new NotFoundException(__('Invalid price range'));
		}
		$this->set('priceRange', $this->PriceRange->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PriceRange->create();
			if ($this->PriceRange->save($this->request->data)) {
				$this->Session->setFlash(__('The price range has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The price range could not be saved. Please, try again.'));
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
		$this->PriceRange->id = $id;
		if (!$this->PriceRange->exists()) {
			throw new NotFoundException(__('Invalid price range'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PriceRange->save($this->request->data)) {
				$this->Session->setFlash(__('The price range has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The price range could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PriceRange->read(null, $id);
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
		$this->PriceRange->id = $id;
		if (!$this->PriceRange->exists()) {
			throw new NotFoundException(__('Invalid price range'));
		}
		if ($this->PriceRange->delete()) {
			$this->Session->setFlash(__('Price range deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Price range was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
