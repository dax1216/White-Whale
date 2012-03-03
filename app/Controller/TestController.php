<?php
    App::import('Controller', 'Images');

    class TestController extends AppController {
        
        public function add() {
            if($this->request->is('post')) {
                $cardImages = new ImagesController();
                $cardImages->constructClasses();                
                
                $params = array('front_img' => $this->request->data['Card']['card_front_side'],
                                'rear_img' => $this->request->data['Card']['card_back_side'],
                                'card_orientation' => $this->request->data['Card']['card_orientation'],
                                'filename' => '1909_T206_TyCobb_WhiteSleaves_OldMill', 
                                'image_group_type' => 'card_variations', 
                                'image_group_id' => 1);
                
                if(($res = $cardImages->upload_images($params)) != TRUE) {                
                    
                }
                
                
            }

        }
    }
?>
