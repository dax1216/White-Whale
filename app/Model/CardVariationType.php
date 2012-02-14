<?php
App::uses('AppModel', 'Model');
/**
 * CardVariationType Model
 *
 */
class CardVariationType extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'card_variation_type_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
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
}
