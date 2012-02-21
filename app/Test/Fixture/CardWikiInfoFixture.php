<?php
/* CardWikiInfo Fixture generated on: 2012-02-13 17:23:45 : 1329179025 */

/**
 * CardWikiInfoFixture
 *
 */
class CardWikiInfoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'card_wiki_info_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'overview' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 4096, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'variations' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'rarity' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'famous_copies' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'public_sales' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'card_wiki_info_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'card_wiki_info_id' => 1,
			'overview' => 'Lorem ipsum dolor sit amet',
			'variations' => 'Lorem ipsum dolor sit amet',
			'rarity' => 'Lorem ipsum dolor sit amet',
			'famous_copies' => 'Lorem ipsum dolor sit amet',
			'public_sales' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-02-13 17:23:45',
			'updated' => '2012-02-13 17:23:45'
		),
	);
}
