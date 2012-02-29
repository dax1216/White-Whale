<?php
/* FranchiseGroups Test cases generated on: 2012-02-28 07:13:50 : 1330413230*/
App::uses('FranchiseGroupsController', 'Controller');

/**
 * TestFranchiseGroupsController *
 */
class TestFranchiseGroupsController extends FranchiseGroupsController {
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
 * FranchiseGroupsController Test Case
 *
 */
class FranchiseGroupsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.franchise_group');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->FranchiseGroups = new TestFranchiseGroupsController();
		$this->FranchiseGroups->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FranchiseGroups);

		parent::tearDown();
	}

}
