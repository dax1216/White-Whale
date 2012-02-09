<?php
/* Brand Test cases generated on: 2012-02-04 11:44:28 : 1328381068*/
App::uses('Brand', 'Model');

/**
 * Brand Test Case
 *
 */
class BrandTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.brand');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Brand = ClassRegistry::init('Brand');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Brand);

		parent::tearDown();
	}

}
