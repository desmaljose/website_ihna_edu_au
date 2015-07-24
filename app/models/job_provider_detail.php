<?php
class JobProviderDetail extends AppModel {
	var $name = 'JobProviderDetail';
	var $primaryKey = 'jpCompanyId';
	var $displayField = 'jpCompanyName';
	var $validate = array(
		'jpCompanyName' => array(
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
