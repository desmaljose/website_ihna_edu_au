<?php
class PaymentsController extends AppController {

	var $name = 'Payments';
        var $helpers = array ('Security');
        var $uses = array('Payments');


function pay_online() {
    $this->layout = 'about_layout';
}

function payonlinesubmit() {
    //$this->autoRender = false;

    
    $this->layout = 'about_layout';
    $this->set('title', 'Apply Online :: Process');	
    if(($this->params['form']['emailid'] == '') || ($this->params['form']['inumber'] == '') || ($this->params['form']['vpc_Amount'] == ''))
     {	
             $this->redirect('http://ihna.edu.au/courses/onlinepayerror');
     }
    
    $payonline_data = array();
    $payonline_data['student_name'] = $this->params['form']['cname'];
    $payonline_data['studentid'] = $this->params['form']['cnumber'];
    $payonline_data['invoice_number'] = $this->params['form']['inumber']; 
    $payonline_data['payment_type_id'] = 1;
    $payonline_data['email'] = $this->params['form']['emailid'];
    $payonline_data['amount'] = $this->params['form']['amount'];
    $payonline_data['total'] = $this->params['form']['vpc_Amount'];
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
    $this->Payments->create();
    $this->Payments->save( $payonline_data );
    $pay_id = $this->Payments->id;

    $this->Session->write('__payonlinepayid', $pay_id);

    if(($pay_id == '0')||($pay_id == ''))
    {
            $this->redirect('http://www.ihna.edu.au/courses/onlinepayerror');
    }

    $this->set('userinfo', $pay_id);
    $this->set('payamount', $payonline_data['total']);
    $this->Session->write('__emailid', $payonline_data['email']);
    
}

function paymentonline_do() {		
	$this->layout = 'about_layout';
        $this->set('title', 'Apply Online :: Process');
        $this->set('procees', '1');
        $this->Session->write('_onpay', 'on');  
    }
    
function payonline_success()
{
    
        $this->layout = 'about_layout';
	//echo $$this->Session->read('_onpay');
        
          if($this->Session->read('_onpay')=='on')
		  { 
		    $url_to_parse = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
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
            
            $this->set('version', $this->null2unknown($out["vpc_Version"]) );
            $this->set('command', $this->null2unknown($out["vpc_Command"]) );
            $this->set('merchTxnRef', $this->null2unknown($out["vpc_MerchTxnRef"]) );
            $this->set('merchantID', $this->null2unknown($out["vpc_Merchant"]) );
            $this->set('orderInfo', $this->null2unknown($out["vpc_OrderInfo"]) );
            $this->set('amount', $this->null2unknown($out["vpc_Amount"]) );
            $this->set('txnResponseCode', $this->null2unknown($out["vpc_TxnResponseCode"]) );
            $this->set('txnResponseCodeMsg', $this->getResponseDescription($out["vpc_TxnResponseCode"]) );
            $this->set('message', $this->null2unknown($out["vpc_Message"]) );
            @$this->set('receiptNo', $this->null2unknown($out["vpc_ReceiptNo"]) );
            $this->set('transactionNo', $this->null2unknown($out["vpc_TransactionNo"]) );
            @$this->set('acqResponseCode', $this->null2unknown($out["vpc_AcqResponseCode"]) );
            @$this->set('authorizeID', $this->null2unknown($out["vpc_AuthorizeId"]) );
            $this->set('batchNo', $this->null2unknown($out["vpc_BatchNo"]) );
            @$this->set('cardType', $this->null2unknown($out["vpc_Card"]) );
            

	$checkTrans=0;
	if($this->null2unknown($out["vpc_TransactionNo"])==$this->Session->read('currTransNo'))
	{
		$checkTrans=1;
	}

        $payid=0;
	$payid = $this->Session->read('__payonlinepayid');	
	
  if ($this->null2unknown($out["vpc_TxnResponseCode"]) === '0' &&  $checkTrans=='0')
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
                $this->Payment->save();

                
                $row1 = $this->Payment->find('first',array('conditions'=>array('Payment.id'=>$this->null2unknown($out["vpc_OrderInfo"]))));
		
		$stud_name=$row1['Payment']['student_name'];
		$stud_id=$row1['Payment']['studentid'];
		$inv_num=$row1['Payment']['invoice_number'];
		
		$this->set('inumber',$inv_num);				
		$txnResponseCode = $this->null2unknown($out["vpc_TxnResponseCode"]);
		$this->set('cnumber', $stud_id);
		$this->set('amount', $r_amnt);				

		//$email = "payments@ihna.edu.au";
                $email = "ajith@mwttech.com";		                        
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

		$emailc = $this->Session->read('__emailid');
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
                $this->Session->write('_onpay', 'off');
                $this->Session->write('_oncheck', '1');	

            }


            $errorTxt = "";
            
// Show this page as an error page if vpc_TxnResponseCode equals '7'
            if (@$txnResponseCode == "7" || @$txnResponseCode == "No Value Returned" || @$errorExists) {
                $errorTxt = "Error ";
            }

            $this->set('errorTxt', $errorTxt);
			
			//$this->_security->redirection(LOCAL_URL . 'courses/successpage/');
			
	
		  }
		  else
		  {
                          
                        $this->Session->write('_onpay', 'off');
                        $this->Session->write('_oncheck', '0');	

			  	
		  }
}    


function payonline_success_final()
{
          $this->layout = 'about_layout';
	  $this->set('title', 'Pay Online :: Process');
	  if($this->Session->read('_oncheck')=='0')
	  {
	  	$this->set('onpayval', $this->Session->read('_onpay'));
	  }
          
            @$this->set('trnsCode', $this->params['form']['trnsCode']);
            @$this->set('transMsg', $this->params['form']['transMsg']);
            @$this->set('invNum', $this->params['form']['invNum']);
            @$this->set('candNum', $this->params['form']['candNum']);
            @$this->set('paidamount', $this->params['form']['paidamount']);
          
                  
}

function onlinepayerror(){
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
    
    function addcomments(){
        
        $comment_data = array();
        $comment_data['courses_id'] = $this->params['form']['courses_id'];
        $comment_data['name'] = $this->params['form']['CommentName'];
        $comment_data['email'] = $this->params['form']['CommentEmail'];
        $comment_data['phone'] = $this->params['form']['CommentPhone'];
        $comment_data['comment'] = $this->params['form']['CommentComment'];
        $comment_data['status'] = 0;
        $comment_data['modified'] = date('Y-m-d H:i:s');
        
        // INSERT QUERY GOES HERE
        $this->CourseComments->create();
        $this->CourseComments->save( $comment_data );
        
        $this->Session->setFlash(__('Your question is successfully posted. Once it is reviewed by the admin, you will receive a reply for the same.', true));        

        $this->redirect($this->referer());        
        
    }   

}