<?php
/* Transaction Test cases generated on: 2012-02-04 11:44:35 : 1328381075*/
App::uses('Transaction', 'Model');

/**
 * Transaction Test Case
 *
 */
class TransactionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.transaction', 'app.user_card', 'app.buyer');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Transaction = ClassRegistry::init('Transaction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transaction);

		parent::tearDown();
	}

}
