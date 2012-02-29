<?php
/* CardVariationImage Test cases generated on: 2012-02-26 08:20:42 : 1330244442*/
App::uses('CardVariationImage', 'Model');

/**
 * CardVariationImage Test Case
 *
 */
class CardVariationImageTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_variation_image', 'app.card_variation', 'app.variation', 'app.set_info', 'app.set_wiki_info', 'app.brand', 'app.acc_catalog', 'app.card', 'app.card_wiki_info', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player', 'app.rear_img', 'app.front_img');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardVariationImage = ClassRegistry::init('CardVariationImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardVariationImage);

		parent::tearDown();
	}

}
