<?php
App::uses('AppController', 'Controller');
/**
 * UserCards Controller
 *
 * @property UserCard $UserCard
 */
class UserCardsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserCard->recursive = 0;
		$this->set('userCards', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UserCard->id = $id;
		if (!$this->UserCard->exists()) {
			throw new NotFoundException(__('Invalid user card'));
		}
		$this->set('userCard', $this->UserCard->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserCard->create();
			if ($this->UserCard->save($this->request->data)) {
				$this->Session->setFlash(__('The user card has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user card could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserCard->User->find('list');
		$cardVariations = $this->UserCard->CardVariation->find('list');
		$gradeTypes = $this->UserCard->GradeType->find('list');
		$gradeValues = $this->UserCard->GradeValue->find('list');
		$qualifiers = $this->UserCard->Qualifier->find('list');
		$themes = $this->UserCard->Theme->find('list');
		$this->set(compact('users', 'cardVariations', 'gradeTypes', 'gradeValues', 'qualifiers', 'themes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UserCard->id = $id;
		if (!$this->UserCard->exists()) {
			throw new NotFoundException(__('Invalid user card'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserCard->save($this->request->data)) {
				$this->Session->setFlash(__('The user card has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user card could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UserCard->read(null, $id);
		}
		$users = $this->UserCard->User->find('list');
		$cardVariations = $this->UserCard->CardVariation->find('list');
		$gradeTypes = $this->UserCard->GradeType->find('list');
		$gradeValues = $this->UserCard->GradeValue->find('list');
		$qualifiers = $this->UserCard->Qualifier->find('list');
		$themes = $this->UserCard->Theme->find('list');
		$this->set(compact('users', 'cardVariations', 'gradeTypes', 'gradeValues', 'qualifiers', 'themes'));
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
		$this->UserCard->id = $id;
		if (!$this->UserCard->exists()) {
			throw new NotFoundException(__('Invalid user card'));
		}
		if ($this->UserCard->delete()) {
			$this->Session->setFlash(__('User card deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User card was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
