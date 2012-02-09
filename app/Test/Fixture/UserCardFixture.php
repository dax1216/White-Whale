<?php
/* UserCard Fixture generated on: 2012-02-04 11:44:35 : 1328381075 */

/**
 * UserCardFixture
 *
 */
class UserCardFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'card_variation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'grade_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 5, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'grade_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 4, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'grade_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'own_card' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'key' => 'unique', 'collate' => NULL, 'comment' => ''),
		'active_sell' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'key' => 'unique', 'collate' => NULL, 'comment' => ''),
		'white_whale' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'key' => 'unique', 'collate' => NULL, 'comment' => ''),
		'front_img' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'rear_img' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'bought_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'listed_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'sell_price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
		'low_price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
		'high_price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
		'private_notes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'public_notes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'user_card_id', 'unique' => 1), 'own_card_UNIQUE' => array('column' => 'own_card', 'unique' => 1), 'active_sell_UNIQUE' => array('column' => 'active_sell', 'unique' => 1), 'white_whale_UNIQUE' => array('column' => 'white_whale', 'unique' => 1), 'grade_type_UNIQUE' => array('column' => 'grade_type', 'unique' => 1), 'grade_value_UNIQUE' => array('column' => 'grade_value', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'user_card_id' => 1,
			'user_id' => 1,
			'card_variation_id' => 1,
			'grade_type' => 'Lor',
			'grade_value' => 'Lo',
			'grade_number' => 'Lorem ipsum dolor sit amet',
			'own_card' => 1,
			'active_sell' => 1,
			'white_whale' => 1,
			'front_img' => 'Lorem ipsum dolor sit amet',
			'rear_img' => 'Lorem ipsum dolor sit amet',
			'bought_date' => '2012-02-04 11:44:35',
			'listed_date' => '2012-02-04 11:44:35',
			'sell_price' => 1,
			'low_price' => 1,
			'high_price' => 1,
			'private_notes' => 'Lorem ipsum dolor sit amet',
			'public_notes' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-02-04 11:44:35',
			'updated' => '2012-02-04 11:44:35'
		),
	);
}
