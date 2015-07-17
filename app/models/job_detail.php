<?php
class JobDetail extends AppModel {
	var $name = 'JobDetail';
	var $primaryKey = 'jdDetailsId';
	var $displayField = 'jpJobTitle';
	var $validate = array(
		'jdJobCategoryId' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'jdJobProviderId' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'jpJobTitle' => array(
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
		'provider' => array(
			'className' => 'JobProviderDetail',
			'foreignKey' => 'jdJobProviderId',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'category' => array(
			'className' => 'JobCategory',
			'foreignKey' => 'jdJobCategoryId',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
