<?php
App::uses('AppController', 'Controller');
/**
 * CardImages Controller
 *
 * @property CardImage $CardImage
 */
class CardImagesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CardImage->recursive = 0;
		$this->set('cardImages', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CardImage->id = $id;
		if (!$this->CardImage->exists()) {
			throw new NotFoundException(__('Invalid card image'));
		}
		$this->set('cardImage', $this->CardImage->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CardImage->create();
			if ($this->CardImage->save($this->request->data)) {
				$this->Session->setFlash(__('The card image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card image could not be saved. Please, try again.'));
			}
		}
		$imgTypes = $this->CardImage->ImgType->find('list');
		$images = $this->CardImage->Image->find('list');
		$offers = $this->CardImage->Offer->find('list');
		$rearImgs = $this->CardImage->RearImg->find('list');
		$frontImgs = $this->CardImage->FrontImg->find('list');
		$userCards = $this->CardImage->UserCard->find('list');
		$cardVariations = $this->CardImage->CardVariation->find('list');
		$this->set(compact('imgTypes', 'images', 'offers', 'rearImgs', 'frontImgs', 'userCards', 'cardVariations'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CardImage->id = $id;
		if (!$this->CardImage->exists()) {
			throw new NotFoundException(__('Invalid card image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CardImage->save($this->request->data)) {
				$this->Session->setFlash(__('The card image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card image could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CardImage->read(null, $id);
		}
		$imgTypes = $this->CardImage->ImgType->find('list');
		$images = $this->CardImage->Image->find('list');
		$offers = $this->CardImage->Offer->find('list');
		$rearImgs = $this->CardImage->RearImg->find('list');
		$frontImgs = $this->CardImage->FrontImg->find('list');
		$userCards = $this->CardImage->UserCard->find('list');
		$cardVariations = $this->CardImage->CardVariation->find('list');
		$this->set(compact('imgTypes', 'images', 'offers', 'rearImgs', 'frontImgs', 'userCards', 'cardVariations'));
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
		$this->CardImage->id = $id;
		if (!$this->CardImage->exists()) {
			throw new NotFoundException(__('Invalid card image'));
		}
		if ($this->CardImage->delete()) {
			$this->Session->setFlash(__('Card image deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Card image was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
