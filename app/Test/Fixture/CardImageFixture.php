<?php
/* CardImage Fixture generated on: 2012-02-26 07:52:45 : 1330242765 */

/**
 * CardImageFixture
 *
 */
class CardImageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'card_image_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'img_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'image_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'offer_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'rear_img_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'front_img_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'is_active' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'collate' => NULL, 'comment' => ''),
		'user_card_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'card_variation_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'card_image_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'card_image_id' => 1,
			'img_type_id' => 1,
			'image_id' => 1,
			'offer_id' => 1,
			'rear_img_id' => 1,
			'front_img_id' => 1,
			'is_active' => 1,
			'user_card_id' => 1,
			'card_variation_id' => 1
		),
	);
}
