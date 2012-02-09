<?php
App::uses('AppModel', 'Model');
/**
 * UserCard Model
 *
 * @property User $User
 * @property CardVariation $CardVariation
 * @property Qualifier $Qualifier
 * @property Theme $Theme
 */
class UserCard extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'user_card_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'own_card' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'active_sell' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'white_whale' => array(
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CardVariation' => array(
			'className' => 'CardVariation',
			'foreignKey' => 'card_variation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GradeType' => array(
			'className' => 'GradeType',
			'foreignKey' => 'grade_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GradeValue' => array(
			'className' => 'GradeValue',
			'foreignKey' => 'grade_value_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Qualifier' => array(
			'className' => 'Qualifier',
			'joinTable' => 'user_cards_qualifiers',
			'foreignKey' => 'user_card_id',
			'associationForeignKey' => 'qualifier_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Theme' => array(
			'className' => 'Theme',
			'joinTable' => 'user_cards_themes',
			'foreignKey' => 'user_card_id',
			'associationForeignKey' => 'theme_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
   public $hasMany = array(
		'Watch' => array(
            'className'     => 'Watch',
            'foreignKey'    => 'user_card_id',
            'conditions'    => '',
            'order'         => '',
            'limit'         => '',
            'dependent'     => true
        ),
		'Offer' => array(
            'className'     => 'Offer',
            'foreignKey'    => 'user_card_id',
            'conditions'    => '',
            'order'         => '',
            'limit'         => '',
            'dependent'     => true
        )
    );
	
}
