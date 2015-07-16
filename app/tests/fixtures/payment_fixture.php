<?php
/* Payment Fixture generated on: 2015-06-02 05:24:35 : 1433222675 */
class PaymentFixture extends CakeTestFixture {
	var $name = 'Payment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 60, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'invoice_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'payment_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'student_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'studentid' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'invoice_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'amount' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '20,2'),
		'surcharge' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '20,2', 'comment' => 'Percentage of Surcharge'),
		'total' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '20,2', 'comment' => 'amount + surcharge'),
		'cardtype' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0 - Not Completed, 1 - Completed'),
		'anz_trans_number' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'applydate' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'paymentdate' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'crmentry_confirm' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 1, 'comment' => 'to confirm whether crm entry done or not'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'modified_by_role' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'ip_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'invoice_id' => 1,
			'payment_type_id' => 1,
			'student_name' => 'Lorem ipsum dolor sit amet',
			'studentid' => 'Lorem ipsum dolor sit amet',
			'invoice_number' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'amount' => 1,
			'surcharge' => 1,
			'total' => 1,
			'cardtype' => 'Lorem ip',
			'status' => 1,
			'anz_trans_number' => 'Lorem ipsum dolor sit amet',
			'applydate' => '2015-06-02',
			'paymentdate' => '2015-06-02 05:24:35',
			'crmentry_confirm' => 1,
			'created' => '2015-06-02 05:24:35',
			'modified' => '2015-06-02 05:24:35',
			'modified_by' => 1,
			'modified_by_role' => 1,
			'ip_address' => 'Lorem ipsum do'
		),
	);
}
