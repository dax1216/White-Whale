<?php
/* FranchiseGroup Test cases generated on: 2012-02-28 07:06:21 : 1330412781*/
App::uses('FranchiseGroup', 'Model');

/**
 * FranchiseGroup Test Case
 *
 */
class FranchiseGroupTestCase extends CakeTestCase {
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

		$this->FranchiseGroup = ClassRegistry::init('FranchiseGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FranchiseGroup);

		parent::tearDown();
	}

}
