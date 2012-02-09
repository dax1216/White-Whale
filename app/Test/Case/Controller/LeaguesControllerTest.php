<?php
/* Leagues Test cases generated on: 2012-02-06 17:13:59 : 1328573639*/
App::uses('LeaguesController', 'Controller');

/**
 * TestLeaguesController *
 */
class TestLeaguesController extends LeaguesController {
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
 * LeaguesController Test Case
 *
 */
class LeaguesControllerTestCase extends CakeTestCase {
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

		$this->Leagues = new TestLeaguesController();
		$this->Leagues->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Leagues);

		parent::tearDown();
	}

}
