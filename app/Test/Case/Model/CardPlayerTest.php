<?php
/* CardPlayer Test cases generated on: 2012-02-06 17:19:06 : 1328573946*/
App::uses('CardPlayer', 'Model');

/**
 * CardPlayer Test Case
 *
 */
class CardPlayerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_player', 'app.card', 'app.set_info', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.franchise', 'app.league', 'app.card_variation', 'app.position', 'app.player');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardPlayer = ClassRegistry::init('CardPlayer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardPlayer);

		parent::tearDown();
	}

}
