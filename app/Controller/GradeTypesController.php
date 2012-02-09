<?php
App::uses('AppController', 'Controller');
/**
 * GradeTypes Controller
 *
 * @property GradeType $GradeType
 */
class GradeTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GradeType->recursive = 0;
		$this->set('gradeTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GradeType->id = $id;
		if (!$this->GradeType->exists()) {
			throw new NotFoundException(__('Invalid grade type'));
		}
		$this->set('gradeType', $this->GradeType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GradeType->create();
			if ($this->GradeType->save($this->request->data)) {
				$this->Session->setFlash(__('The grade type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade type could not be saved. Please, try again.'));
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
		$this->GradeType->id = $id;
		if (!$this->GradeType->exists()) {
			throw new NotFoundException(__('Invalid grade type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GradeType->save($this->request->data)) {
				$this->Session->setFlash(__('The grade type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GradeType->read(null, $id);
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
		$this->GradeType->id = $id;
		if (!$this->GradeType->exists()) {
			throw new NotFoundException(__('Invalid grade type'));
		}
		if ($this->GradeType->delete()) {
			$this->Session->setFlash(__('Grade type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grade type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
