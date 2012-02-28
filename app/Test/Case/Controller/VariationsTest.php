<?php
/* Variations Test cases generated on: 2012-02-26 08:47:10 : 1330246030*/
App::uses('Variations', 'Controller');

/**
 * TestVariations *
 */
class TestVariations extends Variations {
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
 * Variations Test Case
 *
 */
class VariationsTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user', 'app.user_role', 'app.image');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Variations = new TestVariations();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Variations);

		parent::tearDown();
	}

}
