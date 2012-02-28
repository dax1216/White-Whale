<?php
/* Variation Fixture generated on: 2012-02-24 18:01:06 : 1330106466 */

/**
 * VariationFixture
 *
 */
class VariationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'variation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'short_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'set_info_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'variation_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'variation_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'short_name' => 'Lorem ipsum dolor sit amet',
			'set_info_id' => 1
		),
	);
}
