<?php
class PaymentsController extends AppController {

	var $name = 'Payments';
        var $helpers    = array('Security');
        var $components  = array('Snoopy','RequestHandler');
        //var $uses = array('LocalPayment');

	function _index() {
		$this->Payment->recursive = 0;
		$this->set('payments', $this->paginate());
	}

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid payment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('payment', $this->Payment->read(null, $id));
	}

	function _add() {
		if (!empty($this->data)) {
			$this->Payment->create();
			if ($this->Payment->save($this->data)) {
				$this->Session->setFlash(__('The payment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment could not be saved. Please, try again.', true));
			}
		}
	}

	function _edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid payment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Payment->save($this->data)) {
				$this->Session->setFlash(__('The payment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Payment->read(null, $id);
		}
	}

	function _delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for payment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Payment->delete($id)) {
			$this->Session->setFlash(__('Payment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Payment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
        
function invoice_payment() {
    $this->layout = 'about_layout';
    $this->set('meta_title', 'Invoice payment');
}

function confirm() {
    

    //$this->autoRender = false;
    
    $this->layout = 'about_layout';
    $this->set('meta_title', 'Payment Online :: Process');	
    if(($this->params['form']['emailid'] == '') || ($this->params['form']['inumber'] == '') || ($this->params['form']['vpc_Amount'] == ''))
     {	
             $this->redirect(array('controller'=>'payments','action'=>'error'));
     }
     

    
    $payonline_data = array();
    $payonline_data['student_name'] = $this->params['form']['cname'];
    $payonline_data['studentid'] = $this->params['form']['cnumber'];
    $payonline_data['invoice_number'] = $this->params['form']['inumber']; 
    $payonline_data['payment_type_id'] = 1;
    $payonline_data['email'] = $this->params['form']['emailid'];
    $payonline_data['amount'] = $this->params['form']['amount'];
    $payonline_data['total'] = $this->params['form']['txtFinalAmount'];
    $payonline_data['cardtype'] = $this->params['form']['rdCardType'];
    $payonline_data['applydate'] = date('Y-m-d');


    if($payonline_data['cardtype']=='credit')
    {
            //$payonline_data['surcharge'] = round(floatval($this->params['form']['amount']) * (1.5/100),2);
        $payonline_data['surcharge'] = 1.5; 
    }
    else if($payonline_data['cardtype']=='debit')
    {
            //$payonline_data['surcharge']=0.00;
             $payonline_data['surcharge']= 0;
    }


    // INSERT QUERY GOES HERE
    $this->Payment->create();
    $this->Payment->save( $payonline_data );
    $pay_id = $this->Payment->id;

    //debug($this->Payment->validationErrors);
        
    


    if(($pay_id == '0')||($pay_id == ''))
    {
            $this->redirect(array('controller'=>'payments','action'=>'error'));
    }

    $this->set('userinfo', $pay_id);
    $this->set('payamount', $this->params['form']['vpc_Amount']);


}

function secure_redirect() {		
	$this->layout = 'about_layout';
        $this->set('title', 'Apply Online :: Process');
        $this->set('procees', '1'); 
    }

function success()
{
    
$this->layout = 'about_layout';
        
$req_dump = print_r($_REQUEST, TRUE). "\r\n=========================\r\n";

$fp = fopen('request.log', 'a');
fwrite($fp, $req_dump);
fclose($fp);        


            $url_to_parse = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $parsed_url = parse_url($url_to_parse);

            $url_query = $parsed_url['query'];
            parse_str($url_query, $out);

            $SECURE_SECRET = "FB34B4D4FCFAE2F57190CB240E728B54";

            $vpc_Txn_Secure_Hash = $out["vpc_SecureHash"];
            unset($_GET["vpc_SecureHash"]);

// set a flag to indicate if hash has been validated
            $errorExists = false;

            if (strlen($SECURE_SECRET) > 0 && $out["vpc_TxnResponseCode"] != "7" && $out["vpc_TxnResponseCode"] != "No Value Returned") {

                $md5HashData = $SECURE_SECRET;

                // sort all the incoming vpc response fields and leave out any with no value
                foreach ($_GET as $key => $value) {
                    if ($key != "vpc_SecureHash" or strlen($value) > 0) {
                        $md5HashData .= $value;
                    }
                }


                if (strtoupper($vpc_Txn_Secure_Hash) == strtoupper(md5($md5HashData))) {
                    // Secure Hash validation succeeded, add a data field to be displayed
                    // later.
                    $hashValidated = "<FONT color='#00AA00'><strong>CORRECT</strong></FONT>";
                } else {
                    // Secure Hash validation failed, add a data field to be displayed
                    // later.
                    $hashValidated = "<FONT color='#FF0066'><strong>INVALID HASH</strong></FONT>";
                    $errorExists = true;
                }
            } else {
                // Secure Hash was not validated, add a data field to be displayed later.
                $hashValidated = "<FONT color='orange'><strong>Not Calculated - No 'SECURE_SECRET' present.</strong></FONT>";
            }
            
            @$this->set('version', $this->null2unknown($out["vpc_Version"]) );
            @$this->set('command', $this->null2unknown($out["vpc_Command"]) );
            @$this->set('merchTxnRef', $this->null2unknown($out["vpc_MerchTxnRef"]) );
            @$this->set('merchantID', $this->null2unknown($out["vpc_Merchant"]) );
            @$this->set('orderInfo', $this->null2unknown($out["vpc_OrderInfo"]) );
            @$this->set('amount', $this->null2unknown($out["vpc_Amount"]) );
            @$this->set('txnResponseCode', $this->null2unknown($out["vpc_TxnResponseCode"]) );
            @$this->set('txnResponseCodeMsg', $this->getResponseDescription($out["vpc_TxnResponseCode"]) );
            @$this->set('message', $this->null2unknown($out["vpc_Message"]) );
            @$this->set('receiptNo', $this->null2unknown($out["vpc_ReceiptNo"]) );
            @$this->set('transactionNo', $this->null2unknown($out["vpc_TransactionNo"]) );
            @$this->set('acqResponseCode', $this->null2unknown($out["vpc_AcqResponseCode"]) );
            @$this->set('authorizeID', $this->null2unknown($out["vpc_AuthorizeId"]) );
            @$this->set('batchNo', $this->null2unknown($out["vpc_BatchNo"]) );
            @$this->set('cardType', $this->null2unknown($out["vpc_Card"]) );
            


	$payid = @$out["vpc_OrderInfo"];	
	
  if ($this->null2unknown($out["vpc_TxnResponseCode"]) === '0' &&  $payid!='')
   {	
		
		$info = split('_',$this->null2unknown($out["vpc_OrderInfo"]));
		$amnt = $this->null2unknown($out["vpc_Amount"]);
		$i_amnt = substr($amnt,0,-2);
		$d_amnt = substr($amnt,-2,strlen($amnt));
		$r_amnt = $i_amnt.'.'.$d_amnt;
		
                // UPDATE GOES HERE
                $this->Payment->read(null, $this->null2unknown($out["vpc_OrderInfo"]));
                $this->Payment->set('status', 1);
                $this->Payment->set('anz_trans_number', $this->null2unknown($out["vpc_TransactionNo"]));
                $this->Payment->set('paymentdate', date('Y-m-d') );
                $this->Payment->set('paid_amount', substr($out["vpc_Amount"], 0, -2).'.'.substr($out["vpc_Amount"], -2));
                $this->Payment->save();

                
                $row1 = $this->Payment->find('first',array('conditions'=>array('Payment.id'=>$this->null2unknown($out["vpc_OrderInfo"]))));
		
		$stud_name=$row1['Payment']['student_name'];
		$stud_id=$row1['Payment']['studentid'];
		$inv_num=$row1['Payment']['invoice_number'];
		
		$this->set('inumber',$inv_num);				
		$txnResponseCode = $this->null2unknown($out["vpc_TxnResponseCode"]);
		$this->set('cnumber', $stud_id);
		$this->set('amount', $r_amnt);				

		$email = "payments@ihna.edu.au";
                //$email = "ajith@mwttech.com";		                        
		//$email = "subin.kurian@ihna.edu.au";				
		
		$rsubject = ' Pay Online Done Successfully - Trans No:'.
		$this->null2unknown($out["vpc_TransactionNo"]);
		$rmessage = ' Payment has been submitted using PAY ONLINE option IHNA website.
		<br>Payment Status: '.$this->getResponseDescription($out["vpc_TxnResponseCode"]).
		'<br>Invoice Number: '.$inv_num.
		'<br>Candidate Name: '.$stud_name.
		'<br>Candidate Number: '.$stud_id.
		'<br>Amount:'.$r_amnt.' AUD$ 
		 <br>ANZ Tansaction Number: '. $this->null2unknown($out["vpc_TransactionNo"]).
		'<br>ANZ Tansaction Date: '. date('d-m-Y');
		
		$rheaders = "From: no-reply@ihna.edu.au\r\n";
		$rheaders .= "Reply-To: enquiry@ihna.edu.au\r\n";
		$rheaders .= "MIME-Version: 1.0\r\n";
		$rheaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";				
		
		mail($email, $rsubject, $rmessage, $rheaders);

		$emailc = $row1['Payment']['email'];
                
                $rsubject = ' Pay Online Done Successfully - Trans No:'.
				$this->null2unknown($out["vpc_TransactionNo"]);
                $rmessage = ' Hi, <br>	
				Your Payment is successfully completed.<br> Your ANZ Transaction Number is : '.
				$this->null2unknown($out["vpc_TransactionNo"]).
				'<br> Your payment status will be also available through your student login within 24 hours.
				<br>Regards,<br>
				Institute of Health and Nursing Australia<br>';
				
                $rheaders = "From: no-reply@ihna.edu.au\r\n";
                $rheaders .= "Reply-To: enquiry@ihna.edu.au\r\n";
                $rheaders .= "MIME-Version: 1.0\r\n";
                $rheaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				
                mail($emailc, $rsubject, $rmessage, $rheaders);

                $this->Session->write('currTransNo', $this->null2unknown($out["vpc_TransactionNo"]));


            }


            $errorTxt = "";
            
// Show this page as an error page if vpc_TxnResponseCode equals '7'
            if (@$txnResponseCode == "7" || @$txnResponseCode == "No Value Returned" || @$errorExists) {
                $errorTxt = "Error ";
            }

            $this->set('errorTxt', $errorTxt);
		
	

}    


function success_course()
{
    
$this->layout = 'about_layout';
        
$req_dump = print_r($_REQUEST, TRUE). "\r\n=========================\r\n";
$fp = fopen('request.log', 'a');
fwrite($fp, $req_dump);
fclose($fp);        


            $url_to_parse = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $parsed_url = parse_url($url_to_parse);

            $url_query = @$parsed_url['query'];
            parse_str($url_query, $out);

            $SECURE_SECRET = "FB34B4D4FCFAE2F57190CB240E728B54";

            $vpc_Txn_Secure_Hash = @$out["vpc_SecureHash"];
            unset($_GET["vpc_SecureHash"]);

// set a flag to indicate if hash has been validated
            $errorExists = false;

            if (strlen($SECURE_SECRET) > 0 && @$out["vpc_TxnResponseCode"] != "7" && @$out["vpc_TxnResponseCode"] != "No Value Returned") {

                $md5HashData = $SECURE_SECRET;

                // sort all the incoming vpc response fields and leave out any with no value
                foreach ($_GET as $key => $value) {
                    if ($key != "vpc_SecureHash" or strlen($value) > 0) {
                        $md5HashData .= $value;
                    }
                }


                if (strtoupper($vpc_Txn_Secure_Hash) == strtoupper(md5($md5HashData))) {
                    // Secure Hash validation succeeded, add a data field to be displayed
                    // later.
                    $hashValidated = "<FONT color='#00AA00'><strong>CORRECT</strong></FONT>";
                } else {
                    // Secure Hash validation failed, add a data field to be displayed
                    // later.
                    $hashValidated = "<FONT color='#FF0066'><strong>INVALID HASH</strong></FONT>";
                    $errorExists = true;
                }
            } else {
                // Secure Hash was not validated, add a data field to be displayed later.
                $hashValidated = "<FONT color='orange'><strong>Not Calculated - No 'SECURE_SECRET' present.</strong></FONT>";
            }
            
            @$this->set('version', $this->null2unknown($out["vpc_Version"]) );
            @$this->set('command', $this->null2unknown($out["vpc_Command"]) );
            @$this->set('merchTxnRef', $this->null2unknown($out["vpc_MerchTxnRef"]) );
            @$this->set('merchantID', $this->null2unknown($out["vpc_Merchant"]) );
            @$this->set('orderInfo', $this->null2unknown($out["vpc_OrderInfo"]) );
            @$this->set('amount', $this->null2unknown($out["vpc_Amount"]) );
            @$this->set('txnResponseCode', $this->null2unknown($out["vpc_TxnResponseCode"]) );
            @$this->set('txnResponseCodeMsg', $this->getResponseDescription($out["vpc_TxnResponseCode"]) );
            @$this->set('message', $this->null2unknown($out["vpc_Message"]) );
            @$this->set('receiptNo', $this->null2unknown($out["vpc_ReceiptNo"]) );
            @$this->set('transactionNo', $this->null2unknown($out["vpc_TransactionNo"]) );
            @$this->set('acqResponseCode', $this->null2unknown($out["vpc_AcqResponseCode"]) );
            @$this->set('authorizeID', $this->null2unknown($out["vpc_AuthorizeId"]) );
            @$this->set('batchNo', $this->null2unknown($out["vpc_BatchNo"]) );
            @$this->set('cardType', $this->null2unknown($out["vpc_Card"]) );
            


	$payid = @$out["vpc_OrderInfo"];	
	
  if ($this->null2unknown(@$out["vpc_TxnResponseCode"]) === '0' &&  $payid!='')
   {	
		
		$info = split('_',$this->null2unknown($out["vpc_OrderInfo"]));
		$amnt = $this->null2unknown($out["vpc_Amount"]);
		$i_amnt = substr($amnt,0,-2);
		$d_amnt = substr($amnt,-2,strlen($amnt));
		$r_amnt = $i_amnt.'.'.$d_amnt;
		
                // UPDATE GOES HERE
                $this->LocalPayment->read(null, $this->null2unknown($out["vpc_OrderInfo"]));
                $this->LocalPayment->set('status', 1);
                $this->LocalPayment->set('anz_trans_number', $this->null2unknown($out["vpc_TransactionNo"]));
                $this->LocalPayment->set('paid_amount', substr($out["vpc_Amount"], 0, -2).'.'.substr($out["vpc_Amount"], -2));
                $this->LocalPayment->save();

                
                $row1 = $this->LocalPayment->find('first',array('conditions'=>array('LocalPayment.id'=>$this->null2unknown($out["vpc_OrderInfo"]))));
		
		$stud_name=$row1['LocalPayment']['first_name'];                
                $coursename=$row1['LocalPayment']['courseName'];
                $courseCategory=$row1['LocalPayment']['courseCategoryName'];
                $campusname=$row1['LocalPayment']['courseCampus'];
                $fullname=$row1['LocalPayment']['first_name'];
                $emailid=$row1['LocalPayment']['email'];
                $phonenumber=$row1['LocalPayment']['phone'];
                $startdate=$row1['LocalPayment']['courseStartDate'];
                $courseFees=$row1['LocalPayment']['final_fee'];
                $surcharge=$row1['LocalPayment']['surcharge'];
                $feeType=$row1['LocalPayment']['card_type'];
                $pay_id=$row1['LocalPayment']['id'];
                $course_id=$row1['LocalPayment']['courseId'];
                $do_enrolment = $row1['LocalPayment']['courseMoodleEnable'];
                $mdlcourseid = $row1['LocalPayment']['courseMoodleId']; 
                
                $last_name=$row1['LocalPayment']['last_name'];
                
//                $feeType=4;
//                
                // REQUIRED FOR SENDING THE EMAIL DETAILS
                $feeTypeStr='Online Fees';
                $courseTypeStr='Online';
                
		$txnResponseCode = $this->null2unknown($out["vpc_TxnResponseCode"]);
                
		$this->set('amount', $r_amnt);				

		
                /*
                 * 
                 * EMAIL CUSTOMER PAYMENT DETAILS STARTS HERE
                 * 
                 */
                
                $email = "payments@ihna.edu.au";
                //$email = "ajith@mwttech.com";		                        
		//$email = "subin.kurian@ihna.edu.au";				
		
		$rsubject = ' Pay Online Done Successfully - Trans No:'.
		$this->null2unknown($out["vpc_TransactionNo"]);

		$emailc = $row1['Payment']['email'];

                $rmessage = ' Hi, <br>	
				Your Payment is successfully completed.<br> Your ANZ Transaction Number is : '.
				$this->null2unknown($out["vpc_TransactionNo"]).
				'<br> Your payment status will be also available through your student login within 24 hours.
				<br>Regards,<br>
				Institute of Health and Nursing Australia<br>';
				
                $rheaders = "From: no-reply@ihna.edu.au\r\n";
                $rheaders .= "Reply-To: enquiry@ihna.edu.au\r\n";
                $rheaders .= "MIME-Version: 1.0\r\n";
                $rheaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				
                mail($emailc, $rsubject, $rmessage, $rheaders);
                
                /*
                 * 
                 * EMAIL CUSTOMER PAYMENT DETAILS ENDS HERE
                 * 
                 */                
                
                
                
                
                /*
                 * 
                 * MOODLE SNOOPPY STARTS HERE
                 * 
                 */


			if($do_enrolment=='1'){
			
			$auto_register = $this->mdl_snoopy($pay_id);
			
			$studentEnrollDetails='';
			
			$enrol = explode('~',$auto_register);
			if($enrol[0]==1){
                            $enrol_password = $enrol[1]	;

                            $studentEnrollDetails = '<br><br>Please check your email for the login credentials to access the course content';
                                
                            $this->LocalPayment->read(null,$pay_id);
                            $this->LocalPayment->set('moodleEnrolStatus', 1);
                            $this->LocalPayment->save();
		
			}
			elseif($enrol[0]==2){
				$studentEnrollDetails='<br><br>Sorry. An error occured while creating the account. Course id not received. Please contact <i>enrolments@ihna.edu.au</i>';
			}
			elseif($enrol[0]==3){
				$studentEnrollDetails='<br><br>Sorry. An error occured while creating the account. Course not available on Moodle. Please contact <i>enrolments@ihna.edu.au</i>';
			}
			elseif($enrol[0]==4){
				$studentEnrollDetails='<br><br>Sorry. An error occured while creating the account. User already exists';
			}
			elseif($enrol[0]==5){
				$studentEnrollDetails='<br><br>Sorry. An error occured while enrolling student into the course.';
			}
			
			$this->set('studentEnrollDetails', $studentEnrollDetails);
		
		
		}

                
                /*
                 * 
                 * MOODLE SNOOPPY ENDS HERE
                 * 
                 */                
                
                

                /*
                 * 
                 * OTHER EMAILS STARTS HERE
                 * 
                 */
                
		$rsubject = 'IHNA - '.$coursename.' Course Registration';
                
		if($courseCategory=='Professional Development' && $campusname == 'Online Course'){
                    $rsubject = 'IHNA - '.$coursename.' Online PD Course Registration';
		}
		
		if($courseCategory=='English Courses' && $campusname == 'Online Course'){
                    $rsubject = 'IHNA - '.$coursename.' Online Course Registration';
		} 
                
                $rmessage = $coursename.' course registration payment has been submitted through IHNA website online payment(ANZ). 				<br>Payment Status: '.$this->getResponseDescription($out["vpc_TxnResponseCode"]).
				'<br><br>Candidate Name: '.$fullname.
                '<br>Email:'.$emailid.
				'<br>Phone:'.$phonenumber.
				'<br>Course Type: '.$courseTypeStr.
				'<br>Campus: '.$campusname.				
                '<br>Start Date: '.$startdate.				
				'<br>Course Fees: '.$courseFees;
		if($surcharge!='0.00')
		{
			$rmessage .='<br>Surcharge: '.$surcharge.'%';
		}
		$rmessage .='<br>Fees Type: '.$feeTypeStr.
		' <br> ANZ Tansaction Number: '. $this->null2unknown($out["vpc_TransactionNo"]);
		$enr_status = ($enrol[0]==1) ? 'Success' : 'Failure';
		$rmessage .='<br> Enrolment Status: '. $enr_status;
			
		$rheaders = "From: no-reply@ihna.edu.au\r\n";
		$rheaders .= "Reply-To: no-reply@ihna.edu.au\r\n";
		$rheaders .= "MIME-Version: 1.0\r\n";
		$rheaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
			
                mail('payments@ihna.edu.au', $rsubject, $rmessage, $rheaders);
                
                if($courseCategory=='Professional Development' && $campusname == 'Online Course'){         
                        mail('onlinepd@ihna.edu.au', $rsubject, $rmessage, $rheaders);  
                }

			
                    if($courseCategory=='English Course'){
			    mail('enquiry@ihna.edu.au', $rsubject, $rmessage, $rheaders);
		    }
			
			
                    if($courseCategory=='Professional Development'){ //Online Professional Development
				
                    if(isset($enrol_password)){ //Enrolment Success
			
                    $fileatt = WEB_URL.DS."uploads".DS."Elearning_Support_Tool_Guide.pdf"; // Path to the file
                    $fileatt_type = "application/pdf"; // File Type
                    $fileatt_name = "elearning_support_tool_manual.pdf"; // Filename that will be used for the file as the attachment

                    $file = fopen($fileatt,'rb');
                    $data = fread($file,filesize($fileatt));
                    fclose($file);
                    $semi_rand = md5(time());
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

                    $rsubject = 'IHNA - '.$coursename.' Online PD Course Registration Successful';

                    $rmessage = 'Dear '.$fullname.', <br><br>Thank you for registering with IHNA&rsquo;s &lsquo;'.$coursename.'&rsquo; course. You have been enrolled to the course successfully. Online access to this course is for one month only from the date of enrolment. Unfortunately we cannot provide extensions as students can easily finish this course within this time.<br><br>We trust you will enjoy this learning experience and gain valuable insight on this topic.<br><br>';
				
                    $rmessage .= 'To access your online e-learning account and course materials, please <a href="http://ihna-portal.mwtedu.com.au/">click here</a> and enter the following details:-<br>&bull;	Username:'.$emailid.'<br>&bull;	Password:'.$enrol_password.'<br><br>Once you are in the portal, you can get access to the course materials via the [My Courses] tab.<br>You can also log in by going to <a href="http://www.ihna.edu.au">www.ihna.edu.au</a> -> MyIHNA -> Student login. Click on the green &ldquo;Login&rdquo; button and then enter your username and password on the page that opens up. Since we are in the middle of changing our learning platforms, you will receive a new set of login details with a change in username when you are logging in for the first time. Please use the new login details next time onwards to login to the platform.<br><br>';

                    $rmessage .= 'If you have any questions or require support, please call us on 1800 22 52 83 and press option 2. For any issues related to e-learning, you may get in touch with our e-learning support team by posting a support request on <a href="http://www.ihna.edu.au/elearning/support/" target="_blank">http://www.ihna.edu.au/elearning/support/</a> or sending an email to <a href="mailto:studentsupport@ihna.edu.au">studentsupport@ihna.edu.au</a>.';
                    $rmessage .='<br><br>Before placing an eLearning support request, please install the eLearning support tool. This tool will enable us to provide you with a better support.<br>';
                    $rmessage .='Please download the attached e-learning Support tool manual for guidance regarding the installation.';

                    $rmessage .= '<br><br>Thanks again for choosing the Institute of Health and Nursing Australia.<br><br>Regards,<br>Institute of Health and Nursing Australia<br>';							
					
					
                    $rmessage .= "This is a multi-part message in MIME format.\n\n" .
                    "--{$mime_boundary}\n" .
                    "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" .
                    $rmessage .= "\n\n";

                    $data = chunk_split(base64_encode($data));

                    $rmessage .= "--{$mime_boundary}\n" .
                    "Content-Type: {$fileatt_type};\n" .
                    " name=\"{$fileatt_name}\"\n" .
                    "Content-Transfer-Encoding: base64\n\n" .

                            $data .= "\n\n" .
                            "--{$mime_boundary}--\n";


                    $headers = "From: no-reply@ihna.edu.au";
                    $headers .= "\nReply-To: no-reply@ihna.edu.au";
                    $headers .= "\nMIME-Version: 1.0";

                    $headers .= "\nContent-Type: multipart/mixed;\n" .
                    " boundary=\"{$mime_boundary}\"";


                    mail($emailid, $rsubject, $rmessage, $headers);
                    mail('dino@ihna.edu.au', $rsubject, $rmessage, $headers);	

                    $rsubject = $fullname. ' enrolled into '.$coursename;

                    $rmessage = 'The following student has been enrolled into e-learning platform.<br><br>
                    <br>Course Name : '.$coursename.
                    '<br>Student Name : '.$fullname.
                    '<br>Start Date : '.$startdate;				

                    $rheaders = "From: no-reply@ihna.edu.au\r\n";
                    $rheaders .= "Reply-To: no-reply@ihna.edu.au\r\n";
                    $rheaders .= "MIME-Version: 1.0\r\n";
                    $rheaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


                    mail('elearningcoordinator@ihna.edu.au', $rsubject, $rmessage, $rheaders);
                    

                    mail('onlinepd@ihna.edu.au', $rsubject, $rmessage, $rheaders);					
			                
                
                
                /*
                 * 
                 * OTHER EMAILS ENDS HERE
                 * 
                 */
                
                

                $this->Session->write('currTransNo', $this->null2unknown($out["vpc_TransactionNo"]));


            }


            $errorTxt = "";
            
// Show this page as an error page if vpc_TxnResponseCode equals '7'
            if (@$txnResponseCode == "7" || @$txnResponseCode == "No Value Returned" || @$errorExists) {
                $errorTxt = "Error ";
            }

            $this->set('errorTxt', $errorTxt);
		
	

} 

}


// ACADEMIC HUB SNOOPY GOES HERE
// TABLES INVOLVED ARE users, user_details, enrolment_details, payments


// Uncomment after testing
//      if ($this->null2unknown(@$out["vpc_TxnResponseCode"]) === '0' &&  $payid!='')
//   {	    

        $submit_url = "http://10.10.30.60/smsihna/users/web_registration";
        
        
        // users TABLE starts here        
        // test entry, just delet this line after testing
        $emailid = 'ajith@pavanathara.com';  
        
        $submit_vars["username"] = $emailid;
        $submit_vars["moodle_userid"] = 0;
        $submit_vars["ip_address"] = $this->RequestHandler->getClientIp();
        // users TABLE ends here
        
        // user_details TABLE starts here
        // 
        // Test entries goes here
        $fullname = 'ajith hard coded';
        $last_name = 'francis hard coded';
        $phonenumber = '123 hard coded';
        
        $submit_vars["first_name"] = $fullname;
        $submit_vars["last_name"] = $last_name;
        $submit_vars["phone1"] = $phonenumber;
        
        // user_details TABLE ends here
        
        
        
        // enrolment_details TABLE starts here
        //
        //  Test entries goes here
        $course_id = '11';
        $course_batch_id = '11';
        $user_id = '232';
        $enrol_status = '1';
        $created = date('Y-m-d H:i:s');
        
        $submit_vars["course_id"] = $course_id;
        $submit_vars["course_batch_id"] = $course_batch_id;
        $submit_vars["user_id"] = $user_id;
        $submit_vars["enrol_status"] = $enrol_status;
        $submit_vars["created"] = $created;
        


        
        
        $this->Snoopy->submit($submit_url,$submit_vars);
        
  
        // Uncomment after testing
  // }
    
// ACADEMIC HUB SNOOPY END HERE

            }



function success_message()
{
          $this->layout = 'about_layout';
	  $this->set('title', 'Pay Online :: Process');
          
            @$this->set('trnsCode', $this->params['form']['trnsCode']);
            @$this->set('transMsg', $this->params['form']['transMsg']);
            @$this->set('invNum', $this->params['form']['invNum']);
            @$this->set('candNum', $this->params['form']['candNum']);
            @$this->set('paidamount', $this->params['form']['paidamount']);
          
                  
}

function success_course_message()
{

          $this->layout = 'about_layout';
	  $this->set('title', 'Pay Online :: Process');
          
            @$this->set('trnsCode', $this->params['form']['trnsCode']);
            @$this->set('transMsg', $this->params['form']['transMsg']);
            @$this->set('paidamount', $this->params['form']['paidamount']);
          
                  
}

function error(){
    $this->layout = 'about_layout';
}

function getResponseDescription($responseCode) {

    switch ($responseCode) {
        case "0" : $result = "Transaction Successful";
            break;
        case "?" : $result = "Transaction status is unknown";
            break;
        case "1" : $result = "Unknown Error";
            break;
        case "2" : $result = "Bank Declined Transaction";
            break;
        case "3" : $result = "No Reply from Bank";
            break;
        case "4" : $result = "Expired Card";
            break;
        case "5" : $result = "Insufficient funds";
            break;
        case "6" : $result = "Error Communicating with Bank";
            break;
        case "7" : $result = "Payment Server System Error";
            break;
        case "8" : $result = "Transaction Type Not Supported";
            break;
        case "9" : $result = "Bank declined transaction (Do not contact Bank)";
            break;
        case "A" : $result = "Transaction Aborted";
            break;
        case "C" : $result = "Transaction Cancelled";
            break;
        case "D" : $result = "Deferred transaction has been received and is awaiting processing";
            break;
        case "F" : $result = "3D Secure Authentication failed";
            break;
        case "I" : $result = "Card Security Code verification failed";
            break;
        case "L" : $result = "Shopping Transaction Locked (Please try the transaction again later)";
            break;
        case "N" : $result = "Cardholder is not enrolled in Authentication scheme";
            break;
        case "P" : $result = "Transaction has been received by the Payment Adaptor and is being processed";
            break;
        case "R" : $result = "Transaction was not processed - Reached limit of retry attempts allowed";
            break;
        case "S" : $result = "Duplicate SessionID (OrderInfo)";
            break;
        case "T" : $result = "Address Verification Failed";
            break;
        case "U" : $result = "Card Security Code Failed";
            break;
        case "V" : $result = "Address Verification and Card Security Code Failed";
            break;
        default : $result = "Unable to be determined";
    }
    return $result;
}

function null2unknown($data) {
    if ($data == "") {
        return "No Value Returned";
    } else {
        return $data;
    }
}        
        


function course_payment($id=null, $type = null)
{
    
        $this->layout = 'about_layout';
        $db = ConnectionManager::getDataSource("smsihna");
        $qry = " SELECT c.id, c.course_name, c.course_fees, cc.title, cp.moodle_courseid, cp.moodle_enable FROM courses c "
                . " INNER JOIN course_categories cc "
                . " INNER JOIN course_pools cp "
                . " ON c.course_category_id = cc.id "
                . " AND c.course_pool_id = cp.id "
                . " AND c.id =  $id"; 
        


        $result = $db->query($qry);
        if($result[0]['c']['course_fees']==''){
            $result[0]['c']['course_fees'] = 0;
        }        
        $this->set('courseId',$result[0]['c']['id']);
        $this->set('courseName',$result[0]['c']['course_name']);
        $this->set('courseFees',$result[0]['c']['course_fees']);
        $this->set('courseCategoryName',$result[0]['cc']['title']);
        $this->set('courseMoodleId',$result[0]['cp']['moodle_courseid']);
        $this->set('courseMoodleEnable',$result[0]['cp']['moodle_enable']);
        $this->set('courseCampus','Online Course');
        $this->set('courseStartDate','Not Applicable');
        $this->set('studentType',$type);
        $this->set('page_title', 'Apply Online :: ' . $result[0]['c']['course_name']);

    
}

function course_payment_register()
{ 
     $this->layout = 'about_layout';

    $this->params['form']['ip'] = $_SERVER['REMOTE_ADDR'];
    if($this->params['form']['card_type'] == 'credit'){
        $this->params['form']['surcharge'] = 1.50;
    }elseif($this->params['form']['card_type'] == 'debit'){
        $this->params['form']['surcharge'] = 0.00;
    }
    // INSERT TO LOCAL WEB GOES HERE
    $this->LocalPayment->create();
    $this->LocalPayment->save( $this->params['form'] );
    $pay_id = $this->LocalPayment->id;
    
    $row = $this->LocalPayment->read(null, $pay_id);
    $vpc_amount = str_replace('.','',$row['LocalPayment']['final_fee']);
    if($vpc_amount=='000'){
        $this->redirect(array('controller'=>'payments','action'=>'onlinepayerror'));
    }
        
    $this->set('pay_id', $pay_id);
    $this->set('vpc_amount', $vpc_amount);
    
}

function onlinepayerror()
{
    $this->layout = 'about_layout';
}


function mdl_snoopy($pid){
        
    $courserow1 = $this->LocalPayment->find('first',array('conditions'=>array('LocalPayment.id'=>$pid)));
    
        if($courserow1 ['LocalPayment']['courseName'] == 'International English Language Testing System') {
                if($courserow1 ['LocalPayment']['fee']=='600')
                {
                        $duration="+6 months";
                }
                elseif($courserow1 ['LocalPayment']['fee']=='400')
                {
                        $duration="+3 months";
                }
                elseif($courserow1 ['LocalPayment']['fee']=='100')
                {
                        $duration="+3 months";
                }
        }else{
                $duration="+1 months";
        }

        $submit_url = "http://ihna-elearning.mwtedu.com.au/mdl_enrolstudent_pay.php";
        $submit_vars["username"] = $courserow1 ['LocalPayment']['email'];
        $submit_vars["firstname"] = $courserow1 ['LocalPayment']['first_name'];
        $submit_vars["lastname"] = $courserow1 ['LocalPayment']['last_name'];
        $submit_vars["email"] = $courserow1 ['LocalPayment']['email'];
        $submit_vars["course"] = $courserow1 ['LocalPayment']['courseMoodleId'];
        $submit_vars["city"] = 'Melbourne';
        $submit_vars["country"] = $courserow1 ['LocalPayment']['country_name'];
        $submit_vars["duration"] = $duration;

        $this->Snoopy->submit($submit_url,$submit_vars);

        return $this->Snoopy->results;

}
        
}
