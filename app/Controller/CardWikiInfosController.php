<?php
App::uses('AppController', 'Controller');
/**
 * CardWikiInfos Controller
 *
 * @property CardWikiInfo $CardWikiInfo
 */
class CardWikiInfosController extends AppController {

        public $helpers = array('Ckeditor');

        public $uses = array('CardVariationImage', 'CardWikiInfo');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CardWikiInfo->recursive = 0;
		$this->set('cardWikiInfos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view_card_wiki($id = null) {
		$this->CardWikiInfo->id = $id;
		if (!$this->CardWikiInfo->exists()) {
			throw new NotFoundException(__('Invalid card wiki info'));
		}

                if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CardWikiInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The card wiki info has been saved'));
				$this->redirect(array('action' => 'view_card_wiki', $id));
			} else {
				$this->Session->setFlash(__('The card wiki info could not be saved. Please, try again.'));
			}
		} else {
                    $this->request->data = $this->CardWikiInfo->find('first',
                                                                        array('conditions' => array('CardWikiInfo.card_wiki_info_id' => $id),
                                                                              'recursive' => 3));

                   
                    $card_image = $this->CardVariationImage->findByCardVariationId($this->request->data['Card']['BaseCardVariationImage']['card_variation_id']);
                    
                    $this->set(compact('card_image'));
                }
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CardWikiInfo->create();
			if ($this->CardWikiInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The card wiki info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card wiki info could not be saved. Please, try again.'));
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
		$this->CardWikiInfo->id = $id;
		if (!$this->CardWikiInfo->exists()) {
			throw new NotFoundException(__('Invalid card wiki info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CardWikiInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The card wiki info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card wiki info could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CardWikiInfo->read(null, $id);                        
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
		$this->CardWikiInfo->id = $id;
		if (!$this->CardWikiInfo->exists()) {
			throw new NotFoundException(__('Invalid card wiki info'));
		}
		if ($this->CardWikiInfo->delete()) {
			$this->Session->setFlash(__('Card wiki info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Card wiki info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

        public function update_wiki_info() {
            $this->layout = false;
            $this->autoRender = false;
            
            $data = $this->request->data['wiki_data'];

            echo $data;
        }
}
