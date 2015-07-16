<?php
/* Jobapplication Fixture generated on: 2015-06-19 09:43:14 : 1434706994 */
class JobapplicationFixture extends CakeTestFixture {
	var $name = 'Jobapplication';

	var $fields = array(
		'jaJobAppId' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'jaJobId' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'jaFirstName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jaLastName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jaPhoneNo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jaEmail' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jaCompanyName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jaTitle' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jaTimeInYears' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'jaTimeInMonth' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'jaIsNewToWork' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'jaCoverLetterDesc' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jaCoverLetter' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jaResume' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'jaApplyDate' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'jaJobAppId', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'jaJobAppId' => 1,
			'jaJobId' => 1,
			'jaFirstName' => 'Lorem ipsum dolor sit amet',
			'jaLastName' => 'Lorem ipsum dolor sit amet',
			'jaPhoneNo' => 'Lorem ipsum dolor sit amet',
			'jaEmail' => 'Lorem ipsum dolor sit amet',
			'jaCompanyName' => 'Lorem ipsum dolor sit amet',
			'jaTitle' => 'Lorem ipsum dolor sit amet',
			'jaTimeInYears' => 1,
			'jaTimeInMonth' => 1,
			'jaIsNewToWork' => 1,
			'jaCoverLetterDesc' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'jaCoverLetter' => 'Lorem ipsum dolor sit amet',
			'jaResume' => 'Lorem ipsum dolor sit amet',
			'jaApplyDate' => '2015-06-19'
		),
	);
}
