<?php
/* Qualifier Test cases generated on: 2012-02-04 11:44:33 : 1328381073*/
App::uses('Qualifier', 'Model');

/**
 * Qualifier Test Case
 *
 */
class QualifierTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.qualifier', 'app.user_card', 'app.user_cards_qualifier');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Qualifier = ClassRegistry::init('Qualifier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Qualifier);

		parent::tearDown();
	}

}
