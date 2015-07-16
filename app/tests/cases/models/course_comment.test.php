<?php
/* CourseComment Test cases generated on: 2015-06-23 06:10:23 : 1435039823*/
App::import('Model', 'CourseComment');

class CourseCommentTestCase extends CakeTestCase {
	var $fixtures = array('app.course_comment');

	function startTest() {
		$this->CourseComment =& ClassRegistry::init('CourseComment');
	}

	function endTest() {
		unset($this->CourseComment);
		ClassRegistry::flush();
	}

}
