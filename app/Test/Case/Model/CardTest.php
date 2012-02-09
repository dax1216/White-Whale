<?php
/* Card Test cases generated on: 2012-02-06 17:15:10 : 1328573710*/
App::uses('Card', 'Model');

/**
 * Card Test Case
 *
 */
class CardTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card', 'app.set_info', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.franchise', 'app.league', 'app.user', 'app.user_card', 'app.ards_qualifier', 'app.user_cards_qualifier', 'app.ards_theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Card = ClassRegistry::init('Card');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Card);

		parent::tearDown();
	}

}
