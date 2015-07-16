<?php
class JobApplication extends AppModel {
	var $name = 'JobApplication';
	var $primaryKey = 'jaJobAppId';
	var $displayField = 'jaFirstName';
	var $validate = array(
		'jaJobId' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'jaFirstName' => array(
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
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'job' => array(
			'className' => 'JobDetail',
			'foreignKey' => 'jaJobId',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
