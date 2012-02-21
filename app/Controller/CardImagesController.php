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
                $card_sizes = Configure::read('card_image_sizes');
                $card_images_dir = Configure::read('card_images_dir');

                $card_images = array('frontside' => $card_frontside, 'backside' => $card_backside);
                
                foreach($card_images as $side => $card_image) {
                    foreach($card_sizes as $size_label => $dimensions) {
                        $upload_path = $card_images_dir . $size_label . DS . $side;
                        
                        if(!is_dir($upload_path)) {
                            @mkdir($upload_path, 0777, true);
                        }

                        $original = $card_image['tmp_name'];
                        $new_filename = $upload_path . DS . $card_image['name'];

                        $this->ImageResizer->resize($original, $new_filename, $dimensions['width'], $dimensions['height']);
                    }
                }
            } 
        }
    }

    public function popup() {
        $this->layout = 'card_image_popup';
    }
}
