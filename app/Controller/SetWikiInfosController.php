<?php
App::uses('AppController', 'Controller');
/**
 * SetWikiInfos Controller
 *
 * @property SetWikiInfo $SetWikiInfo
 */
class SetWikiInfosController extends AppController {

        public $helpers = array('Ckeditor');
        
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SetWikiInfo->recursive = 0;
		$this->set('setWikiInfos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view_set_wiki_info($id = null) {
		$this->SetWikiInfo->id = $id;
		if (!$this->SetWikiInfo->exists()) {
			throw new NotFoundException(__('Invalid set wiki info'));
		}

                if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SetWikiInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The set wiki info has been saved'), 'default', array( 'class' => 'alert alert-success' ));
				$this->redirect(array('action' => 'view_set_wiki', $id));
			} else {
				$this->Session->setFlash(__('The set wiki info could not be saved. Please, try again.'), 'default', array( 'class' => 'alert alert-error' ));
			}
		} else {
			$this->request->data = $this->SetWikiInfo->read(null, $id);

                        $card_image = $this->CardVariationImage->findByCardVariationId($card['BaseCardVariation']['card_variation_id']);
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SetWikiInfo->id = $id;
		if (!$this->SetWikiInfo->exists()) {
			throw new NotFoundException(__('Invalid set wiki info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SetWikiInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The set wiki info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set wiki info could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SetWikiInfo->read(null, $id);
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
		$this->SetWikiInfo->id = $id;
		if (!$this->SetWikiInfo->exists()) {
			throw new NotFoundException(__('Invalid set wiki info'));
		}
		if ($this->SetWikiInfo->delete()) {
			$this->Session->setFlash(__('Set wiki info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Set wiki info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

        public function update_wiki_info() {
            $this->layout = false;
            $this->autoRender = false;

            $data = $this->request->data['wiki_data'];

            echo htmlspecialchars_decode($data);
        }
}
