<?php
App::uses('AppModel', 'Model');
/**
 * CardImages Model
 */
class CardImage extends AppModel {
    public $name = 'CardImage';
    
    public $useTable = false;
    
    public $validate = array(
        'card_front_side' => array (
			'valid_upload' => array (
                                            'rule' => array('validateUploadedFile', true),
                                            'message' => 'An error occurred whilst uploading.'
                                        )
            ),
        'card_back_side' => array (
                    'valid_upload' => array (
                                            'rule' => array('validateUploadedFile', true),
                                            'message' => 'An error occurred whilst uploading.'
                                        )
            )
    );

    public function validateUploadedFile($data, $required = false) {
        // Remove first level of Array ($data['Artwork']['size'] becomes $data['size'])
        $upload_info = array_shift($data);
        
        // No file uploaded.
        if ($required && $upload_info['size'] == 0) {
                return false;
        }

        // Check for Basic PHP file errors.
        if ($upload_info['error'] !== 0) {
                return false;
        }

        // Finally, use PHP's own file validation method.
        return is_uploaded_file($upload_info['tmp_name']);
    }
}
?>