<?php
/* Offer Test cases generated on: 2012-02-06 23:44:56 : 1328597096*/
App::uses('Offer', 'Model');

/**
 * Offer Test Case
 *
 */
class OfferTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.offer', 'app.user', 'app.user_card', 'app.card_variation', 'app.card', 'app.set_info', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player', 'app.grade_type', 'app.grade_value', 'app.watch', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Offer = ClassRegistry::init('Offer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Offer);

		parent::tearDown();
	}

}
