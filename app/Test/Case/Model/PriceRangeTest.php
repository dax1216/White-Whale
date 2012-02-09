<?php
/* PriceRange Test cases generated on: 2012-02-04 11:44:32 : 1328381072*/
App::uses('PriceRange', 'Model');

/**
 * PriceRange Test Case
 *
 */
class PriceRangeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.price_range');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->PriceRange = ClassRegistry::init('PriceRange');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PriceRange);

		parent::tearDown();
	}

}
