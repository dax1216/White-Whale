<?php
/* GradeValue Fixture generated on: 2012-02-04 11:44:31 : 1328381071 */

/**
 * GradeValueFixture
 *
 */
class GradeValueFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'grade_value_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'is_raw' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'grade_value_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'grade_value_id' => 1,
			'name' => 'Lo',
			'is_raw' => 1
		),
	);
}
