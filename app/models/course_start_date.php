<?php
class CourseStartDate extends AppModel {
	   public $useDbConfig = 'smsihna';
				var $name = 'CourseStartDate';
				var $belongsTo = array(
//								'Campus' => array(
//												'className' => 'Campus',
//												'foreignKey' => 'campus_id',
//												'conditions' => '',
//												'fields' => '',
//												'order' => ''
//								),
//								'Course' => array(
//												'className' => 'Course',
//												'foreignKey' => 'course_id',
//												'conditions' => '',
//												'fields' => '',
//												'order' => ''
//								)
				);
				var $hasMany = array(
								'CourseModStartDate' => array(
												'className' => 'CourseModStartDate',
												'foreignKey' => 'course_start_date_id',
												'conditions' => '',
												'fields' => '',
												'order' => ''
								)
				);
}
