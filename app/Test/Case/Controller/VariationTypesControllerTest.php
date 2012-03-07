<?php
/* VariationTypes Test cases generated on: 2012-03-08 05:58:23 : 1331157503*/
App::uses('VariationTypesController', 'Controller');

/**
 * TestVariationTypesController *
 */
class TestVariationTypesController extends VariationTypesController {
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
 * VariationTypesController Test Case
 *
 */
class VariationTypesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.variation_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->VariationTypes = new TestVariationTypesController();
		$this->VariationTypes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VariationTypes);

		parent::tearDown();
	}

}
