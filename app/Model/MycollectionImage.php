<?php
App::uses('AppModel', 'Model');
/**
 * MycollectionImage Model
 *
 * @property UserCard $UserCard
 * @property RearImg $RearImg
 * @property FrontImg $FrontImg
 */
class MycollectionImage extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'mycollection_image_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_card_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rear_img_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'front_img_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'is_active' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
		'UserCard' => array(
			'className' => 'UserCard',
			'foreignKey' => 'user_card_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RearImg' => array(
			'className' => 'Image',
			'foreignKey' => 'rear_img_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FrontImg' => array(
			'className' => 'Image',
			'foreignKey' => 'front_img_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
