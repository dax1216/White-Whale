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
            $card_image_type = $this->request->data['CardImage']['card_image_type'];
            
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
                        
                        $new_file = $upload_path . DS . $card_image['name'];

                        $prefs = array('resize_data' => array(RESIZE_WIDTH, $dimensions[$card_image_type], null));
                        $errors = $this->ImageResizer->uploadFile($card_image['tmp_name'], $new_file, $prefs);
                        
                        if (!empty($errors)) {
                            foreach ($errors as $key => $value) {
                                $this->Session->setFlash('The following image resize error occured.<br />Error: ' . $value);
                                $this->redirect('/CardImages/add');
                            }
                        }
                    }
                }
                
                $this->Session->setFlash('Card images successfully uploaded');
            } 
        }
    }

    public function popup() {
        $this->layout = 'card_image_popup';
    }
}
