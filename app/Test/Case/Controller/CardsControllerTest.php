<?php
/* Cards Test cases generated on: 2012-02-28 07:17:30 : 1330413450*/
App::uses('CardsController', 'Controller');

/**
 * TestCardsController *
 */
class TestCardsController extends CardsController {
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
 * CardsController Test Case
 *
 */
class CardsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card', 'app.set_info', 'app.set_wiki_info', 'app.brand', 'app.acc_catalog', 'app.card_wiki_info', 'app.franchise_group', 'app.card_player', 'app.position', 'app.player', 'app.card_variation', 'app.variation', 'app.card_variation_image', 'app.image');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Cards = new TestCardsController();
		$this->Cards->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cards);

		parent::tearDown();
	}

}
