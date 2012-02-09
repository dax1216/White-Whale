<?php
App::uses('AppModel', 'Model');
/**
 * UserCardsQualifier Model
 *
 * @property UserCard $UserCard
 * @property Qualifier $Qualifier
 */
class UserCardsQualifier extends AppModel {
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
		'qualifier_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Qualifier' => array(
			'className' => 'Qualifier',
			'foreignKey' => 'qualifier_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
