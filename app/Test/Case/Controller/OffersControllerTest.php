<?php
/* Offers Test cases generated on: 2012-02-06 23:49:57 : 1328597397*/
App::uses('OffersController', 'Controller');

/**
 * TestOffersController *
 */
class TestOffersController extends OffersController {
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
 * OffersController Test Case
 *
 */
class OffersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.offer', 'app.user', 'app.watch', 'app.user_card', 'app.card_variation', 'app.card', 'app.set_info', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player', 'app.grade_type', 'app.grade_value', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Offers = new TestOffersController();
		$this->Offers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Offers);

		parent::tearDown();
	}

}
