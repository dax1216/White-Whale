<?php
/* CardWikiInfo Test cases generated on: 2012-02-13 17:23:45 : 1329179025*/
App::uses('CardWikiInfo', 'Model');

/**
 * CardWikiInfo Test Case
 *
 */
class CardWikiInfoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_wiki_info');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardWikiInfo = ClassRegistry::init('CardWikiInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardWikiInfo);

		parent::tearDown();
	}

}
