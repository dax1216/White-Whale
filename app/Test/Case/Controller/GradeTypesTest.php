<?php
/* GradeTypes Test cases generated on: 2012-02-26 08:47:10 : 1330246030*/
App::uses('GradeTypes', 'Controller');

/**
 * TestGradeTypes *
 */
class TestGradeTypes extends GradeTypes {
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
 * GradeTypes Test Case
 *
 */
class GradeTypesTestCase extends CakeTestCase {
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

		$this->GradeTypes = new TestGradeTypes();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GradeTypes);

		parent::tearDown();
	}

}
