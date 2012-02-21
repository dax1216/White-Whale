<?php
/* CardVariationType Test cases generated on: 2012-02-13 16:46:14 : 1329176774*/
App::uses('CardVariationType', 'Model');

/**
 * CardVariationType Test Case
 *
 */
class CardVariationTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_variation_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardVariationType = ClassRegistry::init('CardVariationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardVariationType);

		parent::tearDown();
	}

}
