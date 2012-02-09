<?php
/* Transaction Fixture generated on: 2012-02-04 11:44:35 : 1328381075 */

/**
 * TransactionFixture
 *
 */
class TransactionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'transaction_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'user_card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'buyer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'sell_price' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
		'is_white_whale' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'sold_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'paid_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'shipped_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'received_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'payment_sent_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'tracking_link' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'transaction_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'transaction_id' => 1,
			'user_card_id' => 1,
			'buyer_id' => 1,
			'sell_price' => 1,
			'is_white_whale' => 1,
			'sold_date' => '2012-02-04 11:44:35',
			'paid_date' => '2012-02-04 11:44:35',
			'shipped_date' => '2012-02-04 11:44:35',
			'received_date' => '2012-02-04 11:44:35',
			'payment_sent_date' => '2012-02-04 11:44:35',
			'tracking_link' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-02-04 11:44:35',
			'updated' => '2012-02-04 11:44:35'
		),
	);
}
