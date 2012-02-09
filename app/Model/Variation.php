<?php
App::uses('AppModel', 'Model');
/**
 * Variation Model
 *
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
		'title' => array(
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
 * hasMany associations
 *
 * @var array
 */
   public $hasMany = array(
        'CardVariation' => array(
            'className'     => 'CardVariation',
            'foreignKey'    => 'variation_id',
            'conditions'    => '',
            'order'         => '',
            'limit'         => '',
            'dependent'     => true
        )
    );
}
