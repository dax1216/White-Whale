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
		'file_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

}
