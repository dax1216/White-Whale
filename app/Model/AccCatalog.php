<?php
App::uses('AppModel', 'Model');
/**
 * AccCatalog Model
 *
 */
class AccCatalog extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'acc_catalog_id';
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
		)
	);
}
