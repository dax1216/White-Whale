<?php
App::uses('AppController', 'Controller');

class CardImagesController extends AppController {
    public $name = 'CardImages';
    public $components = array('ImageResizer');

    public function index($card_image_id = null) {
        $card_image = $this->CardImage->findByCardImageId($card_image_id);
            
        $this->set('card_image', $card_image);
    }
    
    public function add($card_image_id = null) {    
        $this->layout = 'card_images';
        
        $card_images_dir = Configure::read('card_images_dir');
        
        if($this->request->is('post')) {                           
            $card_frontside = $this->request->data['CardImage']['card_front_side'];
            $card_backside = $this->request->data['CardImage']['card_back_side'];
            $card_orientation = $this->request->data['CardImage']['card_orientation'];            

            if(isset($this->request->data['CardImage']['card_image_id'])) {                    
                $this->delete($this->request->data['CardImage']['card_image_id']);
                unset($this->request->data['CardImage']['card_image_id']);
            }
            
            $this->CardImage->set($this->request->data);

            if($this->CardImage->validates()) {
                $card_sizes = Configure::read('card_image_sizes');                

                $card_images = array('frontside' => $card_frontside, 'backside' => $card_backside);
                $front_img = $rear_img = '';
                
                foreach($card_images as $side => $card_image) {
                    foreach($card_sizes as $size_label => $dimensions) {
                        $upload_path = $card_images_dir . $size_label . DS . $side;
                        
                        if(!is_dir($upload_path)) {
                            @mkdir($upload_path, 0777, true);
                        }
                        
                        //Rename file
                        $filename_parts = explode('.', $card_image['name']);
                        $file_extension = array_pop($filename_parts);
                        $new_filename = md5(time() . implode('', $filename_parts)) . '.' . $file_extension;
                        
                        if($side == 'frontside') {
                            $front_img = $new_filename;
                        } else {
                            $rear_img = $new_filename;
                        }                        
                        
                        $new_file = $upload_path . DS . $new_filename;

                        $prefs = array('resize_data' => array(RESIZE_WIDTH, $dimensions[$card_orientation], null));
                        $errors = $this->ImageResizer->uploadFile($card_image['tmp_name'], $new_file, $prefs);
                        
                        if (!empty($errors)) {
                            foreach ($errors as $key => $value) {
                                $this->Session->setFlash('The following image resize error occured.<br />Error: ' . $value);
                                $this->redirect('/CardImages/add');
                            }
                        } 
                    }
                }
                
                $card_image_data['CardImage'] = array(  'front_img' => $front_img, 
                                                        'rear_img' => $rear_img,
                                                        'card_orientation' => $card_orientation);
                
                $this->CardImage->create();                                
                
                $this->CardImage->save($card_image_data, false);
                
                $this->Session->setFlash('Card images successfully uploaded');
                $this->redirect('/CardImages/add/' . $this->CardImage->id);                
            } 
        }
        
        if(is_numeric($card_image_id)) {
            $card_image = $this->CardImage->findByCardImageId($card_image_id);
            
            $this->set('card_image', $card_image);
        }
    }

    public function popup($card_image_id = null) {
        if(is_numeric($card_image_id)) {
            $this->layout = 'card_images';

            $card_image = $this->CardImage->findByCardImageId($card_image_id);

            $this->set('card_image', $card_image);
        }
    }
    
    
    public function delete($id = null) {
        if(is_numeric($id)) {
            $card_sizes = Configure::read('card_image_sizes');
            $card_images_dir = Configure::read('card_images_dir');                

            $card_image = $this->CardImage->find('first', array(
                                            'conditions' => array('CardImage.card_image_id' => $id)));
            
            foreach($card_sizes as $size_label => $dimensions) {
                $file_path = $card_images_dir . $size_label . DS . 'frontside' . DS . $card_image['CardImage']['front_img'];
                @unlink($file_path);

                $file_path = $card_images_dir . $size_label . DS . 'backside' . DS . $card_image['CardImage']['rear_img'];
                @unlink($file_path);
            }
            
            $this->CardImage->delete($id);
        } else {
            $this->redirect('/');
        }
    }
}
