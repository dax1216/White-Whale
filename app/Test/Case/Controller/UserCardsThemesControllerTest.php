<?php
/* UserCardsThemes Test cases generated on: 2012-02-04 19:11:11 : 1328407871*/
App::uses('UserCardsThemesController', 'Controller');

/**
 * TestUserCardsThemesController *
 */
class TestUserCardsThemesController extends UserCardsThemesController {
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
 * UserCardsThemesController Test Case
 *
 */
class UserCardsThemesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_cards_theme', 'app.theme', 'app.user', 'app.watch', 'app.user_card', 'app.card_variation', 'app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.card_player', 'app.position', 'app.player', 'app.variation', 'app.grade_type', 'app.grade_value', 'app.offer', 'app.qualifier', 'app.user_cards_qualifier');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserCardsThemes = new TestUserCardsThemesController();
		$this->UserCardsThemes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserCardsThemes);

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
