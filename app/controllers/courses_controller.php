<?php
class CoursesController extends AppController {

	var $name = 'Courses';
        var $components = array ('Snoopy', 'Misc');
        var $helpers = array ('Common', 'Session');
        var $uses = array('CourseEnquiry','DiscussionForumCategory');
              
      

	function _index() {
		$this->Course->recursive = 0;
		$this->set('courses', $this->paginate());
	}
        
	function index() {
            $this->loadModel('Cm');            
            $this->layout = 'ihnacourses';
            $url = $this->params['url']['url'];
            $cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
            $this->set('page_title',$cms['Cm']['page_title']);
            $this->set('page_content',$cms['Cm']['page_content']);

            // Get featured courses details from smsihna
            $db = ConnectionManager::getDataSource("smsihna");

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
                         AND co.student_type_id = 0 
                         AND c.enable = 1 
                         AND co.web_display = 1 ";
            $result = $db->query($qry);
            $this->set('courses',$result);


            $qry = " SELECT c.id, c.course_name, cc.id, cc.title FROM courses c "
                           . " INNER JOIN course_categories cc "
                           . " INNER JOIN course_overviews co "  
                           . " ON c.course_category_id = cc.id "
                           . " AND c.id = co.course_id "
                           . " AND cc.enable = 1 "
                           . " AND c.enable = 1 "
                           . " AND co.student_type_id = 0 "
                           . " AND co.web_display = 1 "
                           . " AND co.overview_title_id = 1 ";


            $result = $db->query($qry);
            $links = array();

            foreach($result as $row){
                $cnt = count(@$links[$row ['cc'] ['title']]);
                $links[$row ['cc'] ['title']][$cnt]['course_id']  =  $row['c']['id'];
                $links[$row ['cc'] ['title']][$cnt]['course_name']  =  $row['c']['course_name'];
                $links[$row ['cc'] ['title']][$cnt]['cat_id']  =  $row['cc']['id'];
            }
            $this->set('links',$links);

            $meta_title = "IHNA Courses";
            $meta_keyword = "institute of health and nursing Australia , iron program, certificate iii and iv in aged care, health
             services assistance course, health education in Australia, nursing professional development, registered nurse program, professional
              development courses";
            $meta_desc = "The Institute of Health and Nursing Australia (IHNA) is one of best nursing colleges in Australia providing globally recognized health care courses. Call us toll free at 1800 22 52 83 or send an enquiry mail for more details on the healthcare courses offered by IHNA.";

            if($meta_title!=''){
                $this->set('meta_title',$meta_title);
            }

            if($meta_keyword!=''){
                $this->set('meta_keywords',$meta_keyword);
            }

            if($meta_desc!=''){
                $this->set('meta_description',$meta_desc);
            }

            $this->set('type_id',0);
	}
        
	function international() {
            $this->loadModel('Cm');
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
                         AND co.student_type_id = 1 
                         AND c.enable = 1 
                         AND co.web_display = 1 ";        

            $result = $db->query($qry);
            $this->set('courses',$result);


            $meta_title = "IHNA International Courses";
            $meta_keyword = "diploma in nursing(enrolled division 2 nursing), certificate iv in home and community care, certificate iv in aged care, certificate iv in disability, certificate iii in health services assistance , certificate iii  in aged care, international nursing courses, international students, overseas courses";
            $meta_desc = "The Institute of Health and Nursing Australia (IHNA) offers International courses that are available for students across the globe at affordable rates. Call us toll free at 1800 22 52 83 or send an enquiry mail for more details on the healthcare courses offered by IHNA.";

            if($meta_title!=''){
                $this->set('meta_title',$meta_title);
            }

            if($meta_keyword!=''){
                $this->set('meta_keywords',$meta_keyword);
            }

            if($meta_desc!=''){
                $this->set('meta_description',$meta_desc);
            } 

            $this->set('type_id',1);
	}        

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('course', $this->Course->read(null, $id));
	} 
        
	function details() {


        $this->layout = 'course_details';        
        $url = $this->params['url']['url'];
        $db = ConnectionManager::getDataSource("smsihna");
        
        
        
        // SET THE LEADS
        // LAST PARAMETER WOULD BE CAMPAIGN ID
        $tmp1 = explode('/',$url);
        $campaign_id = @$tmp1[count($tmp1)-1];
        switch($campaign_id){
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
        $this->set('lead_src',$lead_src);
        $this->set('lead_desc',$lead_desc);
        

        // URL WITHOUT CAMPAIGN ID
        $url_no_camp = trim(substr($url,0,-1*strlen($campaign_id)-1));
        
        
        // Get details using seo URL else by using course Id and Type Id  
        $qry = " SELECT id, course_id, student_type_id from course_overviews where seo_url = '".trim($url)."' OR seo_url = '".$url_no_camp."'";
        $result = $db->query($qry);
        if(@$result[0]['course_overviews']['course_id']!='' && @$result[0]['course_overviews']['course_id']){
            $course_id = $result[0]['course_overviews']['course_id'];
            $type_id = $result[0]['course_overviews']['student_type_id'];
        }else{
            $tmp = explode('/',$url);
            $course_id = @$tmp[2];
            $type_id = @$tmp[3];
            if($type_id==null){
                $type_id = '0';
            }
        }
        
        //echo $course_id.'---'.$type_id;
        //exit;
     
        
        // COURSE LINKS SHOWN AT BOTTOM 
        $qry = " SELECT c.id, c.course_name, cc.id, cc.title FROM courses c "
                       . " INNER JOIN course_categories cc "
                       . " INNER JOIN course_overviews co "  
                       . " ON c.course_category_id = cc.id "
                       . " AND c.id = co.course_id "
                       . " AND cc.enable = 1 "
                       . " AND c.enable = 1 "
                       . " AND co.student_type_id = $type_id"
                       . " AND co.web_display = 1 "
                       . " AND co.overview_title_id = 1 ";       
        $result = $db->query($qry);
        $links = array();
        foreach($result as $row){
            $cnt = count(@$links[$row ['cc'] ['title']]);
            $links[$row ['cc'] ['title']][$cnt]['course_id']  =  $row['c']['id'];
            $links[$row ['cc'] ['title']][$cnt]['course_name']  =  $row['c']['course_name'];
            $links[$row ['cc'] ['title']][$cnt]['cat_id']  =  $row['cc']['id'];
        }
        $this->set('links',$links);


        if($course_id != null && $type_id != null && is_numeric($course_id) && is_numeric($type_id) ){

            // Get course name
            $qry = " SELECT id, course_name  
                     FROM courses  
                     WHERE id = '".$course_id."' ";      
            $result = $db->query($qry);
            $course_name = $result[0]['courses']['course_name'];
            
            
            // Get course summary and and brochure
            $qry = " SELECT c.id, cc.id, co.id, co.content, co.brochure_link, co.application_form_link, co.meta_title, co.meta_keyword, co.meta_desc, co.sort, ot.id, ot.title , co.old_pd_url  
                     FROM courses c 
                     INNER JOIN course_categories cc  
                     INNER JOIN course_overviews co  
                     INNER JOIN overview_titles ot 
                     ON c.course_category_id = cc.id 
                     AND c.id = co.course_id 
                     AND co.overview_title_id = ot.id 
                     AND c.id = '".$course_id."' 
                     AND co.student_type_id = '".$type_id."' 
                     AND co.overview_title_id = 1 
                    " ;

            $result = $db->query($qry);
            $course_summary = @$result[0]['co']['content'];
            $brochure_link = @$result[0]['co']['brochure_link'];
            $application_link = @$result[0]['co']['application_form_link'];
            $old_pd_url = @$result[0]['co']['old_pd_url'];
            $meta_title = @$result[0]['co']['meta_title'];
            $meta_keyword = @$result[0]['co']['meta_keyword'];
            $meta_desc = @$result[0]['co']['meta_desc'];        
            
            // Get course overviews
            $qry = " SELECT c.id as course_id, cc.id as category_id, co.id as overview_id, co.student_type_id, co.content, ot.id as title_id, ot.title  
                     FROM courses c 
                     INNER JOIN course_categories cc  
                     INNER JOIN course_overviews co  
                     INNER JOIN overview_titles ot 
                     ON c.course_category_id = cc.id 
                     AND c.id = co.course_id 
                     AND co.overview_title_id = ot.id 
                     AND co.enable = 1 
                     AND c.id = '".$course_id."' 
                     AND co.student_type_id = '".$type_id."'
                     ORDER BY co.sort" ;     
            $result = $db->query($qry);
            
            $course_overviews = array();
            foreach($result as $row){
                $cnt = count(@$course_overviews[$row['ot']['title']]);
                // If title not eqal summary
                if($row['ot']['title_id']!='1'){
                    $course_overviews[$row['ot']['title']][$cnt] = $row['co']['content'];
                }
            }
            
            // GET CAMPUS IDS
            $qry = "SELECT id, campus_name FROM campuses";
            $campuses = $db->query($qry);
            
            // GET MODE OF DELIVERIES
            $qry = "SELECT DISTINCT id, name FROM  mod_of_deliveries";
            $mods = $db->query($qry);
            
            $start_result = array();
            $date_table = "<table>";
            
            foreach($mods as $mrow){
                $head = $mrow['mod_of_deliveries']['name']." Delivery"; 
                $head_flag = 0;
                foreach($campuses as $crow){
                
                    
                    if($crow['campuses']['campus_name']!='' && $mrow['mod_of_deliveries']['name']!=''){
                    // GET START DATES
                    $qry = "SELECT DISTINCT csd.id, csd.start_date FROM course_mod_start_dates cmsd "
                            . " INNER JOIN course_start_dates csd "
                            . " INNER JOIN course_student_type_mods cstm "
                            . " INNER JOIN course_student_types cst "
                            . " INNER JOIN mod_of_deliveries md "
                            . " ON cmsd.course_start_date_id = csd.id "
                            . " AND cmsd.course_student_type_mod_id = cstm.id "
                            . " AND cstm.course_student_type_id = cst.id "
                            . " AND cstm.mod_of_delivery_id = md.id "
                            . " AND cst.course_id = $course_id "
                            . " AND cst.campus_id =  {$crow['campuses']['id']} "
                            . " AND cst.student_type_id = $type_id "
                            . " AND csd.enable = 1 "
                            . " AND cst.enable = 1 "
                            . " AND cstm.enable = 1 "
                            . " AND md.status = 1 "
                            . " AND md.id = {$mrow['mod_of_deliveries']['id']} "
                            . " AND csd.start_date >= CURDATE() "
                            . " ORDER BY csd.start_date "        
                            ;

                            $start_result[$mrow['mod_of_deliveries']['name']][$crow['campuses']['campus_name']] = $db->query($qry);
                            if(count($start_result[$mrow['mod_of_deliveries']['name']][$crow['campuses']['campus_name']])){
                                if($head_flag == 0){
                                    $date_table .= "<tr><td><h2>{$head}</h2></td></tr>";
                                    $head_flag = 1;
                                }
                                 
                                 $date_table .= "<tr><td><h3>{$crow['campuses']['campus_name']}</h3></td></tr>";
                                 $date_table .= "<tr><td>";
                                 foreach($start_result[$mrow['mod_of_deliveries']['name']][$crow['campuses']['campus_name']] as $rrow){
                                     $date_table .= "<div style='float: left; padding: 10px; margin-right: 2px; margin-bottom: 3px; border: 1px solid #09F;'>". $this->Misc->commonDateFormat($rrow['csd']['start_date'], 0)."</div>";
                                 }
                                 $date_table .= "</td></tr>";
                            }
                    }
                            
                }
            
            }
            $date_table .= "</table>";
            $this->set('date_table',$date_table);

        }
        
        // Set course name, summary, overview and other meta details
        $this->set('course_name',$course_name);
        $this->set('course_summary',$course_summary);
        $this->set('course_overviews',$course_overviews);
        $this->set('brochure_link',$brochure_link);
        $this->set('application_link',$application_link);
        
                
        $this->set('old_pd_url',$old_pd_url);

        if($meta_title!=''){
            $this->set('meta_title',$meta_title);
        }
        if($meta_keyword!=''){
            $this->set('meta_keywords',$meta_keyword);
        }
        if($meta_desc!=''){
            $this->set('meta_description',$meta_desc);
        }        
        
        // Set the id for apply online button
        $this->set('course_id',$course_id);
        $this->set('type_id',$type_id);
        
        $this->set('title',$course_name);

// FIND THE COURSE COMMENTSS 
        /*
$condtions = array('CourseComment.status'=> 1 , 'CourseComment.courses_id'=>$course_id);
$courseComments = $this->CourseComment->find('all', array('conditions'=>$condtions));      $this->set('courseComments',$courseComments);
*/


$condtions = array('DiscussionForumCategory.status'=> 1 , 'DiscussionForumCategory.course_id'=>$course_id);
		$forumCategories = $this->DiscussionForumCategory->find('list', array('conditions'=>$condtions));
		$this->set(compact('forumCategories'));
 
        
	} 
        
	function applynow($id = null, $type_id = null) {
            
        $this->layout = 'course_details';
        $this->set('title','Apply Now');
        $this->set('type_id',$type_id);  
        
        if(@$this->params['form']['final_submit']==1){

            $this->params['form']['course_id'] = $id;
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
            
        $db = ConnectionManager::getDataSource("smsihna");
        $qry = " SELECT c.id, c.crm_courseid, c.crm_staff_id FROM courses c "
             . " WHERE c.id =  {$id}";              
        $result = $db->query($qry);


		$submit_url = "http://ihna-sugarcrm.mwtedu.com.au/index.php?entryPoint=WebToLeadCapture";
  //$submit_url = "http://pavanathara.com";
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
			    
		//$submit_vars["product_id_c"] 			= $id; // Should be same as CRM Course ID
                
                $submit_vars["product_id_c"] 			= @$result[0]['c']['crm_courseid'];
		$submit_vars["campaign_id"] 			= "7ef41311-06fa-c6ea-3cf3-52c67466336f";
		$submit_vars["redirect_url"] 			        = "http://www.ihna.edu.au/";
		//$submit_vars["assigned_user_id"] 		= 'bae16758-6600-97eb-9600-5194d31b8865';
                $submit_vars["assigned_user_id"] 		= @$result[0]['c']['crm_staff_id'];
		$submit_vars["team_id"] 				= "1";
		$submit_vars["team_set_id"] 			= "Global";
		$submit_vars["created_by"] 				= "1";
		$submit_vars["modified_user_id"] 		= "1";
		$res = $this->Snoopy->submit($submit_url,$submit_vars);
                
                
                // MAIL SEND GOES HERE
                    $address =  str_replace("\\r\\n", '<br/>', $this->params['form']['address']);					
                    $msubject = 'IHNA -  Course Online Registration';
                    $mMessage = " Hi ".$this->params['form']['first_name'].' '.$this->params['form']['last_name'].",<br><p>".							
                     " You have successfully applied for the course :- ".$this->params['form']['course_name']." <br><br>"
            ."Campus: ".$this->params['form']['campus_name']."<br><br>"
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

			$toemail = 'enquiry@ihna.edu.au';
                        //$toemail = 'ajith@mwttech.com';
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
			<td bgcolor="#EBE9E9">Delivery Mode</td>
			<td bgcolor="#EBE9E9">' . $this->params['form']['mod_of_delivery_name'] . '</td>
			</tr>                        
			<tr>
			<td bgcolor="#EBE9E9">Start Date</td>
			<td bgcolor="#EBE9E9">' . $this->params['form']['start_date_name'] . '</td>
			</tr>
			<tr>';
                        
                        if(@$resume_filename!=''){
                            $maildata .=
                            '<td bgcolor="#EBE9E9">Resume Link</td>
                            <td bgcolor="#EBE9E9"> <a href="https://ihna.edu.au/apply_course_resume/'.$resume_filename.'">'.$resume_filename.'</a></td>
                            </tr>';
                        }
                        
                        if(@$ahpra_filename!=''){
                            $maildata .=
                            '<tr>
                            <td bgcolor="#EBE9E9">AHPRA Link</td>
                            <td bgcolor="#EBE9E9"> <a href="https://ihna.edu.au/ahpra_letter/'.$ahpra_filename.'">'.$ahpra_filename.'</a></td>
                            </tr>';   
                        }
                        
			$maildata .=
			'</table></td>
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
            $links[$row ['cc'] ['title']][$cnt]['course_id']  =  $row['c']['id'];
            $links[$row ['cc'] ['title']][$cnt]['course_name']  =  $row['c']['course_name'];
            $links[$row ['cc'] ['title']][$cnt]['cat_id']  =  $row['cc']['id'];
        }
        $this->set('links',$links);
        
        
        // Get course id, name
        $qry = "SELECT id, course_name FROM courses WHERE id = $id"; 
        $result = $db->query($qry);
        $this->set('course_id',$result[0]['courses']['id']);
        $this->set('course_name',$result[0]['courses']['course_name']);
        
        // Get campus id, name of a course
        $qry = "SELECT DISTINCT c.id, c.campus_name FROM course_student_types cst "
                . " INNER JOIN campuses c "
                . " ON cst.campus_id = c.id "
                . " AND cst.course_id = $id "
                . " AND cst.enable = 1 ";
        $result = $db->query($qry);
        $this->set('campuses',$result);

        /* Discarded because the parameter coms from URL */
        /*
        // Get student type
        if(@$this->params['form']['campus_id']!=''){
            $qry = "SELECT DISTINCT st.id, st.name FROM course_student_types cst "
                    . " INNER JOIN student_types st "
                    . " ON cst.student_type_id = st.id "
                    . " AND cst.course_id = $id "
                    . " AND cst.enable = 1 "
                    . " AND cst.campus_id = {$this->params['form']['campus_id']} ";
            $result = $db->query($qry);
            $this->set('student_types',$result);             
        } 
        */
        
        // Get mode of delivery
        if(@$this->params['form']['campus_id']!=''){
            $qry = "SELECT DISTINCT md.id, md.name FROM course_student_type_mods cstm "
                    . " INNER JOIN course_student_types cst "
                    . " INNER JOIN mod_of_deliveries md "
                    . " ON cstm.course_student_type_id = cst.id "
                    . " AND cstm.mod_of_delivery_id = md.id "
                    . " AND cst.course_id = $id "
                    . " AND cst.campus_id =  {$this->params['form']['campus_id']} "
                    . " AND cst.student_type_id = $type_id " 
                    . " AND cst.enable = 1 "
                    . " AND cstm.enable = 1 "
                    . " AND md.status = 1 "
                    ;
                    
            $result = $db->query($qry);
            $this->set('delivery',$result);
            $this->set('campus_id',$this->params['form']['campus_id']); 
        }
        
        
        // Get start dates
        if(@$this->params['form']['mod_of_delivery_id']!='' && @$this->params['form']['campus_id']!=''){
            $qry = "SELECT DISTINCT csd.id, csd.start_date FROM course_mod_start_dates cmsd "
                    . " INNER JOIN course_start_dates csd "
                    . " INNER JOIN course_student_type_mods cstm "
                    . " INNER JOIN course_student_types cst "
                    . " INNER JOIN mod_of_deliveries md "
                    . " ON cmsd.course_start_date_id = csd.id "
                    . " AND cmsd.course_student_type_mod_id = cstm.id "
                    . " AND cstm.course_student_type_id = cst.id "
                    . " AND cstm.mod_of_delivery_id = md.id "
                    . " AND cst.course_id = $id "
                    . " AND cst.campus_id =  {$this->params['form']['campus_id']} "
                    . " AND cst.student_type_id = $type_id " 
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
        
        if(@$this->params['form']['campus_name']!=''){
            $this->set('campus_name',$this->params['form']['campus_name']); 
        }
        
        if(@$this->params['form']['mod_of_delivery_name']!=''){
            $this->set('mod_of_delivery_name',$this->params['form']['mod_of_delivery_name']); 
        }
        
        if(@$this->params['form']['start_date_name']!=''){
            $this->set('start_date_name',$this->params['form']['start_date_name']); 
        }        
        
        $meta_keywords = '';
        if($meta_keywords!=''){
            $this->set('meta_keywords',$meta_keywords);
        }
        
        $meta_description = '';
        if($meta_description!=''){
            $this->set('meta_description',$meta_description);
        }
        
        $meta_title = '';
        if($meta_title!=''){
            $this->set('meta_title',$meta_title);
        }        

        }

	function _add() {
		if (!empty($this->data)) {
			$this->Course->create();
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.', true));
			}
		}
		$courseCategories = $this->Course->CourseCategory->find('list');
		$this->set(compact('courseCategories'));
	}

	function _edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Course->read(null, $id);
		}
		$courseCategories = $this->Course->CourseCategory->find('list');
		$this->set(compact('courseCategories'));
	}

	function _delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for course', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Course->delete($id)) {
			$this->Session->setFlash(__('Course deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Course was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function _admin_index() {
		$this->layout = 'admin';
		$this->checkPermissionAdmin();
		$this->Course->recursive = 0;
		$this->set('courses', $this->paginate());
	}

	function _admin_view($id = null) {
			$this->layout = 'admin';
		$this->checkPermissionAdmin();
		if (!$id) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('course', $this->Course->read(null, $id));
	}

	function _admin_add() {
			$this->layout = 'admin';
		$this->checkPermissionAdmin();
		if (!empty($this->data)) {
			$this->Course->create();
			if ($this->Course->save($this->data)) {
				$id = $this->Course->id;
				$allowed = array('pdf','doc','txt');
				$destination_brochure = realpath('../../app/webroot/uploads/course_brochures/') . '/';
				$brochure_att = $this->data['Course']['brochure_att']['name'];
				$img_type_allowed = array('png', 'gif', 'jpg', 'jpeg', 'bmp' );
				$img_destination =  realpath('../../app/webroot/uploads/course_image/') . '/';
					$destination_application = realpath('../../app/webroot/uploads/course_applications/') . '/';
					$application_att = $this->data['Course']['application_att']['name'];
					$image_att = $this->data['Course']['course_img']['name'];
					if($image_att)
					{
					
					$result1 = $this->Upload->upload($this->data['Course']['course_img'],$img_destination,$id.'_'.$image_att, null,$img_type_allowed);
					$this->Course->save(array('course_image'=>$id.'_'.$image_att));
					}
					if($brochure_att)
					{
					
					$result1 = $this->Upload->upload($this->data['Course']['brochure_att'],$destination_brochure,$id.'_'.$brochure_att, null,$allowed);
					$this->Course->save(array('brochure'=>$id.'_'.$brochure_att));
					}
					if($application_att)
					{
					
					$result1 = $this->Upload->upload($this->data['Course']['application_att'],$destination_application,$id.'_'.$application_att, null,$allowed);
					$this->Course->save(array('application_form'=>$id.'_'.$application_att));
					}
				$this->Session->setFlash(__('The course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.', true));
			}
		}
		$courseCategories = $this->Course->CourseCategory->find('list');
		$this->set(compact('courseCategories'));
	}

	function _admin_edit($id = null) {
			$this->layout = 'admin';
		$this->checkPermissionAdmin();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Course->read(null, $id);
		}
		$courseCategories = $this->Course->CourseCategory->find('list');
		$this->set(compact('courseCategories'));
	}

	function _admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for course', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Course->delete($id)) {
			$this->Session->setFlash(__('Course deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Course was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
	
/* Added By Vinayak */
function calendar($student_type_id=0) {
	   $this->set('page_title', 'Course Calendar');
	   $this->set('student_type_id', $student_type_id);
    $this->layout = 'fullwidth_layout';
}
function monthly_calendar($student_type_id=0, $year=0, $month=0) {
    $this->layout = 'blank';
				$year  = ($year==0 ? date('Y') : $year);
				$month = ($month==0 ? date('n') : $month);
				
	   $this->set('student_type_id', $student_type_id);
	   $this->set('year', $year);
	   $this->set('month', $month);
}
function fullcalendar($student_type_id=0, $year=0, $month=0, $day=0) {
    $this->layout = 'blank';
				
				//$this->autorender = false;
				$year  = ($year==0 ? date('Y') : $year);
				$month = ($month==0 ? date('n') : $month);
				$day   = ($day==0 ? date('d') : $day);
				
				$start_date = "$year-$month-$day";
				
				$this->loadModel('CourseStartDate');
				$this->loadModel('CourseStudentTypeMod');
				$joins = array(array(
								'table' => 'course_mod_start_dates', 
								'alias' => 'CourseModStartDate', 
								'type' => 'inner', 
								'conditions' => 'CourseStartDate.id = CourseModStartDate.course_start_date_id'
				));
				$condtions = array('CourseStartDate.start_date'=>$start_date, 'CourseStartDate.show_in_website'=>1);
				$dates = $this->CourseStartDate->find('all', array('conditions'=>$condtions));
				//echo '<pre>'; print_r($joins); print_r($condtions); print_r($dates);
                                //exit;
				
				$courses = array();
				foreach($dates as $date) {
								foreach($date['CourseModStartDate'] as $CourseModStartDate) {
												$course_student_type_mod_id = $CourseModStartDate['course_student_type_mod_id'];
												$this->CourseStudentTypeMod->recursive = 2;
												$CourseStudentTypeMods = $this->CourseStudentTypeMod->read(null, $course_student_type_mod_id);
												
												if($CourseStudentTypeMods['CourseStudentType']['student_type_id']==$student_type_id) {
																$details = array();
																$details['campus_id']       = $CourseStudentTypeMods['CourseStudentType']['Campus']['id'];
																$details['course_id']       = $CourseStudentTypeMods['CourseStudentType']['Course']['id'];
																$details['student_type_id'] = $CourseStudentTypeMods['CourseStudentType']['student_type_id'];
																$details['course_name']     = $CourseStudentTypeMods['CourseStudentType']['Course']['course_name'];
																$details['normal_hours']    = $CourseStudentTypeMods['CourseStudentType']['Course']['normal_hours'];
																$details['campus_name']     = $CourseStudentTypeMods['CourseStudentType']['Campus']['campus_name'];
																$details['calendar_color']  = ($date['CourseStartDate']['color']!='' ? '#'.$date['CourseStartDate']['color'] : '#C28FF2');
																
																$courses[$details['course_id'].'_'.$details['campus_id']] = $details;
												}
								}
				}
				//print_r($courses); exit;
	   $this->set('courses', $courses);
	   $this->set('start_date', $this->Misc->commonDateFormat($start_date));
	   $this->set('date_check', "$year$month$day");
				$this->render('fullcalendar');
}

function course_url($course_id, $student_type_id=0, $overview_title_id=1) {
	   $this->autorender = false;
				$site_url = WEB_URL;
				
				$this->loadModel('CourseOverview');
				$condtions       = array('CourseOverview.course_id'=>$course_id, 'CourseOverview.student_type_id'=>$student_type_id, 'CourseOverview.overview_title_id'=>$overview_title_id);
				$course_overview = $this->CourseOverview->find('first', array('conditions'=>$condtions));
				if(isset($course_overview['CourseOverview']['seo_url']) && $course_overview['CourseOverview']['seo_url']!='') {
									$site_url .= $course_overview['CourseOverview']['seo_url'];
				} else {
									
                                    if($student_type_id=='1'){
                                        $site_url .= 'courses/details/'.$course_id.'/1';
                                    }else{
                                      $site_url .= 'courses/details/'.$course_id;  
                                    }
				}
				return $site_url;
}


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
    
    function _addcomments(){
        
        $this->autoRender = false;
        
        $comment_data = array();
        $comment_data['courses_id'] = $this->params['form']['courses_id'];
        $comment_data['name'] = $this->params['form']['CommentName'];
        $comment_data['email'] = $this->params['form']['CommentEmail'];
        $comment_data['phone'] = $this->params['form']['CommentPhone'];
        $comment_data['comment'] = $this->params['form']['CommentComment'];
        $comment_data['status'] = 0;
        $comment_data['modified'] = date('Y-m-d H:i:s');
        
        // INSERT QUERY GOES HERE
        $this->CourseComment->create();
        $this->CourseComment->save( $comment_data );
        
        //$this->Session->setFlash(__('Your question is successfully posted. Once it is reviewed by the admin, you will receive a reply for the same.', true));  
        //$this->redirect($this->referer()); 
        
        
        // Email goes here
                        $headers = "From: no-reply@ihna.edu.au" . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			$toemail = 'enquiry@ihna.edu.au';
			$subject = 'IHNA FAQ post from Course page';

			$maildata = '<html><body>';
			$maildata .= '<table width="598" border="0" cellspacing="3" cellpadding="5" 
			style="width: 598px;border: 1px solid #4372CA;">
			<tr>
			<td height="36" colspan="2" align="center" valign="middle" 
			style="background-color:#4372ca;color:#FFF;font-size:21px;">
			<strong>&nbsp;FAQ post from Course page</strong></td>
			</tr>
			<tr>
			<td width="160">Name</td>
			<td width="407"><strong>' . stripslashes($this->params['form']['CommentName']). '</strong></td>
			</tr>
			<tr>
			<td width="160" bgcolor="#EBE9E9">Email</td>
			<td width="407" bgcolor="#EBE9E9">' . $this->params['form']['CommentEmail'] . '</td>
			</tr>
			<tr>
			<td>Phone No.</td>
			<td>' . $this->params['form']['CommentPhone'] . '</td>
			</tr>
			<tr>
			<td width="29%" valign="top" bgcolor="#EBE9E9">Course</td>
			<td width="71%" bgcolor="#EBE9E9">' .  $this->params['form']['course_name'] . '</td>
			</tr>
			<tr>
			<td>Query/Comment</td>
			<td>' . $this->params['form']['CommentComment'] . '</td>
			</tr>                        
			</table>';			

           $maildata .= "</body></html>";

           if($toemail!='enquiry@ihna.edu.au'){
                mail($toemail, $subject, $maildata, $headers); 
           }
            //mail('ajith@mwttech.com,subin.kurian@ihna.edu.au', $subject, $maildata, $headers); 
        
        
        
        
        
        // Now it's Ajax buddy
        
        echo 'Your question is successfully posted. Once it is reviewed by the admin, you will receive a reply for the same.';
        
    }
    
    
	function search_result() {
            
            $this->loadModel('Cm');            
            $this->layout = 'search_result';
            $url = $this->params['url']['url'];
            $cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
            $this->set('page_title',$cms['Cm']['page_title']);
            $this->set('page_content',$cms['Cm']['page_content']);
            
            $this->set('search_key',$this->data['Search']['search_text']);

            // Get featured courses details from smsihna
            $db = ConnectionManager::getDataSource("smsihna");

            $qry = " SELECT c.id as course_id, c.course_name, cc.id as category_id, co.id as overview_id, co.student_type_id, co.thumb, ot.id as title_id, ot.title  
                         FROM courses c 
                         INNER JOIN course_categories cc  
                         INNER JOIN course_overviews co  
                         INNER JOIN overview_titles ot 
                         ON c.course_category_id = cc.id 
                         AND c.id = co.course_id 
                         AND ot.id = 1
                         AND co.overview_title_id = 1 
                         AND c.enable = 1 
                         AND c.course_name LIKE '%{$this->data['Search']['search_text']}%' 
                         AND co.web_display = 1 ";
            $result = $db->query($qry);
            $this->set('courses',$result);


            // DOMESTIC COURSE LINKS
            $qry = " SELECT c.id, c.course_name, cc.id, cc.title FROM courses c "
                           . " INNER JOIN course_categories cc "
                           . " INNER JOIN course_overviews co "  
                           . " ON c.course_category_id = cc.id "
                           . " AND c.id = co.course_id "
                           . " AND cc.enable = 1 "
                           . " AND c.enable = 1 "
                           . " AND co.student_type_id = 0 "
                           . " AND co.web_display = 1 "
                           . " AND co.overview_title_id = 1 ";


            $result = $db->query($qry);
            $links = array();

            foreach($result as $row){
                $cnt = count(@$links[$row ['cc'] ['title']]);
                $links[$row ['cc'] ['title']][$cnt]['course_id']  =  $row['c']['id'];
                $links[$row ['cc'] ['title']][$cnt]['course_name']  =  $row['c']['course_name'];
                $links[$row ['cc'] ['title']][$cnt]['cat_id']  =  $row['cc']['id'];
            }
            $this->set('links',$links);
            
            
            // INTERNATIONAL COURSE LINKS
            $qry = " SELECT c.id, c.course_name, cc.id, cc.title FROM courses c "
                           . " INNER JOIN course_categories cc "
                           . " INNER JOIN course_overviews co "  
                           . " ON c.course_category_id = cc.id "
                           . " AND c.id = co.course_id "
                           . " AND cc.enable = 1 "
                           . " AND c.enable = 1 "
                           . " AND co.student_type_id = 1 "
                           . " AND co.web_display = 1 "
                           . " AND co.overview_title_id = 1 ";


            $result = $db->query($qry);
            $links = array();

            foreach($result as $row){
                $cnt = count(@$links[$row ['cc'] ['title']]);
                $links[$row ['cc'] ['title']][$cnt]['course_id']  =  $row['c']['id'];
                $links[$row ['cc'] ['title']][$cnt]['course_name']  =  $row['c']['course_name'];
                $links[$row ['cc'] ['title']][$cnt]['cat_id']  =  $row['cc']['id'];
            }
            $this->set('linksInternational',$links);            
            

            $meta_title = "IHNA Courses";
            $meta_keyword = "institute of health and nursing Australia , iron program, certificate iii and iv in aged care, health
             services assistance course, health education in Australia, nursing professional development, registered nurse program, professional
              development courses";
            $meta_desc = "The Institute of Health and Nursing Australia (IHNA) is one of best nursing colleges in Australia providing globally recognized health care courses. Call us toll free at 1800 22 52 83 or send an enquiry mail for more details on the healthcare courses offered by IHNA.";

            if($meta_title!=''){
                $this->set('meta_title',$meta_title);
            }

            if($meta_keyword!=''){
                $this->set('meta_keywords',$meta_keyword);
            }

            if($meta_desc!=''){
                $this->set('meta_description',$meta_desc);
            }

            $this->set('type_id',0);
	} 
	
 function fees_and_charges(){
    $this->layout = "ihnacourses";	
	$this->set('page_title','Fees and Charges'); 
	$this->set('meta_keywords','IHNA Fees and Charges');
	$this->set('meta_description','IHNA Fees and Charges');
	$this->set('meta_title','IHNA Fees and Charges'); 
	
            // Get featured courses details from smsihna
            $db = ConnectionManager::getDataSource("smsihna");	
    $qry = " SELECT c.id, c.course_name, cc.id, cc.title FROM courses c "
                           . " INNER JOIN course_categories cc "
                           . " INNER JOIN course_overviews co "  
                           . " ON c.course_category_id = cc.id "
                           . " AND c.id = co.course_id "
                           . " AND cc.enable = 1 "
                           . " AND c.enable = 1 "
                           . " AND co.student_type_id = 0 "
                           . " AND co.web_display = 1 "
                           . " AND co.overview_title_id = 1 ";


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

function elearning(){
    $this->layout = "ihnacourses";	
	$this->set('page_title','IHNA E-learning'); 	
	
            // Get featured courses details from smsihna
            $db = ConnectionManager::getDataSource("smsihna");	
    $qry = " SELECT c.id, c.course_name, cc.id, cc.title FROM courses c "
                           . " INNER JOIN course_categories cc "
                           . " INNER JOIN course_overviews co "  
                           . " ON c.course_category_id = cc.id "
                           . " AND c.id = co.course_id "
                           . " AND cc.enable = 1 "
                           . " AND c.enable = 1 "
                           . " AND co.student_type_id = 0 "
                           . " AND co.web_display = 1 "
                           . " AND co.overview_title_id = 1 ";


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

function category($id = null){
    
    $this->layout = 'about_layout';

    
    // LIST ALL THE COURSES THAT BELONGS TO A CATEGORY
            $db = ConnectionManager::getDataSource("smsihna");    
            $qry = " SELECT c.id, c.course_name, cc.id, cc.title, co.student_type_id FROM courses c "
                           . " INNER JOIN course_categories cc "
                           . " INNER JOIN course_overviews co "  
                           . " ON c.course_category_id = cc.id "
                           . " AND c.id = co.course_id "
                           . " AND cc.enable = 1 "
                           . " AND cc.id = $id"
                           . " AND c.enable = 1 "
                           //. " AND co.student_type_id = 0 "
                           . " AND co.web_display = 1 "
                           . " AND co.overview_title_id = 1 ";


            $result = $db->query($qry);
            
//            echo '<pre>';
//            print_r($result);
//            exit;
            
            $links = array();
            $links1 = array();

            foreach($result as $row){
                
                $cnt = count(@$links[$row ['cc'] ['title']]);
                $cnt1 = count(@$links1[$row ['cc'] ['title']]);
                
                if($row['co']['student_type_id']==0){
                
                    $links[$row ['cc'] ['title']][$cnt]['course_id']  =  $row['c']['id'];
                    $links[$row ['cc'] ['title']][$cnt]['course_name']  =  $row['c']['course_name'];
                    $links[$row ['cc'] ['title']][$cnt]['cat_id']  =  $row['cc']['id'];
                
                
                }elseif($row['co']['student_type_id']==1){
                
                    $links1[$row ['cc'] ['title']][$cnt1]['course_id']  =  $row['c']['id'];
                    $links1[$row ['cc'] ['title']][$cnt1]['course_name']  =  $row['c']['course_name'];
                    $links1[$row ['cc'] ['title']][$cnt1]['cat_id']  =  $row['cc']['id'];
                
                }
                
            }
            
            $this->set('links',$links); 
            $this->set('links1',$links1);
            
            reset($links);
            $first_key = key($links);
            $this->set('page_title', $first_key. ' Courses');
            
            $this->set('type_id',0);
            $this->set('type_id1',1); 
    
}

}