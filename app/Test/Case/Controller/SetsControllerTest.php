<?php
/* Sets Test cases generated on: 2012-02-04 23:35:27 : 1328423727*/
App::uses('SetsController', 'Controller');

/**
 * TestSetsController *
 */
class TestSetsController extends SetsController {
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
 * SetsController Test Case
 *
 */
class SetsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.card', 'app.team', 'app.card_player', 'app.position', 'app.player', 'app.card_variation', 'app.variation', 'app.user_card', 'app.user', 'app.watch', 'app.offer', 'app.grade_type', 'app.grade_value', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Sets = new TestSetsController();
		$this->Sets->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sets);

		parent::tearDown();
	}

}
