<?php
/* UserCards Test cases generated on: 2012-02-08 00:13:43 : 1328685223*/
App::uses('UserCardsController', 'Controller');

/**
 * TestUserCardsController *
 */
class TestUserCardsController extends UserCardsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * UserCardsController Test Case
 *
 */
class UserCardsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_card', 'app.user', 'app.card_variation', 'app.card', 'app.set_info', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player', 'app.grade_type', 'app.grade_value', 'app.watch', 'app.offer', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserCards = new TestUserCardsController();
		$this->UserCards->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserCards);

		parent::tearDown();
	}

}
