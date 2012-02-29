<?php
/* UserRole Test cases generated on: 2012-02-26 07:54:15 : 1330242855*/
App::uses('UserRole', 'Model');

/**
 * UserRole Test Case
 *
 */
class UserRoleTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_role');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserRole = ClassRegistry::init('UserRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserRole);

		parent::tearDown();
	}

}
