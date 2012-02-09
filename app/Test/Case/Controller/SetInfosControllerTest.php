<?php
/* SetInfos Test cases generated on: 2012-02-08 00:51:52 : 1328687512*/
App::uses('SetInfosController', 'Controller');

/**
 * TestSetInfosController *
 */
class TestSetInfosController extends SetInfosController {
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
 * SetInfosController Test Case
 *
 */
class SetInfosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.set_info', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.card', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player', 'app.card_variation', 'app.user_card', 'app.user', 'app.grade_type', 'app.grade_value', 'app.watch', 'app.offer', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->SetInfos = new TestSetInfosController();
		$this->SetInfos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SetInfos);

		parent::tearDown();
	}

}
