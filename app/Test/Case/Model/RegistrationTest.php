<?php
App::uses('Registration', 'Model');

/**
 * Registration Test Case
 */
class RegistrationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registration'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Registration = ClassRegistry::init('Registration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Registration);

		parent::tearDown();
	}

}
