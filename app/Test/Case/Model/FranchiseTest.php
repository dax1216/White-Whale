<?php
/* Franchise Test cases generated on: 2012-02-06 17:10:49 : 1328573449*/
App::uses('Franchise', 'Model');

/**
 * Franchise Test Case
 *
 */
class FranchiseTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.franchise');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Franchise = ClassRegistry::init('Franchise');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Franchise);

		parent::tearDown();
	}

}
