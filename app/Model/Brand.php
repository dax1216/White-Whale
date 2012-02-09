<?php
App::uses('AppModel', 'Model');
/**
 * Brand Model
 *
 */
class Brand extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'brand_id';
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
