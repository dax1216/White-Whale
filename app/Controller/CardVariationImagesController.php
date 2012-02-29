<?php
App::uses('AppController', 'Controller');
/**
 * CardVariationImages Controller
 *
 * @property CardVariationImage $CardVariationImage
 */
class CardVariationImagesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CardVariationImage->recursive = 0;
		$this->set('cardVariationImages', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CardVariationImage->id = $id;
		if (!$this->CardVariationImage->exists()) {
			throw new NotFoundException(__('Invalid card variation image'));
		}
		$this->set('cardVariationImage', $this->CardVariationImage->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CardVariationImage->create();
			if ($this->CardVariationImage->save($this->request->data)) {
				$this->Session->setFlash(__('The card variation image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card variation image could not be saved. Please, try again.'));
			}
		}
		$cardVariations = $this->CardVariationImage->CardVariation->find('list');
		$rearImgs = $this->CardVariationImage->RearImg->find('list');
		$frontImgs = $this->CardVariationImage->FrontImg->find('list');
		$this->set(compact('cardVariations', 'rearImgs', 'frontImgs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CardVariationImage->id = $id;
		if (!$this->CardVariationImage->exists()) {
			throw new NotFoundException(__('Invalid card variation image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CardVariationImage->save($this->request->data)) {
				$this->Session->setFlash(__('The card variation image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card variation image could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CardVariationImage->read(null, $id);
		}
		$cardVariations = $this->CardVariationImage->CardVariation->find('list');
		$rearImgs = $this->CardVariationImage->RearImg->find('list');
		$frontImgs = $this->CardVariationImage->FrontImg->find('list');
		$this->set(compact('cardVariations', 'rearImgs', 'frontImgs'));
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
		$this->CardVariationImage->id = $id;
		if (!$this->CardVariationImage->exists()) {
			throw new NotFoundException(__('Invalid card variation image'));
		}
		if ($this->CardVariationImage->delete()) {
			$this->Session->setFlash(__('Card variation image deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Card variation image was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
