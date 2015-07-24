<?php
class CourseStudentType extends AppModel {
	   public $useDbConfig = 'smsihna';
				var $name = 'CourseStudentType';
				var $belongsTo = array(
								'Course' => array(
												'className' => 'Course',
												'foreignKey' => 'course_id',
												'conditions' => '',
												'fields' => '',
												'order' => ''
								),
								'Campus' => array(
												'className' => 'Campus',
												'foreignKey' => 'campus_id',
												'conditions' => '',
												'fields' => '',
												'order' => ''
								)
				);
}
?>