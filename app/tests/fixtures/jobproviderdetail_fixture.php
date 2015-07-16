<?php
/* Jobproviderdetail Fixture generated on: 2015-06-19 09:19:07 : 1434705547 */
class JobproviderdetailFixture extends CakeTestFixture {
	var $name = 'Jobproviderdetail';

	var $fields = array(
		'jpCompanyId' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'jpCompanyName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpABNNumber' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpCompanyLoc' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpCompanyAddress' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpCompanyEmail' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpCompanyPhone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpContactPerson' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpCompanyLogo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpIsActive' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'jpAddDate' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'jpCompanyId', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'jpCompanyId' => 1,
			'jpCompanyName' => 'Lorem ipsum dolor sit amet',
			'jpABNNumber' => 'Lorem ipsum dolor sit amet',
			'jpCompanyLoc' => 'Lorem ipsum dolor sit amet',
			'jpCompanyAddress' => 'Lorem ipsum dolor sit amet',
			'jpCompanyEmail' => 'Lorem ipsum dolor sit amet',
			'jpCompanyPhone' => 'Lorem ipsum dolor sit amet',
			'jpContactPerson' => 'Lorem ipsum dolor sit amet',
			'jpCompanyLogo' => 'Lorem ipsum dolor sit amet',
			'jpIsActive' => 1,
			'jpAddDate' => '2015-06-19 09:19:07'
		),
	);
}
