<?php
/* Position Test cases generated on: 2012-02-04 11:44:32 : 1328381072*/
App::uses('Position', 'Model');

/**
 * Position Test Case
 *
 */
class PositionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.position');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Position = ClassRegistry::init('Position');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Position);

		parent::tearDown();
	}

}
