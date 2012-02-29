<?php
App::uses('AppModel', 'Model');
/**
 * Card Model
 *
 * @property SetInfo $SetInfo
 * @property CardWikiInfo $CardWikiInfo
 * @property Team $Team
 * @property User $User
 * @property ArdsQualifier $ArdsQualifier
 * @property ArdsTheme $ArdsTheme
 */
class Card extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'card_id';
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
		'card_number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'set_info_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'franchise_group_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'card_wiki_info_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
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
		),
		'CardWikiInfo' => array(
			'className' => 'CardWikiInfo',
			'foreignKey' => 'card_wiki_info_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FranchiseGroup' => array(
			'className' => 'FranchiseGroup',
			'foreignKey' => 'franchise_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
   public $hasMany = array(
        'CardPlayers' => array(
            'className'     => 'CardPlayer',
            'foreignKey'    => 'card_id',
            'conditions'    => '',
            'order'         => '',
            'limit'         => '',
            'dependent'     => true
        ),
	'CardVariation' => array(
            'className'     => 'CardVariation',
            'foreignKey'    => 'card_id',
            'conditions'    => '',
            'order'         => '',
            'limit'         => '',
            'dependent'     => true
        )
    );

}
