<?php
/* Teams Test cases generated on: 2012-02-06 17:20:54 : 1328574054*/
App::uses('TeamsController', 'Controller');

/**
 * TestTeamsController *
 */
class TestTeamsController extends TeamsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * TeamsController Test Case
 *
 */
class TeamsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.team', 'app.franchise', 'app.league');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Teams = new TestTeamsController();
		$this->Teams->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Teams);

		parent::tearDown();
	}

}
