<?php
/* JobCategory Fixture generated on: 2015-06-19 09:26:11 : 1434705971 */
class JobCategoryFixture extends CakeTestFixture {
	var $name = 'JobCategory';

	var $fields = array(
		'jcCatgId' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'jcCatgHeading' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jcIsActiveCatg' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'jcAddDate' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'jcCatParent' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'jcCatgId', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'jcCatgId' => 1,
			'jcCatgHeading' => 'Lorem ipsum dolor sit amet',
			'jcIsActiveCatg' => 1,
			'jcAddDate' => '2015-06-19 09:26:11',
			'jcCatParent' => 1
		),
	);
}
