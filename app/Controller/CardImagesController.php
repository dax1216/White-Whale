<?php
App::uses('AppController', 'Controller');

class CardImagesController extends AppController {
    public $components = array('ImageResizer');

    public function index() {
        
    }

    public function add() {        
        if($this->request->isPost()) {
            $card_frontside = $this->request->data['CardImages']['card_front_side'];
            $card_backside = $this->request->data['CardImages']['card_back_side'];
        }
    }
}
