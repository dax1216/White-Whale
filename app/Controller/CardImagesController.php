<?php
App::uses('AppController', 'Controller');

class CardImagesController extends AppController {
    public $name = 'CardImages';
    public $components = array('ImageResizer');

    public function index() {
        
    }

    public function add() {        
        if($this->request->is('post')) {
            $card_frontside = $this->request->data['CardImage']['card_front_side'];
            $card_backside = $this->request->data['CardImage']['card_back_side'];

            $this->CardImage->set($this->request->data);

            if($this->CardImage->validates()) {
                
            } 
        }
    }
}
