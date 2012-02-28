<?php
App::uses('AppController', 'Controller');
/**
 * OfferImages Controller
 *
 * @property OfferImage $OfferImage
 */
class OfferImagesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OfferImage->recursive = 0;
		$this->set('offerImages', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->OfferImage->id = $id;
		if (!$this->OfferImage->exists()) {
			throw new NotFoundException(__('Invalid offer image'));
		}
		$this->set('offerImage', $this->OfferImage->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OfferImage->create();
			if ($this->OfferImage->save($this->request->data)) {
				$this->Session->setFlash(__('The offer image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The offer image could not be saved. Please, try again.'));
			}
		}
		$images = $this->OfferImage->Image->find('list');
		$offers = $this->OfferImage->Offer->find('list');
		$this->set(compact('images', 'offers'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->OfferImage->id = $id;
		if (!$this->OfferImage->exists()) {
			throw new NotFoundException(__('Invalid offer image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OfferImage->save($this->request->data)) {
				$this->Session->setFlash(__('The offer image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The offer image could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OfferImage->read(null, $id);
		}
		$images = $this->OfferImage->Image->find('list');
		$offers = $this->OfferImage->Offer->find('list');
		$this->set(compact('images', 'offers'));
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
		$this->OfferImage->id = $id;
		if (!$this->OfferImage->exists()) {
			throw new NotFoundException(__('Invalid offer image'));
		}
		if ($this->OfferImage->delete()) {
			$this->Session->setFlash(__('Offer image deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Offer image was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
