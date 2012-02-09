<?php
/* UserCardsTheme Test cases generated on: 2012-02-04 11:44:36 : 1328381076*/
App::uses('UserCardsTheme', 'Model');

/**
 * UserCardsTheme Test Case
 *
 */
class UserCardsThemeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_cards_theme', 'app.theme', 'app.user', 'app.user_card', 'app.card_variation', 'app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.ards_qualifier', 'app.user_cards_qualifier', 'app.ards_theme', 'app.variation', 'app.qualifier');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserCardsTheme = ClassRegistry::init('UserCardsTheme');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserCardsTheme);

		parent::tearDown();
	}

}
