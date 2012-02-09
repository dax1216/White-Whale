<?php
/* UserCard Test cases generated on: 2012-02-04 11:44:35 : 1328381075*/
App::uses('UserCard', 'Model');

/**
 * UserCard Test Case
 *
 */
class UserCardTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_card', 'app.user', 'app.card_variation', 'app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.ards_qualifier', 'app.user_cards_qualifier', 'app.ards_theme', 'app.user_cards_theme', 'app.variation', 'app.qualifier', 'app.theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserCard = ClassRegistry::init('UserCard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserCard);

		parent::tearDown();
	}

}
