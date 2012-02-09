<?php
/* CardPlayers Test cases generated on: 2012-02-06 17:19:15 : 1328573955*/
App::uses('CardPlayersController', 'Controller');

/**
 * TestCardPlayersController *
 */
class TestCardPlayersController extends CardPlayersController {
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
 * CardPlayersController Test Case
 *
 */
class CardPlayersControllerTestCase extends CakeTestCase {
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

		$this->CardPlayers = new TestCardPlayersController();
		$this->CardPlayers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardPlayers);

		parent::tearDown();
	}

}
