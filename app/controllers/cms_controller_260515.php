<?php
class CmsController extends AppController {

	var $name     = 'Cms';
	var $helpers = array('Html', 'Form','Javascript','Fck','Common','Ajax');
	var $components  = array('Snoopy','Captcha');  
	var $uses     = array('Cm','CourseEnquiry');
	

function content()
{
	$url = $this->params['url']['url'];
	
	$cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
	if($cms['Cm']['parent_id']==2)
		$this->layout = "about_layout";
	else if($cms['Cm']['parent_id']==5)
		$this->layout = "international_sub_layout";
	//echo $layout;
	$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
	$this->set('meta_description',$cms['Cm']['meta_desc']);
	$this->set('meta_title',$cms['Cm']['meta_title']);
	$this->set('page_title',$cms['Cm']['page_title']);
 	$this->set('page_content',$cms['Cm']['page_content']);
    $this->set('url',$url);
}


function home()
{
	$this->layout = 'home';
	$url = $this->params['url']['url'];
	$cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>'home')));
	$this->set('page_title',$cms['Cm']['page_title']);
	$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
	$this->set('meta_description',$cms['Cm']['meta_desc']);
	$this->set('meta_title',$cms['Cm']['meta_title']);

 	$this->set('page_content',$cms['Cm']['page_content']);
}

function pages($id) 
{
 	$this->layout = 'subpage';
	$cms = $this->Cm->find('first',array('conditions'=>array('id'=>$id)));
 
	$this->set('cms',$cms);
	$this->set('page_title',$cms['Cm']['page_title']);
	$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
	$this->set('meta_description',$cms['Cm']['meta_desc']);
	$this->set('meta_title',$cms['Cm']['meta_title']);
	$this->set('page_content',$cms['Cm']['page_content']);
	
}
function international()
{
	$this->layout = 'international_layout';
	$url = $this->params['url']['url'];
	$cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
	$this->set('page_title',$cms['Cm']['page_title']);
	$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
	$this->set('meta_description',$cms['Cm']['meta_desc']);
	$this->set('meta_title',$cms['Cm']['meta_title']); 

 	$this->set('page_content',$cms['Cm']['page_content']);
        
        // Get courses details from smsihna
        $db = ConnectionManager::getDataSource("smsihna");
        /*$qry = " SELECT DISTINCT c.* FROM courses c "
                               . " INNER JOIN course_student_types cst"
                               . " INNER JOIN student_types st "
                               . " ON c.id = cst.course_id "
                               . " AND cst.student_type_id = st.id "
                               . " AND st.name = 'International' "
                               . " AND st.status = 1 ";*/
            $qry = " SELECT c.id as course_id, c.course_name, cc.id as category_id, co.id as overview_id, co.student_type_id, co.thumb, ot.id as title_id, ot.title  
                     FROM courses c 
                     INNER JOIN course_categories cc  
                     INNER JOIN course_overviews co  
                     INNER JOIN overview_titles ot 
                     ON c.course_category_id = cc.id 
                     AND c.id = co.course_id 
                     AND ot.id = 1
                     AND co.overview_title_id = 1 
                     AND co.featured = 1 
                     AND co.student_type_id = 1 ";        
        $result = $db->query($qry);
        $this->set('courses',$result);


}
function ihnacourses()
{
	$this->layout = 'ihnacourses';
	$url = $this->params['url']['url'];
	$cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
	$this->set('page_title',$cms['Cm']['page_title']);
	$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
	$this->set('meta_description',$cms['Cm']['meta_desc']);
	$this->set('meta_title',$cms['Cm']['meta_title']); 

 	$this->set('page_content',$cms['Cm']['page_content']);
        
        // Get featured courses details from smsihna
        $db = ConnectionManager::getDataSource("smsihna");
        /*$qry = " SELECT DISTINCT c.* FROM courses c "
                               . " INNER JOIN course_student_types cst"
                               . " INNER JOIN student_types st "
                               . " ON c.id = cst.course_id "
                               . " AND cst.student_type_id = st.id "
                               . " AND c.featured = 1 "
                               . " AND st.name = 'Domestic' "
                               . " AND st.status = 1 ";*/
            $qry = " SELECT c.id as course_id, c.course_name, cc.id as category_id, co.id as overview_id, co.student_type_id, co.thumb, ot.id as title_id, ot.title  
                     FROM courses c 
                     INNER JOIN course_categories cc  
                     INNER JOIN course_overviews co  
                     INNER JOIN overview_titles ot 
                     ON c.course_category_id = cc.id 
                     AND c.id = co.course_id 
                     AND ot.id = 1
                     AND co.overview_title_id = 1 
                     AND co.featured = 1 
                     AND co.student_type_id = 0 ";
            //echo $qry;
        $result = $db->query($qry);
        //echo '<pre>';
        //print_r($result);
        $this->set('courses',$result);
        
        // Get course categories with course names 
        $qry = " SELECT c.id, c.course_name, cc.id, cc.title FROM courses c "
                               . " INNER JOIN course_categories cc "
                               . " ON c.course_category_id = cc.id "
                               . " AND cc.enable = 1 "
                               . " AND c.enable = 1 ";
        
        $result = $db->query($qry);
        $links = array();
        
        foreach($result as $row){
            $cnt = count(@$links[$row ['cc'] ['title']]);
            $links[$row ['cc'] ['title']][$cnt]['course_id']  =  $row['c']['id'];
            $links[$row ['cc'] ['title']][$cnt]['course_name']  =  $row['c']['course_name'];
            $links[$row ['cc'] ['title']][$cnt]['cat_id']  =  $row['cc']['id'];
        }
        $this->set('links',$links);
        

}
function students()
{
	$this->layout = 'students';
	$url = $this->params['url']['url'];
	$cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
	$this->set('page_title',$cms['Cm']['page_title']);
	$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
	$this->set('meta_description',$cms['Cm']['meta_desc']);
	$this->set('meta_title',$cms['Cm']['meta_title']); 

 	$this->set('page_content',$cms['Cm']['page_content']);
        
}
function ihna_profile_request()
{               $this->autoRender = false;
                //pr($this->params['form']);
		if (!empty($this->params['form'])) {
        $headers = "From: no-reply@ihna.edu.au" . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        //$to = 'ceo@ihna.edu.au';
        $to = 'ajith@mwttech.com';
        $sub = 'Download Profile';

        //Enquiry

        $data = '<html><body>';
        $data .= '<table width="598" border="0" cellspacing="3" cellpadding="5" style="width: 598px;border: 1px solid #4372CA;">
  <tr>
  <td colspan="2" style="background-color:#4372ca;color:#FFF;">Download Profile</td>
  </tr>
  <tr>
    <td width="82">Name</td>
    <td width="487">' . $this->params['form']['nameTxt'] . '</td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td>' . $this->params['form']['emailTxt'] . '</td>
  </tr><tr>
    <td>Organization</td>
    <td>' . $this->params['form']['orglTxt'] . '</td>
  </tr>' . 
    '<tr>
    <td colspan="2" style="background-color:#4372ca;color:#FFF; font-size: 11px;">&nbsp;Download Profile From ihna.edu.au</td>
  </tr>
</table>';
        $data .= "</body></html>";
        
        mail($to, $sub, $data, $headers);

        $this->redirect(array('controller' => 'cms', 'action' => 'thanks'));
        echo $data;
        
		}
                
}
function thanks()
{
 $this->layout = "about_layout";
}

function contact(){
$this->layout = "about_layout"; 
$this->set('page_title','Contact Us');
}

function enquiry(){
            
        $this->layout = 'course_details';
        $this->set('title','Enquiry'); 
        
        if(@$this->params['form']['final_submit']==1){
            

            $this->params['form']['apply_date'] = date('Y-m-d H:i:s');

            // INSERT QUERY GOES HERE
            $this->CourseEnquiry->create();
            $this->CourseEnquiry->save( $this->params['form'] );
            $ce_id = $this->CourseEnquiry->id;

            // File upload RESUME
            if(@$this->params['form']['resume']['name']!=''){

                $file_name = $this->params['form']['resume']['name'];
                $file_extn = substr($file_name, strrpos($file_name, '.')+1);
                $target_path = ROOT. DS . 'app' . DS .'webroot' . DS . 'apply_course_resume';
                $resume_filename = 'candidate_resume_'.$ce_id.'.'.$file_extn;
                $target_path = $target_path . DS . $resume_filename;
                				

                if (move_uploaded_file($this->params['form']['resume']['tmp_name'], $target_path)){                 
                    // UPDATE QUERY GOES HERE
                    $this->CourseEnquiry->read(null, $ce_id);
                    $this->CourseEnquiry->set('resume_file', $resume_filename);
                    $this->CourseEnquiry->save();
                    
                    chmod($target_path, 0755);
                    
                }
              
            }
            
            // File upload AHPRA
            if(@$this->params['form']['ahpra']['name']!=''){

                $file_name = $this->params['form']['ahpra']['name'];
                $file_extn = substr($file_name, strrpos($file_name, '.')+1);
                $target_path = ROOT. DS . 'app' . DS .'webroot' . DS . 'ahpra_letter';
                $ahpra_filename = 'candidate_ahpra_letter_'.$ce_id.'.'.$file_extn;
                $target_path = $target_path . DS . $ahpra_filename;
                				

                if (move_uploaded_file($this->params['form']['ahpra']['tmp_name'], $target_path)){                 
                    // UPDATE QUERY GOES HERE
                    $this->CourseEnquiry->read(null, $ce_id);
                    $this->CourseEnquiry->set('ahpra_file', $ahpra_filename);
                    $this->CourseEnquiry->save();
                    
                    chmod($target_path, 0755);
                    
                }
              
            }            

            
            // CRM DATA ENTRY GOES HERE

		//$submit_url = "http://ihna-sugarcrm.mwtedu.com.au/index.php?entryPoint=WebToLeadCapture";
                $submit_url = "http://pavanathara.com";
		$submit_vars["first_name"] 				= $this->params['form']['first_name'];
		$submit_vars["last_name"] 				= $this->params['form']['last_name'];
		$submit_vars["phone_work"] 			= $this->params['form']['phone'];
		$submit_vars["phone_mobile"]			= $this->params['form']['mobile'];

		$submit_vars["email1"] 			        	= $this->params['form']['email'];
		$submit_vars["skype_id_c"]              		= $this->params['form']['skype_id'];
		$submit_vars["facebook_id_c"] 			= $this->params['form']['facebook_id'];
		$submit_vars["primary_address_street"] 	= $this->params['form']['address'];
		$submit_vars["primary_address_state"] 	= '';
		$submit_vars["primary_address_country"]	= $this->params['form']['country_name'];
		$submit_vars["campus_c"] 			   	= $this->params['form']['campus_id'];
		$submit_vars["lead_source"] 				= "Web_Site";
		$submit_vars["lead_source_description"]      = "IHNA Website";
		$submit_vars["description"] 			        = '';
			    
		$submit_vars["product_id_c"] 			= $this->params['form']['course_id']; // Should be same as CRM Course ID
		$submit_vars["campaign_id"] 			= "7ef41311-06fa-c6ea-3cf3-52c67466336f";
		$submit_vars["redirect_url"] 			        = "http://www.ihna.edu.au/";
		$submit_vars["assigned_user_id"] 		= 'bae16758-6600-97eb-9600-5194d31b8865';
		$submit_vars["team_id"] 				= "1";
		$submit_vars["team_set_id"] 			= "Global";
		$submit_vars["created_by"] 				= "1";
		$submit_vars["modified_user_id"] 		= "1";
		$res = $this->Snoopy->submit($submit_url,$submit_vars);
                
                
                // MAIL SEND GOES HERE
                    $address =  str_replace("\\r\\n", '<br/>', $this->params['form']['address']);					
                    $msubject = 'IHNA -  Course Online Registration';
                    $mMessage = " Hi ".$this->params['form']['first_name'].' '.$this->params['form']['last_name'].",<br><p>".							
                     " You have successfully enquired for the course :- ".$this->params['form']['course_name']." <br><br>"
            ."Campus: ".$this->params['form']['campus_name']."<br><br>"
            ."Student type: ".$this->params['form']['student_type_name']."<br><br>"
            ."Delivery mode: ".$this->params['form']['mod_of_delivery_name']."<br><br>"
            ."Start Date: ".$this->params['form']['start_date_name']."<br><br>"
                            
                                    ."</p>
                                    <br><br>&nbsp;&nbsp;&nbsp;&nbsp;Thank you for visiting our website http://www.ihna.edu.au and showing interest in our course '".$this->params['form']['course_name']."'<br><br>
                        Regards,<br>
                        Institute of Health and Nursing Australia<br>";

                    $mHeaders = "From: no-reply@ihna.edu.au\r\n";
                    $mHeaders .= "Reply-To: no-reply@ihna.edu.au\r\n";
                    $mHeaders .= "MIME-Version: 1.0\r\n";
                    $mHeaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


                    mail($this->params['form']['email'], $msubject, $mMessage, $mHeaders);

			$headers = "From: enquiry@ihna.edu.au" . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			//$toemail = 'enquiry@ihna.edu.au';
                        $toemail = 'ajith@mwttech.com';
			$subject = 'IHNA Course Application';

			$maildata = '<html><body>';
			$maildata .= '<table width="598" border="0" cellspacing="3" cellpadding="5" 
			style="width: 598px;border: 1px solid #4372CA;">
			<tr>
			<td height="36" colspan="2" align="center" valign="middle" 
			style="background-color:#4372ca;color:#FFF;font-size:21px;">
			<strong>&nbsp;Course Application</strong></td>
			</tr>
			<tr>
			<td width="160">Name</td>
			<td width="407"><strong>' . stripslashes($this->params['form']['first_name']) . "&nbsp;" . stripslashes($this->params['form']['last_name']) . '</strong></td>
			</tr>
			<tr>
			<td>Gender</td>
			<td>' .$this->params['form']['gender'] . '</td>
			</tr>
			<tr>
			<td>Address</td>
			<td>' . nl2br($address) . '</td>
			</tr>
			<tr>
			<td>Country</td>
			<td>' . $this->params['form']['country_name'] . '</td>
			</tr>
			<tr>
			<td>State</td>
			<td>' . $this->params['form']['state'] . '</td>
			</tr>
			<tr>
			<td>Are you an Australian citizen or permanent resident ?</td>
			<td>' . $this->params['form']['aus'] . '</td>
			</tr>                        
			<tr>
			<td width="160">Email</td>
			<td width="407">' . $this->params['form']['email'] . '</td>
			</tr>
			<tr>
			<td>Phone No.</td>
			<td>' . $this->params['form']['phone'] . '</td>
			</tr>
			<tr>
			<td>Mobile</td>
			<td>' . $this->params['form']['mobile'] . '</td>
			</tr>
			<tr>
			<td>Skype Id</td>
			<td>' . $this->params['form']['skype_id'] . '</td>
			</tr>
			<tr>
			<td>Facebook Id</td>
			<td>' . $this->params['form']['facebook_id'] . '</td>
			</tr>
			<tr>
			<td>Enquiry</td>
			<td>' . $this->params['form']['enquiry'] . '</td>
			</tr>                        
			<tr>
			<td colspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="5">
			<tr>
			<td colspan="2" bgcolor="#C4CFFF"><strong>Course Details</strong></td>
			</tr>
			<tr>
			<td width="29%" valign="top" bgcolor="#EBE9E9">Course Applied </td>
			<td width="71%" bgcolor="#EBE9E9">' . $this->params['form']['course_name'] . '</td>
			</tr>
			<tr>
			<td bgcolor="#EBE9E9">Campus</td>
			<td bgcolor="#EBE9E9">' . $this->params['form']['campus_name'] . '</td>
			</tr>
			<tr>
			<td bgcolor="#EBE9E9">Student type</td>
			<td bgcolor="#EBE9E9">' . $this->params['form']['student_type_name'] . '</td>
			</tr>                        
			<tr>
			<td bgcolor="#EBE9E9">Delivery Mode</td>
			<td bgcolor="#EBE9E9">' . $this->params['form']['mod_of_delivery_name'] . '</td>
			</tr>                        
			<tr>
			<td bgcolor="#EBE9E9">Start Date</td>
			<td bgcolor="#EBE9E9">' . $this->params['form']['start_date_name'] . '</td>
			</tr>
			<tr>
			<td bgcolor="#EBE9E9">Resume Link</td>
			<td bgcolor="#EBE9E9"> <a href="https://new.ihna.edu.au/apply_course_resume/'.$resume_filename.'">'.$resume_filename.'</a></td>
			</tr>
			<tr>
			<td bgcolor="#EBE9E9">AHPRA Link</td>
			<td bgcolor="#EBE9E9"> <a href="https://new.ihna.edu.au/ahpra_letter/'.$ahpra_filename.'">'.$ahpra_filename.'</a></td>
			</tr>                        
			</table></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			</table>';			

           $maildata .= "</body></html>";


            mail($toemail, $subject, $maildata, $headers);
                
                
                
                // REDIRECT GOES HERE
                $this->redirect('/applyresponse');  
        }   
        
        $url = $this->params['url']['url'];
        $db = ConnectionManager::getDataSource("smsihna");


        // Get course categories with course names      
        $qry = " SELECT c.id, c.course_name, cc.id, cc.title FROM courses c "
                               . " INNER JOIN course_categories cc "
                               . " ON c.course_category_id = cc.id "
                               . " AND cc.enable = 1 "
                               . " AND c.enable = 1 ";
        
        $result = $db->query($qry);
        $links = array();
        
        foreach($result as $row){
            $cnt = count(@$links[$row ['cc'] ['title']]);
            $links[$row ['cc'] ['title']][$cnt]['c']  =  $row['c']['id'];
            $links[$row ['cc'] ['title']][$cnt]['course_name']  =  $row['c']['course_name'];
            $links[$row ['cc'] ['title']][$cnt]['cat_id']  =  $row['cc']['id'];
        }
        $this->set('links',$links);
        
        
        // Get course id, name
        $qry = "SELECT id, course_name FROM courses WHERE enable = 1"; 
        $result = $db->query($qry);
        $this->set('courses',$result);
        
        // Get campus id, name of a course
        if(@$this->params['form']['course_id']!=''){
            $qry = "SELECT DISTINCT c.id, c.campus_name FROM course_student_types cst "
                    . " INNER JOIN campuses c "
                    . " ON cst.campus_id = c.id "
                    . " AND cst.course_id = {$this->params['form']['course_id']} "
                    . " AND cst.enable = 1 ";
            $result = $db->query($qry);
            $this->set('campuses',$result);
            $this->set('course_id',$this->params['form']['course_id']); 
        }


        // Get student type
        if(@$this->params['form']['campus_id']!='' && @$this->params['form']['course_id']!='' ){
            $qry = "SELECT DISTINCT st.id, st.name FROM course_student_types cst "
                    . " INNER JOIN student_types st "
                    . " ON cst.student_type_id = st.id "
                    . " AND cst.course_id = {$this->params['form']['course_id']} "
                    . " AND cst.enable = 1 "
                    . " AND cst.campus_id = {$this->params['form']['campus_id']} ";
            $result = $db->query($qry);
            $this->set('student_types',$result); 
            $this->set('campus_id',$this->params['form']['campus_id']); 
        } 

        
        // Get mode of delivery
        if(@$this->params['form']['student_type_id']!='' && @$this->params['form']['course_id']!=''){
            $qry = "SELECT DISTINCT md.id, md.name FROM course_student_type_mods cstm "
                    . " INNER JOIN course_student_types cst "
                    . " INNER JOIN mod_of_deliveries md "
                    . " ON cstm.course_student_type_id = cst.id "
                    . " AND cstm.mod_of_delivery_id = md.id "
                    . " AND cst.course_id = {$this->params['form']['course_id']} "
                    . " AND cst.campus_id =  {$this->params['form']['campus_id']} "
                    . " AND cst.student_type_id = {$this->params['form']['student_type_id']} " 
                    . " AND cst.enable = 1 "
                    . " AND cstm.enable = 1 "
                    . " AND md.status = 1 "
                    ;
                    
            $result = $db->query($qry);
            $this->set('delivery',$result);
            $this->set('student_type_id',$this->params['form']['student_type_id']); 
        }
        
        
        // Get start dates
        if(@$this->params['form']['mod_of_delivery_id']!='' && @$this->params['form']['campus_id']!='' && @$this->params['form']['student_type_id']!='' && @$this->params['form']['course_id']!=''){
            $qry = "SELECT DISTINCT csd.id, csd.start_date FROM course_mod_start_dates cmsd "
                    . " INNER JOIN course_start_dates csd "
                    . " INNER JOIN course_student_type_mods cstm "
                    . " INNER JOIN course_student_types cst "
                    . " INNER JOIN mod_of_deliveries md "
                    . " ON cmsd.course_start_date_id = csd.id "
                    . " AND cmsd.course_student_type_mod_id = cstm.id "
                    . " AND cstm.course_student_type_id = cst.id "
                    . " AND cstm.mod_of_delivery_id = md.id "
                    . " AND cst.course_id = {$this->params['form']['course_id']} "
                    . " AND cst.campus_id =  {$this->params['form']['campus_id']} "
                    . " AND cst.student_type_id = {$this->params['form']['student_type_id']} " 
                    . " AND csd.enable = 1 "
                    . " AND cst.enable = 1 "
                    . " AND cstm.enable = 1 "
                    . " AND md.status = 1 "
                    . " AND md.id = {$this->params['form']['mod_of_delivery_id']} "        
                    ;
                    
            $result = $db->query($qry);
            $this->set('start_dates',$result);
            $this->set('mod_of_delivery_id',$this->params['form']['mod_of_delivery_id']); 
        }
        
        // STORE VALUES TO REPOPULATE FORM       
        
        if(@$this->params['form']['start_date_id']!=''){
            $this->set('start_date_id',$this->params['form']['start_date_id']); 
        }
        
        if(@$this->params['form']['first_name']!=''){
            $this->set('first_name',$this->params['form']['first_name']); 
        }
        
        if(@$this->params['form']['last_name']!=''){
            $this->set('last_name',$this->params['form']['last_name']); 
        }
        
        if(@$this->params['form']['gender']!=''){
            $this->set('gender',$this->params['form']['gender']); 
        }
        
        if(@$this->params['form']['address']!=''){
            $this->set('address',$this->params['form']['address']); 
        }
        
        if(@$this->params['form']['country_name']!=''){
            $this->set('country_name',$this->params['form']['country_name']); 
        }
        
        if(@$this->params['form']['state']!=''){
            $this->set('state',$this->params['form']['state']); 
        } 
        
        if(@$this->params['form']['aus']!=''){
            $this->set('aus',$this->params['form']['aus']); 
        }        
        
        if(@$this->params['form']['email']!=''){
            $this->set('email',$this->params['form']['email']); 
        }
        
        if(@$this->params['form']['phone']!=''){
            $this->set('phone',$this->params['form']['phone']); 
        }
        
        if(@$this->params['form']['mobile']!=''){
            $this->set('mobile',$this->params['form']['mobile']); 
        }
        
        if(@$this->params['form']['skype_id']!=''){
            $this->set('skype_id',$this->params['form']['skype_id']); 
        }
        
        if(@$this->params['form']['facebook_id']!=''){
            $this->set('facebook_id',$this->params['form']['facebook_id']); 
        }
        
        if(@$this->params['form']['enquiry']!=''){
            $this->set('enquiry',$this->params['form']['enquiry']); 
        }
        
        if(@$this->params['form']['course_name']!=''){
            $this->set('course_name',$this->params['form']['course_name']); 
        }        
        
        if(@$this->params['form']['campus_name']!=''){
            $this->set('campus_name',$this->params['form']['campus_name']); 
        }
        
        if(@$this->params['form']['student_type_name']!=''){
            $this->set('student_type_name',$this->params['form']['student_type_name']); 
        }        
        
        if(@$this->params['form']['mod_of_delivery_name']!=''){
            $this->set('mod_of_delivery_name',$this->params['form']['mod_of_delivery_name']); 
        }
        
        if(@$this->params['form']['start_date_name']!=''){
            $this->set('start_date_name',$this->params['form']['start_date_name']); 
        }         

}

function quick_enquiry_submit(){
    
    $this->autoRender = false;
    if($this->params['form']['contact_name']!=''){
        
        
        $msg = '<html>
        <head>
          <title>Birthday Reminders for August</title>
          <style type="text/css">
        table{border-collapse:collapse;border-spacing:0}td,th{padding:0}.hidden,[hidden]{display:none!important}.pure-table{border-collapse:collapse;border-spacing:0;empty-cells:show;border:1px solid #cbcbcb}.pure-table caption{color:#000;font:italic 85%/1 arial,sans-serif;padding:1em 0;text-align:center}.pure-table td,.pure-table th{border-left:1px solid #cbcbcb;border-width:0 0 0 1px;font-size:inherit;margin:0;overflow:visible;padding:.5em 1em}.pure-table td:first-child,.pure-table th:first-child{border-left-width:0}.pure-table thead{background-color:#e0e0e0;color:#000;text-align:left;vertical-align:bottom}.pure-table td{background-color:transparent}.pure-table-odd td{background-color:#f2f2f2}.pure-table-striped tr:nth-child(2n-1) td{background-color:#f2f2f2}.pure-table-bordered td{border-bottom:1px solid #cbcbcb}.pure-table-bordered tbody>tr:last-child>td{border-bottom-width:0}.pure-table-horizontal td,.pure-table-horizontal th{border-width:0 0 1px;border-bottom:1px solid #cbcbcb}.pure-table-horizontal tbody>tr:last-child>td{border-bottom-width:0}  
        </style>
        </head>
        <body>';
        $msg .= "<h3>Quick Enquiry</h3>";
        $msg .= "<table class='pure-table'>";
        $msg .= "<tr class='pure-table-odd'><td><b>Name </b></td><td>".$this->params['form']['contact_name']."</td></tr>";
        $msg .= "<tr><td><b>Email </b></td><td>".$this->params['form']['contact_email']."</td></tr>";
        $msg .= "<tr class='pure-table-odd'><td><b>Phone </b></td><td>".$this->params['form']['contact_phone']."</td></tr>";
        $msg .= "<tr><td><b>Enquiry </b></td><td>".$this->params['form']['contact_comment']."</td></tr>";
        $msg .= '</table>';
        $msg .= '</body>
        </html>';

        //$to = 'ajith@mwttech.com,enquiry@mwt.co.in,george@mwtedu.com';
        $to = 'prabhu@ihna.edu.au';
        //$to = 'george@mwtedu.com;kochi@mwt.co.in';
        $subject = 'Quick Enquiry';

        $headers = "From: no-reply@ihna.edu.au\r\n";
        //$headers = "From: ajith@mwttech.com\r\n";
        //$headers = "From: ".$this->params['form']['contact_email']."\r\n";
        $headers  .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        //$headers .= 'From: '.$this->params['form']['contact_email']. "\r\n";
        
        

        mail($to,$subject,$msg,$headers);


    }
    
    return true;
}

function image_gallery()
{
	$url = $this->params['url']['url'];
	
	$cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
	if($cms['Cm']['parent_id']==2)
	$this->layout = "about_layout";
	$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
	$this->set('meta_description',$cms['Cm']['meta_desc']);
	$this->set('meta_title',$cms['Cm']['meta_title']);
	$this->set('page_title',$cms['Cm']['page_title']);
 	$this->set('page_content',$cms['Cm']['page_content']);
}
function video_gallery()
{
	$url = $this->params['url']['url'];
	
	$cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
	if($cms['Cm']['parent_id']==2)
	$this->layout = "about_layout";
	$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
	$this->set('meta_description',$cms['Cm']['meta_desc']);
	$this->set('meta_title',$cms['Cm']['meta_title']);
	$this->set('page_title',$cms['Cm']['page_title']);
 	$this->set('page_content',$cms['Cm']['page_content']);
}
/* added by sreejith */
function error() 
{
    $this->layout = 'error';
	
}
/* added by sreejith */

function contactUs() 
{
  $this->layout = 'subpage';
 	$cms = $this->Cm->find('first',array('conditions'=>array('id'=>4)));
		$this->set('page_title',$cms['Cm']['page_name']);

		$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
		$this->set('meta_description',$cms['Cm']['meta_desc']);
		$this->set('meta_title',$cms['Cm']['meta_title']);
		$this->set('page_content',$cms['Cm']['page_content']);
}	
	
	function validateEnquiryData($post)
	{
	
	$str_err = "";
	//$str_fmsg = "<li>";
	$str_lmsg = "<br>";
	if(strip_tags($post['name']) == "") $str_err.="Please enter name.".$str_lmsg;
	if(strip_tags($post['email']) == "") $str_err.="Please enter email.".$str_lmsg;
	if(strip_tags($post['email'])!= "")
	{
		   if(!$this->checkEmail(strip_tags($post['email'])))
					{
						$str_err.="Please enter a valid email address.".$str_lmsg;
					}
	}
	
	if(strip_tags($post['coursename']) == "") $str_err.="Please select a course.".$str_lmsg;
	if(strip_tags($post['comments']) == "") $str_err.="Please enter your comments.".$str_lmsg;
	if(strip_tags($post['security_code']) == "") $str_err.="Security Code is empty.".$str_lmsg;
	return $str_err;
	}
	function validateRegistrationData($post)
	{
	
	$str_err = "";
	//$str_fmsg = "<li>";
	$str_lmsg = "<br>";
	if(strip_tags($post['name']) == "") $str_err.="Please enter name.".$str_lmsg;
	if(strip_tags($post['designation']) == "") $str_err.="Please enter designation.".$str_lmsg;
	if(strip_tags($post['email']) == "") $str_err.="Please enter email.".$str_lmsg;
	if(strip_tags($post['email'])!= "")
	{
		   if(!$this->checkEmail(strip_tags($post['email'])))
					{
						$str_err.="Please enter a valid email address.".$str_lmsg;
					}
	}
	//if(strip_tags($post['comments']) == "") $str_err.="Please enter your comments.".$str_lmsg;
	if(strip_tags($post['security_code']) == "") $str_err.="Security Code is empty.".$str_lmsg;
	return $str_err;
	}
	function checkEmail($email){
    return filter_var( $email, FILTER_VALIDATE_EMAIL );
}


 

function admin_index() {

	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
		$this->Cm->recursive = 0;
		$this->set('cms', $this->paginate());
	}

	function admin_view($id = null) {
	 	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
	 
		if (!$id) {
		 $this->Session->setFlash(__('Invalid Content. <span class="close"></span>', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('cm', $this->Cm->read(null, $id));
	}
	
	function admin_add() {
		
		$this->layout = 'admin';
	 	$this->checkPermissionAdmin();
		//$this->render('admin_edit');
		$this->data['Cm']['parent_id'] =$this->data['parent_id'];
		if (!empty($this->data)) {
			$this->Cm->create();
			if ($this->Cm->save($this->data)) {
				$this->Session->setFlash(__('The Content has been saved.', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Content could not be saved. Please, try again.', true));
			}
		}
		$pages = $this->Cm->find('all',array('fields'=>array('id','page_title'),'conditions'=>array('Cm.enable'=>1,'Cm.parent_id'=>0)));
		$this->set(compact('pages'));

		
	}
	function checkSubmenuExists($id)
    {
        
        $cms = $this->Cm->find('all',array('conditions'=>array('Cm.parent_id'=>$id)));
        return $cms;
    }
	
	
	function admin_edit($id = null) {
		//echo $id;
		 $this->layout = 'admin';
		 $this->checkPermissionAdmin();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Content. <span class="close"></span>', true));
			$this->redirect(array('action'=>'index'));
		}
		
		if (!empty($this->data)) {
			if ($this->Cm->save($this->data)) {
				$this->Session->setFlash(__('The Content has been saved <span class="close"></span>', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Content could not be saved. Please, try again. <span class="close"></span>', true));
			}
		}
		if (empty($this->data)) {
				
			$this->data = $this->Cm->find('first',array('conditions'=>array('Cm.id'=>$id)));
			//$this->data = $this->Cm->read(null, $id);
			//print_r($this->data);
		
		}
		$pages = $this->Cm->find('all',array('fields'=>array('id','page_title'),'conditions'=>array('Cm.enable'=>1,'Cm.parent_id'=>0)));
		$this->set(compact('pages'));
	}

	function admin_delete($id = null) {
			$this->layout = 'admin';
	 		$this->checkPermissionAdmin();
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Content. <span class="close"></span>', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cm->delete($id)) {
			$this->Session->setFlash(__('Content deleted. <span class="close"></span>', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	
	
	function view($id = null) {
		$testimonial = $this->Testimonial->find('all',array('conditions'=>"Testimonial.enable='1'"));
		$this->set('testimonials', $testimonial);
	}
	


	
	
}
?>
