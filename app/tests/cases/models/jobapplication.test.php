<?php
/* Jobapplication Test cases generated on: 2015-06-19 09:43:14 : 1434706994*/
App::import('Model', 'Jobapplication');

class JobapplicationTestCase extends CakeTestCase {
	var $fixtures = array('app.jobapplication', 'app.jobdetail', 'app.jobproviderdetail', 'app.job_category');

	function startTest() {
		$this->Jobapplication =& ClassRegistry::init('Jobapplication');
	}

	function endTest() {
		unset($this->Jobapplication);
		ClassRegistry::flush();
	}

}
