<?php
/* GradeType Test cases generated on: 2012-02-04 11:44:30 : 1328381070*/
App::uses('GradeType', 'Model');

/**
 * GradeType Test Case
 *
 */
class GradeTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.grade_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->GradeType = ClassRegistry::init('GradeType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GradeType);

		parent::tearDown();
	}

}
