<?php
/* JobCategory Test cases generated on: 2015-06-19 09:26:11 : 1434705971*/
App::import('Model', 'JobCategory');

class JobCategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.job_category');

	function startTest() {
		$this->JobCategory =& ClassRegistry::init('JobCategory');
	}

	function endTest() {
		unset($this->JobCategory);
		ClassRegistry::flush();
	}

}
