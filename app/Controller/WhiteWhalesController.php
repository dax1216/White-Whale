<?php
App::uses('AppController', 'Controller');
/**
 * WhiteWhale Controller
 *
 * @property UserCard $UserCard
 */
class WhiteWhalesController extends AppController {

public $uses=array('UserCard');

	function search() {
		// the page we will redirect to
		$url['action'] = 'index';
		
		// build a URL will all the search elements in it
		// the resulting URL will be 
		// /search/Search.keywords:mykeyword/Search.tag_id:3
		foreach ($this->data as $k=>$v){ 
			foreach ($v as $kk=>$vv){ 
				$url[$k.'.'.$kk]=$vv; 
			} 
		}

		// redirect the user to the url
		$this->redirect($url, null, true);
	}
	
	public function index() {
		
		$title = array();
		
		//
		// filter by name
		//
		$card_filter='';
		$set_filter='';
		$franchise_filter='';
		
		if(isset($this->passedArgs['Search.name']) && $this->passedArgs['Search.name'] != '') {
			
			$searchTerm = '%'.$this->passedArgs['Search.name'].'%';
			
			$card_filter =  array("UserCard.white_whale = '1' AND CardVariation.name LIKE '".$searchTerm."'");
				
			$this->request->data['Search']['name'] = $this->passedArgs['Search.name'];
			$title[] = __('Name',true).': '.$this->passedArgs['Search.name'];
		}
		
		$params = array(
			'conditions' => array($card_filter),
			'recursive' => 2, //int
			'fields' => array('grade_number', 'own_card', 'active_sell', 'card_variation_id','grade_type_id', 'grade_value_id', 'white_whale', 'bought_date', 'listed_date', 'sell_price', 'low_price', 'high_price'),
			'order' => '', //array('Card.name'), //string or array defining order
			'group' => '', //fields to GROUP BY
			'limit' => 100 //int
			);
			
		$this->UserCard->Behaviors->attach('Containable');
		
		$cards = $this->UserCard->find('all', $params);

		// set title
		$title = implode(' | ',$title);
		$title = (isset($title)&&$title)?$title:__('All Cards',true);
		
		// set related data
		$this->set('cards', $cards);
	}


/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view_user_card($id = null) {
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
	public function add_user_card() {
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
	public function edit_user_card($id = null) {
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
	public function delete_user_card($id = null) {
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
