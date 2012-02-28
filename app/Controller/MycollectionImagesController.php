<?php
App::uses('AppController', 'Controller');
/**
 * MycollectionImages Controller
 *
 * @property MycollectionImage $MycollectionImage
 */
class MycollectionImagesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MycollectionImage->recursive = 0;
		$this->set('mycollectionImages', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MycollectionImage->id = $id;
		if (!$this->MycollectionImage->exists()) {
			throw new NotFoundException(__('Invalid mycollection image'));
		}
		$this->set('mycollectionImage', $this->MycollectionImage->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MycollectionImage->create();
			if ($this->MycollectionImage->save($this->request->data)) {
				$this->Session->setFlash(__('The mycollection image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mycollection image could not be saved. Please, try again.'));
			}
		}
		$userCards = $this->MycollectionImage->UserCard->find('list');
		$rearImgs = $this->MycollectionImage->RearImg->find('list');
		$frontImgs = $this->MycollectionImage->FrontImg->find('list');
		$this->set(compact('userCards', 'rearImgs', 'frontImgs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MycollectionImage->id = $id;
		if (!$this->MycollectionImage->exists()) {
			throw new NotFoundException(__('Invalid mycollection image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MycollectionImage->save($this->request->data)) {
				$this->Session->setFlash(__('The mycollection image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mycollection image could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MycollectionImage->read(null, $id);
		}
		$userCards = $this->MycollectionImage->UserCard->find('list');
		$rearImgs = $this->MycollectionImage->RearImg->find('list');
		$frontImgs = $this->MycollectionImage->FrontImg->find('list');
		$this->set(compact('userCards', 'rearImgs', 'frontImgs'));
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
		$this->MycollectionImage->id = $id;
		if (!$this->MycollectionImage->exists()) {
			throw new NotFoundException(__('Invalid mycollection image'));
		}
		if ($this->MycollectionImage->delete()) {
			$this->Session->setFlash(__('Mycollection image deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mycollection image was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
