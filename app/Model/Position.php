<?php
App::uses('AppModel', 'Model');
/**
 * Position Model
 *
 */
class Position extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'position_id';
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
