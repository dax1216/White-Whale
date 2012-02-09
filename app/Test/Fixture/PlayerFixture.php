<?php
/* Player Fixture generated on: 2012-02-06 21:31:38 : 1328589098 */

/**
 * PlayerFixture
 *
 */
class PlayerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'player_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'nick_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'given_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'name_note' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'year_started' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'year_finished' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'hall_of_fame' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'player_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'player_id' => 'Lorem i',
			'name' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'nick_name' => 'Lorem ipsum dolor sit amet',
			'given_name' => 'Lorem ipsum dolor sit amet',
			'name_note' => 'Lorem ipsum dolor sit amet',
			'year_started' => 1,
			'year_finished' => 1,
			'hall_of_fame' => 1
		),
	);
}
