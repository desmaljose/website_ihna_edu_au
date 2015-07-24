<?php
class PagesController extends AppController {

	var $name     = 'Pages';
	var $helpers = array('Html', 'Form','Javascript','Fck','Common','Ajax');
        var $components  = array('Snoopy'); 
	//var $components  = array('Captcha');  
        var $uses = array();
	

function application_form()
{

    $this->layout = "form_layout";
    //$this->autoRender = false;
}

function quick_application_form()
{
	// $this->layout = "form_layout";
	$this->layout = 'about_layout';
    //$this->autoRender = false;
}

/*
 * Quick enquiry from will create an enquiry in CRM HUB 
 */
function quick_enquiry_form()
{
	// $this->layout = "form_layout";
	$this->layout = 'iframe_layout';
    //$this->autoRender = false;
}


function landing($id = null,$lid=null)
{

    if($id==32){
        $this->layout = "landing_iron_layout";
    }else{
        $this->layout = "landing_layout";
    }
    //$this->autoRender = false;
    
    $db = ConnectionManager::getDataSource("smsihna");
    $qry = " SELECT id, course_name FROM courses"
         . " WHERE id =  $id";       
    $result = $db->query($qry);
    
    $this->set('course_id',$result[0]['courses']['id']);
    $this->set('course_name',$result[0]['courses']['course_name']);
    $this->set('lid', $lid);
    
    
}

function landing_submit()
{

    //$this->layout = "landing_layout";
    $this->autoRender = false;
    
   // print_r($this->params['form']);
   //s exit;

		if(($this->params['form']['your_name'] != "")&&($this->params['form']['your_email'] != "")) {	
			
			// Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 
			$name = mysql_real_escape_string($this->params['form']['your_name']);
			$email = mysql_real_escape_string($this->params['form']['your_email']);
			$phone = mysql_real_escape_string($this->params['form']['your_phone']);
			$country = mysql_real_escape_string($this->params['form']['your_country']);
			$campus = mysql_real_escape_string($this->params['form']['your_campus']);
			//$campus ="Not Mentioned";
			$enquiry_message = mysql_real_escape_string($this->params['form']['your_message']);
			$lid = $this->params['form']['lid'];
			$id = $this->params['form']['courseid'];
                  
                        
    $db = ConnectionManager::getDataSource("smsihna");
    $qry = " SELECT * FROM courses"
         . " WHERE id =  {$this->params['form']['courseid']}";       
    $rowdata = $db->query($qry);                        
    
//    echo "<pre>";
//    print_r($rowdata);
//    exit;

		/* Enquery CRM functionality integration. */
		
		/* Changing campus names based on CRM need. */
		if(trim($this->params['form']['your_campus']) == 'Melbourne Campus') {
		    $selectedCampus = 'Heidelberg';
			$assigned_user_id=$rowdata[0]['courses']['crm_staff_id'] ;
		} else if(trim( $this->params['form']['your_campus'] ) == 'Sydney Campus') {
		    $selectedCampus = 'Paramatta';
			$assigned_user_id=$rowdata[0]['courses']['crm_staff_id'] ;
		} else if(trim( $this->params['form']['your_campus'] ) == 'Perth Campus') {
		    $selectedCampus = 'Perth';
			$assigned_user_id=$rowdata[0]['courses']['crm_staff_id'] ;
		} else {
		    $selectedCampus = trim($this->params['form']['your_campus']);
			$assigned_user_id=$rowdata[0]['courses']['crm_staff_id'] ;
		}
		


			$lead_src="Web_Site";
			$lead_desc="IHNA Website";

			if($lid!="")
			{
				switch($lid){
					case 'mcryc2l0':
						$lead_src="Web_Site";
						$lead_desc="IHNA Website";
					break;
					case 'zmniywrz':
						$lead_src="Facebook_Ad";
						$lead_desc="Enquiry through Facebook";
					break;
					case 'z29vz2fkcw':
						$lead_src="Google_Ad";
						$lead_desc="Enquiry through Google ads";
					break;
					// Added for Werribee/Ballarat  ads	
                                        case 'z29vz2fkwb':
                                                $lead_src="Google_Ad";
                                                $lead_desc="Enquiry through Google ads - Werribee";
                                        break;
                                        case 'z29vz2fkbt':
                                                $lead_src="Google_Ad";
                                                $lead_desc="Enquiry through Google ads - Ballarat";
                                        break;										
					case 'zw1hawxjbxa':
						$lead_src="Email";
						$lead_desc="Enquiry through Email campaign";
					break;
					default:
						$lead_src="Web_Site";
						$lead_desc="IHNA Website";
				}
			}
			
		$submit_url = "http://ihna-sugarcrm.mwtedu.com.au/index.php?entryPoint=WebToLeadCapture";
		$submit_vars["last_name"] 				= trim($this->params['form']['your_name']);
		$submit_vars["phone_work"] 				= trim($this->params['form']['your_phone']);
		$submit_vars["email1"] 			        = trim($this->params['form']['your_email']);
		$submit_vars["skype_id_c"]              = '';
		$submit_vars["facebook_id_c"] 			= '';
		$submit_vars["primary_address_state"] 	= '';
		$submit_vars["primary_address_country"] = trim($this->params['form']['your_country']);
		$submit_vars["campus_c"] 			    = $selectedCampus;
		$submit_vars["lead_source"] 			= $lead_src;
		$submit_vars["lead_source_description"] = $lead_desc;
		$submit_vars["description"] 			= trim($this->params['form']['your_message']);
			    
		$submit_vars["product_id_c"] 			= $rowdata[0]['courses']['crm_courseid'];
		$submit_vars["campaign_id"] 			= "10c0e3b8-938e-24b0-65af-52cd02d8ee45";

		$submit_vars["redirect_url"] 			= "http://www.ihna.edu.au/enquireonline/landing/".trim($_POST['courseid'])."/".$rowdata[0]['courses']['heading'];		
		$submit_vars["assigned_user_id"] 		= $assigned_user_id;
		$submit_vars["team_id"] 				= "1";
		$submit_vars["team_set_id"] 			= "Global";
		$submit_vars["created_by"] 				= "1";
		$submit_vars["modified_user_id"] 		= "1";
		$this->Snoopy->submit($submit_url,$submit_vars);
		
		/* End CRM */
		
			$send_to='enquiry@ihna.edu.au,ajith@mwttech.com';

			
			$subject = ' Enquiry submitted successfully';
			$message = ' Dear ' . $name . ',<br><br>Thank you for your enquiry. <br>One of our helpful staff  will  be in touch with you very soon.<br><br>Kind Regards<br>Team at Institute of Health and Nursing Australia.<br><br><br> ---<i>This is an auto generated mail and please do not reply to this mail.</i>---- <br>';
			
			$headers = "From: no-reply@ihna.edu.au\r\n";
			$headers .= "Reply-To: no-reply@ihna.edu.au\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			mail($email, $subject, $message, $headers);
                        mail('ajith@mwttech.com', $subject, $message, $headers);

			
			//$enquiry_email = $send_to;
			$enquiry_email = 'enquiry@ihna.edu.au';

			//$enquiry_email = "subin.kurian@ihna.edu.au";
			$subject = $rowdata[0]['courses']['course_name'] . ' - Online Enquiry From IHNA Adwords Campaign.';
			if($res == 1) {
		        $subject.=' Details has been added to CRM';
		    }
			$message = '<html><body>';
			$message .= '
			<table width="598" align="center" border="0" cellspacing="3" cellpadding="5" style="width: 598px;border: 1px solid #4372CA;">
				<tr>
					<td height="36" colspan="2" align="center" valign="middle" style="background-color:#4372ca;color:#FFF;font-size:21px;">
						<strong>&nbsp;Online Enquiry</strong>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table width="100%" border="0" cellspacing="2" cellpadding="5">
							<tr>
								<td colspan="2" bgcolor="#C4CFFF">
									<strong>Candidate Details</strong>
								</td>
							</tr>
							<tr>
								<td width="29%" valign="top" bgcolor="#EBE9E9">Name</td>
								<td width="71%">' . $name . '</td>
							</tr>	  
							<tr>
								<td valign="top" bgcolor="#EBE9E9">Phone</td>
								<td>' . $phone . '</td>
							</tr>
							<tr>
								<td valign="top" bgcolor="#EBE9E9">E-mail</td>
								<td>' . $email . '</td>
							</tr>
							<tr>
								<td valign="top" bgcolor="#EBE9E9">Country</td>
								<td>' . $country . '</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table width="100%" border="0" cellspacing="2" cellpadding="5">
							<tr>
								<td colspan="2" bgcolor="#C4CFFF">
									<strong>Course Details</strong>
								</td>
							</tr>  
							<tr>
								<td valign="top" bgcolor="#EBE9E9">Course</td>
								<td>' . $rowdata[0]['courses']['course_name'] . '</td>
							</tr>
							<tr>
								<td valign="top" bgcolor="#EBE9E9">Campus</td>
								<td>' . $campus . '</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table width="100%" border="0" cellspacing="2" cellpadding="5">
							<tr>
								<td colspan="2" bgcolor="#C4CFFF">
									<strong>Enquiry Details</strong>
								</td>
							</tr>
							<tr>
								<td colspan="2">' . nl2br($enquiry_message) . '</td>
							</tr>
							<tr>
								<td valign="top" bgcolor="#EBE9E9">Lead Source</td>
								<td>' . $lead_desc . '</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2" align="center" style="background-color:#4372ca;color:#FFF;">www.ihna.edu.au</td>
				</tr>
			</table>';
			$message .= "</body></html>";
			
			$headers = "From: no-reply@ihna.edu.au\r\n";
			$headers.= "Reply-To: no-reply@ihna.edu.au\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			mail($enquiry_email, $subject, $message, $headers);
                        mail('ajith@mwttech.com', $subject, $message, $headers);
                        mail('subin.kurian@ihna.edu.au', $subject, $message, $headers);
                        
                        
	
			
		} 
               
                if($this->params['form']['courseid']==32){
             $this->redirect(array('controller' => 'pages', 'action'=>'landing_iron_success', $lid));
                }else{
                     $this->redirect(array('controller' => 'pages', 'action'=>'landing_success'));
                }
    
    
}


function landing_success()
{
    $this->layout = "landing_success";
}

function landing_iron_success($lid=null)
{
    $this->layout = "landing_iron_success_layout";
    
    $db = ConnectionManager::getDataSource("smsihna");
    $qry = " SELECT id, course_name FROM courses"
         . " WHERE id =  32";       
    $result = $db->query($qry);
    
    $this->set('course_id',$result[0]['courses']['id']);
    $this->set('course_name',$result[0]['courses']['course_name']);
    $this->set('lid', $lid);
    
}


function support_admin()
{
    $this->layout = "";
	
}

function mwt_support()
{
    $this->layout = "";	
	$this->redirect("http://old.ihna.edu.au/helpdesk_mwt.php?email=&ticket=");
	exit;
	
}


function support()
{
    $this->layout = "";
	$this->redirect("http://old.ihna.edu.au/helpdesk.php");
	exit;
}


function front_support($email=null)
{
    $this->layout = "";
	$this->redirect("http://old.ihna.edu.au/helpdesk/frontsupport/".$email);
	exit;
}


function mwtsupport_status($qry_str=null,$qry_str1=null)
{
    $this->layout = "";
	$this->redirect("http://old.ihna.edu.au/helpdesk/mwtsupport_status/".$qry_str."/".$qry_str1);
	exit;
}

function student_complaints()
{
    $this->layout = "students_sub";	
	
}

function clinical_placement_information()
{
    $this->layout = "students_sub";	
	$this->set('page_title','Clinical Placement Information'); 
	//$this->set('page_content','Clinical Placement Information'); 		
}

function vet_fee_help()
{
   $this->layout = "header_footer_layout";
   //$this->set('page_content','Clinical Placement Information'); 		
}

function newsletter()
{
    $this->layout = "students_sub";	
	$this->set('page_title','IHNA Newsletter'); 		
}

function student_testimonials()
{
    $this->layout = "students_sub";	
	$this->set('page_title','Student Testimonials'); 		
}

/*function apply_online()
{
    $this->layout = 'course_details'; 
	$this->set('page_title','Apply Online'); 		
}
*/
function corporate_testimonials()
{
   	$this->layout = 'about_layout'; 
	$this->set('page_title','Corporate Testimonials'); 		
}

function reentry_student_testimonials()
{
    $this->layout = "students_sub";	
	$this->set('page_title','Student Testimonials'); 		
}

function melbourne_campus()
{
    $this->layout = "fullwidth_layout";	
	$this->set('page_title','IHNA Melbourne Campus'); 		
}
function perth_campus()
{
    $this->layout = "fullwidth_layout";	
	$this->set('page_title','IHNA Perth Campus'); 		
}
function sydney_campus()
{
    $this->layout = "fullwidth_layout";	
	$this->set('page_title','IHNA Sydney Campus'); 		
}

}
?>