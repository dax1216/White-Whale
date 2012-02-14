<?php
/* Players Test cases generated on: 2012-02-13 18:25:05 : 1329182705*/
App::uses('PlayersController', 'Controller');

/**
 * TestPlayersController *
 */
class TestPlayersController extends PlayersController {
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
 * PlayersController Test Case
 *
 */
class PlayersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.player', 'app.card', 'app.set_info', 'app.set_wiki_info', 'app.brand', 'app.acc_catalog', 'app.card_wiki_info', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.card_variation', 'app.card_variation_type', 'app.user_card', 'app.user', 'app.grade_type', 'app.grade_value', 'app.watch', 'app.offer', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Players = new TestPlayersController();
		$this->Players->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Players);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
