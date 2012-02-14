<?php
/* CardVariation Test cases generated on: 2012-02-13 18:34:13 : 1329183253*/
App::uses('CardVariation', 'Model');

/**
 * CardVariation Test Case
 *
 */
class CardVariationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_variation', 'app.card_variation_type', 'app.card', 'app.set_info', 'app.set_wiki_info', 'app.brand', 'app.acc_catalog', 'app.card_wiki_info', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardVariation = ClassRegistry::init('CardVariation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardVariation);

		parent::tearDown();
	}

}
