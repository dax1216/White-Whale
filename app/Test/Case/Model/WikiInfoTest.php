<?php
/* WikiInfo Test cases generated on: 2012-02-04 11:44:38 : 1328381078*/
App::uses('WikiInfo', 'Model');

/**
 * WikiInfo Test Case
 *
 */
class WikiInfoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.wiki_info');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->WikiInfo = ClassRegistry::init('WikiInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WikiInfo);

		parent::tearDown();
	}

}
