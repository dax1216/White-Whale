<?php
/* OfferImages Test cases generated on: 2012-02-26 08:47:10 : 1330246030*/
App::uses('OfferImagesController', 'Controller');

/**
 * TestOfferImagesController *
 */
class TestOfferImagesController extends OfferImagesController {
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
 * OfferImagesController Test Case
 *
 */
class OfferImagesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.offer_image', 'app.image', 'app.offer', 'app.user', 'app.user_role', 'app.user_card', 'app.card_variation', 'app.variation', 'app.set_info', 'app.set_wiki_info', 'app.brand', 'app.acc_catalog', 'app.card', 'app.card_wiki_info', 'app.team', 'app.franchise', 'app.league', 'app.card_player', 'app.position', 'app.player', 'app.card_variation_image', 'app.rear_img', 'app.front_img', 'app.grade_type', 'app.grade_value', 'app.watch', 'app.mycollection_image', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->OfferImages = new TestOfferImagesController();
		$this->OfferImages->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OfferImages);

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
