<?php
class JobCategory extends AppModel {
	var $name = 'JobCategory';
	var $primaryKey = 'jcCatgId';
	var $displayField = 'jcCatgHeading';
	var $validate = array(
		'jcCatgHeading' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
