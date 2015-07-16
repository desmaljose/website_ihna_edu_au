<?php
/* Jobdetail Test cases generated on: 2015-06-19 09:38:43 : 1434706723*/
App::import('Model', 'Jobdetail');

class JobdetailTestCase extends CakeTestCase {
	var $fixtures = array('app.jobdetail', 'app.jobproviderdetail', 'app.job_category');

	function startTest() {
		$this->Jobdetail =& ClassRegistry::init('Jobdetail');
	}

	function endTest() {
		unset($this->Jobdetail);
		ClassRegistry::flush();
	}

}
