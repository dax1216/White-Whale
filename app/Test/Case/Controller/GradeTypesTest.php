<?php
/* GradeTypes Test cases generated on: 2012-02-04 19:11:10 : 1328407870*/
App::uses('GradeTypes', 'Controller');

/**
 * TestGradeTypes *
 */
class TestGradeTypes extends GradeTypes {
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
 * GradeTypes Test Case
 *
 */
class GradeTypesTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.comment', 'app.user', 'app.watch', 'app.user_card', 'app.card_variation', 'app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.card_player', 'app.position', 'app.player', 'app.variation', 'app.grade_type', 'app.grade_value', 'app.offer', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->GradeTypes = new TestGradeTypes();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GradeTypes);

		parent::tearDown();
	}

}
