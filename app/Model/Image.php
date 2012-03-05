<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 * @property Card $Card
 */
class Image extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'image_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
            'card_front_side' => array (
                            'valid_upload' => array (
                                                'rule' => array('validateUploadedFile', true),
                                                'message' => 'An error occurred whilst uploading.'
                                            ),
                            'valid_image' => array
                                        (
                                                'rule' => array('isValidImageFile'),
                                                'message' => 'The file you have uploaded is not a valid or is unsupported, please try again',
                                        )
                ),
            'card_back_side' => array (
                        'valid_upload' => array (
                                                'rule' => array('validateUploadedFile', true),
                                                'message' => 'An error occurred whilst uploading.'
                                            ),
                        'valid_image' => array
                                    (
                                            'rule' => array('isValidImageFile'),
                                            'message' => 'The file you have uploaded is not a valid or is unsupported, please try again',
                                    ),
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
    
    public function isValidImageFile($data)
    {
        // Allow these image mime-types, all others will be rejected
        $valid_mime_types = array('image/jpeg', 'image/png', 'image/gif');
 
        $data = array_shift($data);
        $filename = $data['tmp_name'];
 
        // Catch I/O Errors.
        if (!is_readable($filename)) {
            //debug(__METHOD__." failed to read input file: {$filename}");
            return false;
        }         
 
        if (!$mime_type = $this->getImageMimeType($filename)) {
            //debug(__METHOD__." Uploaded file does not have a mime-type");
            return false;
        }
        // Check the MimeType against the array of valid ones specified above
        if (!in_array($mime_type, $valid_mime_types)) {
            //debug(__METHOD__." Uploaded image has rejected Mime Type: {$mime_type}");
            return false;
        } 
 
        return true;
    }
    
    public function getImageMimeType($filename)
    {         
        $result = getimagesize($filename);	        
        if (isset($result['mime'])) {
	        return $result['mime'];
        }
        return false;
    }

	//The Associations below have been created with all possible keys, those that are not needed can be removed

}
