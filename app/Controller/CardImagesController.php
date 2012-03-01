<?php
App::uses('AppController', 'Controller');

class CardImagesController extends AppController {
    public $name = 'CardImages';
    
    public $components = array('ImageResizer');
    
    public $uses = array('CardImage', 'Image');
    
    
    public function add() {
        if($this->request->is('post')) {
            $this->upload_images('1909_T206_TyCobb_WhiteSleaves_OldMill', 'card_variations', 1);
        }
        
    }
    
    public function upload_images($card_image_name, $group_image_type, $group_id) {    
        $this->layout = false;
        $this->autoRender = false;
        
        $card_images_dir = Configure::read('card_images_dir');
        
        if($this->request->is('post')) {      
            
            $card_frontside = $this->request->data['CardImage']['card_front_side'];
            $card_backside = $this->request->data['CardImage']['card_back_side'];
            $card_orientation = $this->request->data['CardImage']['card_orientation'];            

            $this->CardImage->set($this->request->data);

            if($this->CardImage->validates()) {
                $card_sizes = Configure::read('card_image_sizes');                

                $card_images = array('front' => $card_frontside, 'rear' => $card_backside);
                $front_img = $rear_img = '';
                
                foreach($card_images as $side => $card_image) {
                    //Rename file
                    $filename_parts = explode('.', $card_image['name']);
                    $file_extension = array_pop($filename_parts);
                    $new_filename = $card_image_name .'_'. $side .'.'. $file_extension;                                                                      

                    foreach($card_sizes as $size_label => $dimensions) {
                        $upload_path = $card_images_dir . $group_image_type . DS . $group_id . $size_label;
                        
                        if(!is_dir($upload_path)) {
                            @mkdir($upload_path, 0777, true);
                        }                        
                        
                        $new_file = $upload_path . DS . $new_filename;

                        $prefs = array('resize_data' => array(RESIZE_WIDTH, $dimensions[$card_orientation], null));
                        $errors = $this->ImageResizer->uploadFile($card_image['tmp_name'], $new_file, $prefs);
                        
                        if (!empty($errors)) {
                            foreach ($errors as $key => $value) {
                                $this->Session->setFlash('The following image resize error occured.<br />Error: ' . $value);
                                
                                return false;
                            }
                        } 
                    }
                    
                    $data = array('Image' => array('file_name' => $new_filename));
                    
                    $this->Image->create();
                    $this->Image->save($data);
                }                                          
            } else {
                print_r($this->CardImage->validationErrors);
                
                return false;
            } 
            
            return true;
        }                        
    }

    public function popup($front_img_id = null, $rear_img_id) {        
        $this->layout = 'card_images';

        $card_image = $this->Image->findByImageId($image_id);

        $this->set('card_image', $card_image);
        
    }
    
    public function show_preview() {
        $this->layout = false;
        $this->autoRender = false;
        
        $card_images_dir = Configure::read('card_images_dir');
        $card_sizes = Configure::read('card_image_sizes');
        
        if($this->request->data['CardImage']['preview_selected'] == 'front') {
            $card_image = $this->request->data['CardImage']['card_front_side'];        
        } else {
            $card_image = $this->request->data['CardImage']['card_back_side'];        
        }
        
        $card_orientation = $this->request->data['CardImage']['card_orientation'];
        
        $this->CardImage->set($this->request->data);
        
        if($this->CardImage->validates(array('fieldList' =>array('card_front_side')))) {
            $upload_path = $card_images_dir . 'temp';

            if(!is_dir($upload_path)) {
                @mkdir($upload_path, 0777, true);
            }                        

            $filename_parts = explode('.', $card_image['name']);
            $file_extension = array_pop($filename_parts);
            $new_filename = time() .'.'. $file_extension;  

            $new_file = $upload_path . DS . $new_filename;

            $prefs = array('resize_data' => array(RESIZE_WIDTH, $card_sizes['thumbnail'][$card_orientation], null));
            $errors = $this->ImageResizer->uploadFile($card_image['tmp_name'], $new_file, $prefs);

            if(empty($errors)) {
                echo '<img src="/files/card_images/temp/' . $new_filename . '" />';
            } else {
                echo 'Error in previewing card image.';
            }
        } else {
            print_r($this->CardImage->validationErrors);
        }
    }
    
    public function delete($id = null) {
        if(is_numeric($id)) {
            $card_sizes = Configure::read('card_image_sizes');
            $card_images_dir = Configure::read('card_images_dir');                

            $card_image = $this->Image->find('first', array(
                                            'conditions' => array('Image.image_id' => $id)));
            
            foreach($card_sizes as $size_label => $dimensions) {
                $file_path = $card_images_dir . $size_label . DS . 'frontside' . DS . $card_image['Image']['file_name'];
                @unlink($file_path);

                $file_path = $card_images_dir . $size_label . DS . 'backside' . DS . $card_image['Image']['file_name'];
                @unlink($file_path);
            }
            
            $this->Image->delete($id);
        } else {
            $this->redirect('/');
        }
    }

    public function index() {
        
    }
}
