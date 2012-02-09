<?php
/* Set Test cases generated on: 2012-02-04 13:34:26 : 1328387666*/
App::uses('Set', 'Model');

/**
 * Set Test Case
 *
 */
class SetTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Set = ClassRegistry::init('Set');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Set);

		parent::tearDown();
	}

}
