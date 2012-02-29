<?php
/* CardImageType Test cases generated on: 2012-02-26 07:52:33 : 1330242753*/
App::uses('CardImageType', 'Model');

/**
 * CardImageType Test Case
 *
 */
class CardImageTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_image_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardImageType = ClassRegistry::init('CardImageType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardImageType);

		parent::tearDown();
	}

}
