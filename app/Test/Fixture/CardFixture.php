<?php
/* Card Fixture generated on: 2012-02-26 01:03:10 : 1330218190 */

/**
 * CardFixture
 *
 */
class CardFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'short_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'descriptor' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'card_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'set_info_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'card_wiki_info_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'team_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'notes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'card_id', 'unique' => 1), 'name_UNIQUE' => array('column' => 'name', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'card_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'short_name' => 'Lorem ipsum dolor sit amet',
			'descriptor' => 'Lorem ipsum dolor sit amet',
			'card_number' => 'Lorem ipsum dolor sit amet',
			'set_info_id' => 1,
			'card_wiki_info_id' => 1,
			'team_id' => 'L',
			'notes' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-02-26 01:03:10'
		),
	);
}
