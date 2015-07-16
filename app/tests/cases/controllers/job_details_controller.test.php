<?php
/* JobDetails Test cases generated on: 2015-06-19 09:59:32 : 1434707972*/
App::import('Controller', 'JobDetails');

class TestJobDetailsController extends JobDetailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobDetailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.job_detail', 'app.job_provider_detail', 'app.job_category');

	function startTest() {
		$this->JobDetails =& new TestJobDetailsController();
		$this->JobDetails->constructClasses();
	}

	function endTest() {
		unset($this->JobDetails);
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
