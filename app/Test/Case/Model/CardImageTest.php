<?php
/* CardImage Test cases generated on: 2012-02-26 07:52:46 : 1330242766*/
App::uses('CardImage', 'Model');

/**
 * CardImage Test Case
 *
 */
class CardImageTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_image', 'app.img_type', 'app.image', 'app.offer', 'app.user', 'app.user_role', 'app.user_card', 'app.card_variation', 'app.variation', 'app.set_info', 'app.set_wiki_info', 'app.brand', 'app.acc_catalog', 'app.card', 'app.card_wiki_info', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player', 'app.grade_type', 'app.grade_value', 'app.watch', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme', 'app.rear_img', 'app.front_img');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardImage = ClassRegistry::init('CardImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardImage);

		parent::tearDown();
	}

}
