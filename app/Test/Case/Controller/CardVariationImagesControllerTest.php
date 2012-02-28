<?php
/* CardVariationImages Test cases generated on: 2012-02-26 08:47:09 : 1330246029*/
App::uses('CardVariationImagesController', 'Controller');

/**
 * TestCardVariationImagesController *
 */
class TestCardVariationImagesController extends CardVariationImagesController {
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
 * CardVariationImagesController Test Case
 *
 */
class CardVariationImagesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_variation_image', 'app.card_variation', 'app.variation', 'app.set_info', 'app.set_wiki_info', 'app.brand', 'app.acc_catalog', 'app.card', 'app.card_wiki_info', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player', 'app.rear_img', 'app.front_img');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardVariationImages = new TestCardVariationImagesController();
		$this->CardVariationImages->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardVariationImages);

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