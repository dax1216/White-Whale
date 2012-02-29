<?php
App::uses('AppModel', 'Model');
/**
 * Variation Model
 *
 * @property SetInfo $SetInfo
 * @property Card $Card
 */
class Variation extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'variation_id';
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SetInfo' => array(
			'className' => 'SetInfo',
			'foreignKey' => 'set_info_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
