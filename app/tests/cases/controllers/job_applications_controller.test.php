<?php
/* JobApplications Test cases generated on: 2015-06-19 10:00:12 : 1434708012*/
App::import('Controller', 'JobApplications');

class TestJobApplicationsController extends JobApplicationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobApplicationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.job_application', 'app.job_detail', 'app.job_provider_detail', 'app.job_category');

	function startTest() {
		$this->JobApplications =& new TestJobApplicationsController();
		$this->JobApplications->constructClasses();
	}

	function endTest() {
		unset($this->JobApplications);
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
