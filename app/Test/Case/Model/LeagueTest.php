<?php
/* League Test cases generated on: 2012-02-06 17:12:39 : 1328573559*/
App::uses('League', 'Model');

/**
 * League Test Case
 *
 */
class LeagueTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.league');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->League = ClassRegistry::init('League');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->League);

		parent::tearDown();
	}

}
