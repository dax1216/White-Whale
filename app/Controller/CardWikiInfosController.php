<?php
App::uses('AppController', 'Controller');
/**
 * CardWikiInfos Controller
 *
 * @property CardWikiInfo $CardWikiInfo
 */
class CardWikiInfosController extends AppController {

        public $helpers = array('Ckeditor');

        public $uses = array('CardVariationImage', 'CardWikiInfo', 'CardVariation');
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
	public function edit_card_wiki($id = null) {
		$this->CardWikiInfo->id = $id;
		if (!$this->CardWikiInfo->exists()) {
			throw new NotFoundException(__('Invalid card wiki info'));
		}

                if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CardWikiInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The card wiki info has been saved'), 'default', array( 'class' => 'alert alert-success' ));
				$this->redirect(array('action' => 'view_card_wiki', $id));
			} else {
				$this->Session->setFlash(__('The card wiki info could not be saved. Please, try again.'), 'default', array( 'class' => 'alert alert-error' ));
			}
		} else {
                    $this->request->data = $this->CardWikiInfo->find('first',
                                                                        array('conditions' => array('CardWikiInfo.card_wiki_info_id' => $id),
                                                                              'recursive' => 3));
                    
                    $card_image = $this->CardVariationImage->findByCardVariationId($this->request->data['Card']['BaseCardVariation']['card_variation_id']);
                    
                    $card_variations = $this->CardVariation->Card->findByCardId($this->request->data['Card']['card_id']);                    
                    
                    $variations = $this->CardVariation->Variation->find('list');
                    
                    if (isset($card_variations['CardVariation'])) {
                        foreach( $card_variations['CardVariation'] as $key => $card_variation )
                        {
                            $card_variation_image = $this->CardVariation->CardVariationImage->findByCardVariationId($card_variation['card_variation_id']);
                            $card_variation[ 'images' ] = $card_variation_image;
                            $this->request->data['CardVariation'][ $key ] = $card_variation;
                        }                                                                    
                    }
                    
                    $this->set(compact('card_image', 'variations'));
                }
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function view_card_wiki($id = null) {
            $this->CardWikiInfo->id = $id;
            if (!$this->CardWikiInfo->exists()) {
                    throw new NotFoundException(__('Invalid card wiki info'));
            }                

            $this->request->data = $this->CardWikiInfo->find('first',
                                                                array('conditions' => array('CardWikiInfo.card_wiki_info_id' => $id),
                                                                      'recursive' => 3));

            $card_image = $this->CardVariationImage->findByCardVariationId($this->request->data['Card']['BaseCardVariation']['card_variation_id']);

            $card_variations = $this->CardVariation->Card->findByCardId($this->request->data['Card']['card_id']);                    

            $variations = $this->CardVariation->Variation->find('list');

            if (isset($card_variations['CardVariation'])) {
                foreach( $card_variations['CardVariation'] as $key => $card_variation )
                {
                    $card_variation_image = $this->CardVariation->CardVariationImage->findByCardVariationId($card_variation['card_variation_id']);
                    $card_variation[ 'images' ] = $card_variation_image;
                    $this->request->data['CardVariation'][ $key ] = $card_variation;
                }                                                                    
            }

            $this->set(compact('card_image', 'variations'));            
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

            echo htmlspecialchars_decode($data);
        }
}
