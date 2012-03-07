<?php
/* VariationType Test cases generated on: 2012-03-08 05:58:13 : 1331157493*/
App::uses('VariationType', 'Model');

/**
 * VariationType Test Case
 *
 */
class VariationTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.variation_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->VariationType = ClassRegistry::init('VariationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VariationType);

		parent::tearDown();
	}

}
