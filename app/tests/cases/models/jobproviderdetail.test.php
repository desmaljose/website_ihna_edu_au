<?php
/* Jobproviderdetail Test cases generated on: 2015-06-19 09:19:07 : 1434705547*/
App::import('Model', 'Jobproviderdetail');

class JobproviderdetailTestCase extends CakeTestCase {
	var $fixtures = array('app.jobproviderdetail');

	function startTest() {
		$this->Jobproviderdetail =& ClassRegistry::init('Jobproviderdetail');
	}

	function endTest() {
		unset($this->Jobproviderdetail);
		ClassRegistry::flush();
	}

}
