<?php
App::uses('AppController', 'Controller');
/**
 * GradeValues Controller
 *
 * @property GradeValue $GradeValue
 */
class GradeValuesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GradeValue->recursive = 0;
		$this->set('gradeValues', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GradeValue->id = $id;
		if (!$this->GradeValue->exists()) {
			throw new NotFoundException(__('Invalid grade value'));
		}
		$this->set('gradeValue', $this->GradeValue->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GradeValue->create();
			if ($this->GradeValue->save($this->request->data)) {
				$this->Session->setFlash(__('The grade value has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade value could not be saved. Please, try again.'));
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
		$this->GradeValue->id = $id;
		if (!$this->GradeValue->exists()) {
			throw new NotFoundException(__('Invalid grade value'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GradeValue->save($this->request->data)) {
				$this->Session->setFlash(__('The grade value has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade value could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GradeValue->read(null, $id);
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
		$this->GradeValue->id = $id;
		if (!$this->GradeValue->exists()) {
			throw new NotFoundException(__('Invalid grade value'));
		}
		if ($this->GradeValue->delete()) {
			$this->Session->setFlash(__('Grade value deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grade value was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
