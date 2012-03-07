<?php
/* Variations Test cases generated on: 2012-03-08 05:58:50 : 1331157530*/
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
