<?php
/* Variation Test cases generated on: 2012-02-04 19:20:48 : 1328408448*/
App::uses('Variation', 'Model');

/**
 * Variation Test Case
 *
 */
class VariationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.variation', 'app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.card_player', 'app.position', 'app.player', 'app.card_variation', 'app.user_card', 'app.user', 'app.watch', 'app.offer', 'app.grade_type', 'app.grade_value', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Variation = ClassRegistry::init('Variation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Variation);

		parent::tearDown();
	}

}
