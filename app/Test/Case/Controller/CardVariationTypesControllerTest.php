<?php
/* CardVariationTypes Test cases generated on: 2012-02-13 18:45:57 : 1329183957*/
App::uses('CardVariationTypesController', 'Controller');

/**
 * TestCardVariationTypesController *
 */
class TestCardVariationTypesController extends CardVariationTypesController {
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
 * CardVariationTypesController Test Case
 *
 */
class CardVariationTypesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_variation_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardVariationTypes = new TestCardVariationTypesController();
		$this->CardVariationTypes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardVariationTypes);

		parent::tearDown();
	}

}
