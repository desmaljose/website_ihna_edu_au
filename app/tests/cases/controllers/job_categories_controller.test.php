<?php
/* JobCategories Test cases generated on: 2015-06-19 09:57:34 : 1434707854*/
App::import('Controller', 'JobCategories');

class TestJobCategoriesController extends JobCategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobCategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.job_category');

	function startTest() {
		$this->JobCategories =& new TestJobCategoriesController();
		$this->JobCategories->constructClasses();
	}

	function endTest() {
		unset($this->JobCategories);
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
