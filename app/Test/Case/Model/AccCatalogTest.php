<?php
/* AccCatalog Test cases generated on: 2012-02-04 11:44:28 : 1328381068*/
App::uses('AccCatalog', 'Model');

/**
 * AccCatalog Test Case
 *
 */
class AccCatalogTestCase extends CakeTestCase {
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

		$this->AccCatalog = ClassRegistry::init('AccCatalog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccCatalog);

		parent::tearDown();
	}

}
