<?php
App::uses('AppModel', 'Model');
/**
 * CardVariationImage Model
 *
 * @property CardVariation $CardVariation
 * @property RearImg $RearImg
 * @property FrontImg $FrontImg
 */
class CardVariationImage extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'card_variation_image_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'card_variation_id' => array(
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
		'CardVariation' => array(
			'className' => 'CardVariation',
			'foreignKey' => 'card_variation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RearImage' => array(
			'className' => 'Image',
			'foreignKey' => 'rear_img_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FrontImage' => array(
			'className' => 'Image',
			'foreignKey' => 'front_img_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
