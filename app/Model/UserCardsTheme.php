<?php
App::uses('AppModel', 'Model');
/**
 * UserCardsTheme Model
 *
 * @property Theme $Theme
 * @property UserCard $UserCard
 */
class UserCardsTheme extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'theme_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Theme' => array(
			'className' => 'Theme',
			'foreignKey' => 'theme_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UserCard' => array(
			'className' => 'UserCard',
			'foreignKey' => 'user_card_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
