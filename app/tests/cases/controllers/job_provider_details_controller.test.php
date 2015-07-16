<?php
/* JobProviderDetails Test cases generated on: 2015-06-19 09:56:30 : 1434707790*/
App::import('Controller', 'JobProviderDetails');

class TestJobProviderDetailsController extends JobProviderDetailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobProviderDetailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.job_provider_detail');

	function startTest() {
		$this->JobProviderDetails =& new TestJobProviderDetailsController();
		$this->JobProviderDetails->constructClasses();
	}

	function endTest() {
		unset($this->JobProviderDetails);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
