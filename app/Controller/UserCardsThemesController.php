<?php
App::uses('AppController', 'Controller');
/**
 * UserCardsThemes Controller
 *
 * @property UserCardsTheme $UserCardsTheme
 */
class UserCardsThemesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserCardsTheme->recursive = 0;
		$this->set('userCardsThemes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UserCardsTheme->id = $id;
		if (!$this->UserCardsTheme->exists()) {
			throw new NotFoundException(__('Invalid user cards theme'));
		}
		$this->set('userCardsTheme', $this->UserCardsTheme->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserCardsTheme->create();
			if ($this->UserCardsTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The user cards theme has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user cards theme could not be saved. Please, try again.'));
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
		$this->UserCardsTheme->id = $id;
		if (!$this->UserCardsTheme->exists()) {
			throw new NotFoundException(__('Invalid user cards theme'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserCardsTheme->save($this->request->data)) {
				$this->Session->setFlash(__('The user cards theme has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user cards theme could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UserCardsTheme->read(null, $id);
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
		$this->UserCardsTheme->id = $id;
		if (!$this->UserCardsTheme->exists()) {
			throw new NotFoundException(__('Invalid user cards theme'));
		}
		if ($this->UserCardsTheme->delete()) {
			$this->Session->setFlash(__('User cards theme deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User cards theme was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
