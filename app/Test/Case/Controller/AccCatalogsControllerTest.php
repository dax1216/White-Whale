<?php
/* AccCatalogs Test cases generated on: 2012-02-07 22:46:33 : 1328679993*/
App::uses('AccCatalogsController', 'Controller');

/**
 * TestAccCatalogsController *
 */
class TestAccCatalogsController extends AccCatalogsController {
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
 * AccCatalogsController Test Case
 *
 */
class AccCatalogsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.acc_catalog');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->AccCatalogs = new TestAccCatalogsController();
		$this->AccCatalogs->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccCatalogs);

		parent::tearDown();
	}

}
