<?php
/* Franchises Test cases generated on: 2012-02-26 08:47:10 : 1330246030*/
App::uses('Franchises', 'Controller');

/**
 * TestFranchises *
 */
class TestFranchises extends Franchises {
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
 * Franchises Test Case
 *
 */
class FranchisesTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.comment', 'app.user', 'app.user_role', 'app.image');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Franchises = new TestFranchises();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Franchises);

		parent::tearDown();
	}

}
