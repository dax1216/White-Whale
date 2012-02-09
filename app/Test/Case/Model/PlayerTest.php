<?php
/* Player Test cases generated on: 2012-02-06 21:31:38 : 1328589098*/
App::uses('Player', 'Model');

/**
 * Player Test Case
 *
 */
class PlayerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.player', 'app.card', 'app.set_info', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.card_variation', 'app.user_card', 'app.user', 'app.grade_type', 'app.grade_value', 'app.watch', 'app.offer', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Player = ClassRegistry::init('Player');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Player);

		parent::tearDown();
	}

}
