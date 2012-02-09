<?php
/* Theme Test cases generated on: 2012-02-04 11:44:34 : 1328381074*/
App::uses('Theme', 'Model');

/**
 * Theme Test Case
 *
 */
class ThemeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.theme', 'app.user', 'app.user_card', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Theme = ClassRegistry::init('Theme');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Theme);

		parent::tearDown();
	}

}
