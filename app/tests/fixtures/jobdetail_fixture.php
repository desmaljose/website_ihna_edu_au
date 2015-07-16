<?php
/* Jobdetail Fixture generated on: 2015-06-19 09:38:43 : 1434706723 */
class JobdetailFixture extends CakeTestFixture {
	var $name = 'Jobdetail';

	var $fields = array(
		'jdDetailsId' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'jdJobCategoryId' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'jdJobProviderId' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'jpJobTitle' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpJobLocation' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jdSalary' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'jpJobDescription' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpJobAdvtName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jpJobExpiryDate' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'jpIsActive' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'jpIsFeatureJob' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'jpJobAddDate' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'jdDetailsId', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'jdDetailsId' => 1,
			'jdJobCategoryId' => 1,
			'jdJobProviderId' => 1,
			'jpJobTitle' => 'Lorem ipsum dolor sit amet',
			'jpJobLocation' => 'Lorem ipsum dolor sit amet',
			'jdSalary' => 1,
			'jpJobDescription' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'jpJobAdvtName' => 'Lorem ipsum dolor sit amet',
			'jpJobExpiryDate' => '2015-06-19',
			'jpIsActive' => 1,
			'jpIsFeatureJob' => 1,
			'jpJobAddDate' => '2015-06-19'
		),
	);
}
