<?php
/* GradeValue Test cases generated on: 2012-02-04 11:44:31 : 1328381071*/
App::uses('GradeValue', 'Model');

/**
 * GradeValue Test Case
 *
 */
class GradeValueTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.grade_value');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->GradeValue = ClassRegistry::init('GradeValue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GradeValue);

		parent::tearDown();
	}

}
