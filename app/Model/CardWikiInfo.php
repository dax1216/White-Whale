<?php
App::uses('AppModel', 'Model');
/**
 * CardWikiInfo Model
 *
 */
class CardWikiInfo extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'card_wiki_info_id';
	
	
/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Card' => array(
			'className' => 'Card',
			'foreignKey' => 'card_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
