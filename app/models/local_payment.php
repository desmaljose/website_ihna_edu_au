<?php
class LocalPayment extends AppModel {
	var $name = 'LocalPayment';
	var $validate = array(
		'fee' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'email' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		)
	);
}
