<?php
/* CardImages Test cases generated on: 2012-02-26 07:57:42 : 1330243062*/
App::uses('CardImages', 'Controller');

/**
 * TestCardImages *
 */
class TestCardImages extends CardImages {
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
 * CardImages Test Case
 *
 */
class CardImagesTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_image_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardImages = new TestCardImages();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardImages);

		parent::tearDown();
	}

}
