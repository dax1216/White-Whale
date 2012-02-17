<?php
/* Qualifiers Test cases generated on: 2012-02-15 16:03:31 : 1329347011*/
App::uses('Qualifiers', 'Controller');

/**
 * TestQualifiers *
 */
class TestQualifiers extends Qualifiers {
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
 * Qualifiers Test Case
 *
 */
class QualifiersTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.price_range');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Qualifiers = new TestQualifiers();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Qualifiers);

		parent::tearDown();
	}

}
