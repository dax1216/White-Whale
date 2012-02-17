<?php
/* Themes Test cases generated on: 2012-02-15 16:03:31 : 1329347011*/
App::uses('ThemesController', 'Controller');

/**
 * TestThemesController *
 */
class TestThemesController extends ThemesController {
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
 * ThemesController Test Case
 *
 */
class ThemesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.theme', 'app.user', 'app.user_card', 'app.card_variation', 'app.card_variation_type', 'app.card', 'app.set_info', 'app.set_wiki_info', 'app.brand', 'app.acc_catalog', 'app.card_wiki_info', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player', 'app.grade_type', 'app.grade_value', 'app.watch', 'app.offer', 'app.qualifier', 'app.user_cards_qualifier', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Themes = new TestThemesController();
		$this->Themes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Themes);

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
