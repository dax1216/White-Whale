<?php
App::uses('AppController', 'Controller');
/**
 * Images Controller
 *
 * @property Image $Image
 */
class ImagesController extends AppController {

    public $components = array('ImageResizer');
    
    public $uses = array('Image');    
    
    
    public function upload_images($params) {    
        $this->layout = false;
        $this->autoRender = false;
        
        $card_images_dir = Configure::read('card_images_dir');
        $card_image_name = $params['filename'];
        $image_group_type = $params['image_group_type'];
        $image_group_id = $params['image_group_id'];                           
        $card_frontside = $params['front_img'];
        $card_backside = $params['rear_img'];
        $card_orientation = $params['card_orientation'];            

        $validate_data = array('CardImage' => array('card_front_side' => $card_frontside,
                                                    'card_back_side' => $card_backside));
        $this->Image->set($validate_data);

        if($this->Image->validates()) {
            $card_sizes = Configure::read('card_image_sizes');                

            $card_images = array('front' => $card_frontside, 'rear' => $card_backside);
            $front_img = $rear_img = '';

            foreach($card_images as $side => $card_image) {
                //Rename file
                $filename_parts = explode('.', $card_image['name']);
                $file_extension = array_pop($filename_parts);
                $new_filename = $card_image_name .'_'. $side .'.'. $file_extension;                                                                      

                foreach($card_sizes as $size_label => $dimensions) {
                    $upload_path = $card_images_dir . $image_group_type . DS . $image_group_id . DS . $size_label;

                    if(!is_dir($upload_path)) {
                        @mkdir($upload_path, 0777, true);
                    }                        

                    $new_file = $upload_path . DS . $new_filename;

                    $prefs = array('resize_data' => array(RESIZE_WIDTH, $dimensions[$card_orientation], null));
                    $errors = $this->ImageResizer->uploadFile($card_image['tmp_name'], $new_file, $prefs);

                    if (!empty($errors)) {
                        $error_string = '';

                        foreach ($errors as $key => $value) {
                            $error_string .= 'Error: ' . $value . '<br />';                                                                                               
                        }

                        $this->Session->setFlash('The following image resize error occured.<br />'. $error_string);

                        return false;
                    } 
                }

                $data = array('Image' => array('file_name' => $new_filename));

                $this->Image->create();
                $this->Image->save($data);
            }

            return true;
        } else {                  
            
            //return $this->CardImage->validationErrors;
            return false;
        }                
    }

    public function popup($front_img_id = null, $rear_img_id) {        
        $this->layout = 'card_images';

        $card_image = $this->Image->findByImageId($image_id);

        $this->set('card_image', $card_image);
        
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

}
