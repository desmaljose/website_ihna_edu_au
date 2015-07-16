<?php
class CourseStudentTypeMod extends AppModel {
	   public $useDbConfig = 'smsihna';
				var $name = 'CourseStudentTypeMod';
				var $belongsTo = array(
								'CourseStudentType' => array(
												'className' => 'CourseStudentType',
												'foreignKey' => 'course_student_type_id',
												'conditions' => '',
												'fields' => '',
												'order' => ''
								)
				);
}
?>