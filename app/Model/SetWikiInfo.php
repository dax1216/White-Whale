<?php
App::uses('AppModel', 'Model');
/**
 * CardWikiInfo Model
 *
 */
class SetWikiInfo extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'set_wiki_info_id';
	
	
/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'SetInfo' => array(
			'className' => 'SetInfo',
			'foreignKey' => 'set_info_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
