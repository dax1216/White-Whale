<?php
App::uses('AppModel', 'Model');
/**
 * Qualifier Model
 *
 * @property UserCard $UserCard
 */
class Qualifier extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'qualifier_id';
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'UserCard' => array(
			'className' => 'UserCard',
			'joinTable' => 'user_cards_qualifiers',
			'foreignKey' => 'qualifier_id',
			'associationForeignKey' => 'user_card_id',
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

}
