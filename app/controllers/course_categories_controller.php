<?php
class CourseCategoriesController extends AppController {

	var $name = 'CourseCategories';
	var $helpers    = array('Session','Html', 'Form', 'Common','Fck');	
	var $components = array ('Upload','Captcha');
 	var $uses  = array('CourseCategory','Course');
	
	function _index() {
		$this->CourseCategory->recursive = 0;
		$this->set('courseCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid course category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('courseCategory', $this->CourseCategory->read(null, $id));
	}

	function _add() {
		if (!empty($this->data)) {
			$this->CourseCategory->create();
			if ($this->CourseCategory->save($this->data)) {
				$this->Session->setFlash(__('The course category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course category could not be saved. Please, try again.', true));
			}
		}
	}

	function _edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid course category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CourseCategory->save($this->data)) {
				$this->Session->setFlash(__('The course category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CourseCategory->read(null, $id);
		}
	}

	function _delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for course category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CourseCategory->delete($id)) {
			$this->Session->setFlash(__('Course category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Course category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function getCategories()
	{
		
		$mainCategories = $this->CourseCategory->find('all',array('conditions'=>array('CourseCategory.enable'=>1,'CourseCategory.parent_id'=>0)));
		return $mainCategories;
		
	}
	
	/*function getTopics($category_id) {
		$this->autoRender = false;
		$this->layout = '';
		$this->CourseCategory->recursive = 0;
		$crit = "CourseCategory.parent_id='$category_id'  and CourseCategory.enable='1'";
		$courses = $this->CourseCategory->find('all',array('fields'=>'CourseCategory.*','conditions'=>$crit));
		return $courses;
	}*/
	
	
	function admin_index() {
	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
	 
		$this->CourseCategory->recursive = 0;
		$this->set('courseCategories', $this->paginate());
	}

	function admin_view($id = null) {
	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
	 
		if (!$id) {
			$this->Session->setFlash(__('Invalid course category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('courseCategory', $this->CourseCategory->read(null, $id));
	}

	function admin_add() {
	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
	 
		if (!empty($this->data)) {
			$this->CourseCategory->create();
			if ($this->CourseCategory->save($this->data)) {
				$id = $this->CourseCategory->id;
				$img_type_allowed = array("png","gif","jpg","jpeg","bmp");
				$img_destination =  realpath('../../app/webroot/uploads/category_image/') . '/';
				$image_att = $this->data['CourseCategory']['cat_img']['name'];
				if($image_att)
					{
					
					$result1 = $this->Upload->upload($this->data['CourseCategory']['cat_img'],$img_destination,$id."_".$image_att, null,$img_type_allowed);
					$this->CourseCategory->save(array('image'=>$id."_".$image_att));
					}
				$this->Session->setFlash(__('The course category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course category could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
	 
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid course category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			
			if ($this->CourseCategory->save($this->data)) {
				$img_type_allowed = array("png","gif","jpg","jpeg","bmp");
				$img_destination =  realpath('../../app/webroot/uploads/category_image/') . '/';
				$image_att = $this->data['CourseCategory']['cat_img']['name'];
				if($image_att)
					{
					$result1 = $this->Upload->upload($this->data['CourseCategory']['cat_img'],$img_destination,$id."_".$image_att, null,$img_type_allowed);
					$this->CourseCategory->save(array('image'=>$id."_".$image_att));
					}
				$this->Session->setFlash(__('The course category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CourseCategory->read(null, $id);
		}
	}

	function admin_delete($id = null) {
	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
	
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for course category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CourseCategory->delete($id)) {
			$this->Session->setFlash(__('Course category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Course category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function admin_image_delete($id=NULL)
{
	 
	if($id)
	{
		$cond = "CourseCategory.id='$id'";
		$img = $this->Course->find('first',array('conditions'=>$cond));
		$destination = realpath('../../app/webroot/uploads/category_image/') . '/';
			
		$file_path = $destination.$img['CourseCategory']['image'];
		@unlink($file_path);
				 $this->CourseCategory->id = $id;
               $this->CourseCategory->save(array('image'=>''));

               $this->redirect("/admin/course_categories/edit/".$img['CourseCategory']['id']);

		//unlink()
		
	}
}
	
	function courses() {
		
		$this->layout = 'subpage';
		//var_dump($_SESSION);
		$category = $this->params['pass'][0];
		$this->set('category',$category);

		$this->loadModel('CoursePackages');
		if($this->params['pass'][1]){ $parameter = $this->params['pass'][1]; }else{ $parameter = '0'; }
		$this->CourseCategory->recursive = 0;
		$cat = $this->CourseCategory->find('first',array('conditions'=>array("CourseCategory.url"=>$category,"CourseCategory.enable"=>1)));
	  $this->set('cat',$cat);
	 
        $cond = "Course.course_category_id='".$cat['CourseCategory']['id']."' AND Course.free_course='0' AND Course.enable='1'";
		$course = $this->Course->find('all',array('conditions'=>$cond,'fields'=>array('Course.id','Course.course_title','Course.url','Course.cpd_point','Course.course_fee'),'order'=>'Course.course_title ASC'));
		
		
		$this->set('course', $course);

		$cat_cond  = "CourseCategory.enable=1 AND CourseCategory.url='$category'";
		$course_category = $this->CourseCategory->find('first',array('conditions'=>$cat_cond));
		$this->set('course_category',$course_category);

		$course_package=$this->CoursePackages->find('all',array('order'=>'CoursePackages.package_id'));
		$this->set('course_package', $course_package);

		$this->set('course_cat',$course_category['CourseCategory']['course_category_name']);
		$this->set('course_desc',$course_category['CourseCategory']['desc']);
		$this->set('category_id',$course_category['CourseCategory']['id']);
		$this->set('category_parentid',$course_category['CourseCategory']['parent_id']);
		//$this->set('page_title',$course_category['CourseCategory']['course_category_name']);
		$this->set('page_title',' Online Professional Development Courses | Earn CPD Points - Health Careers Malaysia');
		$this->set('page_content',$course_category['CourseCategory']['desc']);
		$this->set('meta_title',$course_category['CourseCategory']['meta_title']);
		$this->set('meta_description',$course_category['CourseCategory']['meta_desc']); 
		$this->set('meta_keywords',$course_category['CourseCategory']['meta_keyword']); 
		$this->set('parameter',$parameter);
	}
	
	function _ielts_blended()
	{
		$this->layout = 'subpage_new';
		$this->Course->recursive = 0;
		$category = 'english';
		$cond = "CourseCategory.enable=1 AND Course.url='blended_ielts' AND Course.enable=1";
		$course = $this->Course->find('first',array('conditions'=>$cond,'order'=>'Course.course_title'));
		
		$online_course = $face_course = "";

		$course_brochure = $course_appln = "";
																											
		if($course['Course']['brochure']!='')
																																		$course_brochure = '<a href="'.WEB_URL.'uploads/course_brochures/'.$course['Course']['brochure'].'" target="_blank"><div class="Listbtn-brochure" ></div></a>';
	if($course['Course']['course_category_id']==2)
		$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form.pdf" target="_blank"><div class="Listbtn-application" ></div></a>';
	elseif($course['Course']['course_category_id']==1)
		$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form_english.pdf" target="_blank"><div class="Listbtn-application" ></div></a>';
if($course['Course']['regular_course'] == 1)
{
	$face_course .= ' <li style="min-height:30px!important;">
																																																			<a href="#">'.$course['Course']['course_title'].'<span class="st-arrow">Open or Close</span></a>
																																																			
																																																					<div id="listdetailbox" class="st-content" style="height:auto;">
																																																														<!--<div class="listdetail-onlinecourse"></div>-->
																																																		
																																																							<div class="Listcontent" align="justify">'.$course['Course']['description'].'</div>
																																																									<div class="listdetailbox-heading">
																																																									<a href="'.WEB_URL.'applyonline/'.$course['Course']['url'].'"><div class="Listbtn-apply" ></div></a>
																																																									'.$course_brochure.'
																																																									'.$course_appln.'
																																																									<a href="'.WEB_URL.'courses/'.$course['Course']['url'].'"><div class="Listbtn-view" style="margin:0" ></div></a>
																																																									</div>
																																																									</div>
																																															    </li>';
		

		
	}
	return $face_course;
	$this->set('course_cat',$course_category['CourseCategory']['course_category_name']);
		$this->set('course_desc',$course_category['CourseCategory']['desc']);
		
		$this->set('page_title',$course_category['CourseCategory']['course_category_name']);
		$this->set('meta_title',$course_category['CourseCategory']['meta_title']);
		$this->set('meta_description',$course_category['CourseCategory']['meta_desc']); 
		$this->set('meta_keywords',$course_category['CourseCategory']['meta_keyword']); 
	}
	function _online_ielts()
	{
		$this->layout = 'subpage_new';
		$this->Course->recursive = 0;
		$category = 'english';
		$cond = "CourseCategory.enable=1 AND Course.url='online_ielts' AND Course.enable=1";
		$course = $this->Course->find('first',array('conditions'=>$cond,'order'=>'Course.course_title'));
		
		$online_course = $face_course = "";

		$course_brochure = $course_appln = "";
																											
		if($course['Course']['brochure']!='')
																																		$course_brochure = '<a href="'.WEB_URL.'uploads/course_brochures/'.$course['Course']['brochure'].'" target="_blank"><div class="Listbtn-brochure" ></div></a>';
	if($course['Course']['course_category_id']==2)
		$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form.pdf" target="_blank"><div class="Listbtn-application" ></div></a>';
	elseif($course['Course']['course_category_id']==1)
		$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form_english.pdf" target="_blank"><div class="Listbtn-application" ></div></a>';
if($course['Course']['online_course'] == 1)
{
	$face_course .= ' <li style="min-height:30px!important;">
																																																			<a href="#">'.$course['Course']['course_title'].'<span class="st-arrow">Open or Close</span></a>
																																																			
																																																					<div id="listdetailbox" class="st-content" style="height:auto;">
																																																														<!--<div class="listdetail-onlinecourse"></div>-->
																																																		
																																																							<div class="Listcontent" align="justify">'.$course['Course']['description'].'</div>
																																																									<div class="listdetailbox-heading">
																																																									<a href="'.WEB_URL.'applyonline/'.$course['Course']['url'].'"><div class="Listbtn-apply" ></div></a>
																																																									'.$course_brochure.'
																																																									'.$course_appln.'
																																																									<a href="'.WEB_URL.'courses/'.$course['Course']['url'].'"><div class="Listbtn-view" style="margin:0" ></div></a>
																																																									</div>
																																																									</div>
																																															    </li>';
		

		
	}
	return $face_course;
	$this->set('course_cat',$course_category['CourseCategory']['course_category_name']);
		$this->set('course_desc',$course_category['CourseCategory']['desc']);
		
		$this->set('page_title',$course_category['CourseCategory']['course_category_name']);
		$this->set('meta_title',$course_category['CourseCategory']['meta_title']);
		$this->set('meta_description',$course_category['CourseCategory']['meta_desc']); 
		$this->set('meta_keywords',$course_category['CourseCategory']['meta_keyword']); 
	}
	
	function _english_health_care_course()
	{
		$this->layout = 'subpage_new';
		$this->Course->recursive = 0;
		$category = 'english';
		$cond = "CourseCategory.enable=1 AND Course.url='english-for-healthcare-professionals' AND Course.enable=1";
		$course = $this->Course->find('first',array('conditions'=>$cond,'order'=>'Course.course_title'));
		
		$online_course = $face_course = "";

		$course_brochure = $course_appln = "";
																											
		if($course['Course']['brochure']!='')
																																		$course_brochure = '<a href="'.WEB_URL.'uploads/course_brochures/'.$course['Course']['brochure'].'" target="_blank"><div class="Listbtn-brochure" ></div></a>';
	if($course['Course']['course_category_id']==2)
		$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form.pdf" target="_blank"><div class="Listbtn-application" ></div></a>';
	elseif($course['Course']['course_category_id']==1)
		$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form_english.pdf" target="_blank"><div class="Listbtn-application" ></div></a>';
if($course['Course']['online_course'] == 1)
{
	$face_course .= ' <li style="min-height:30px!important;">
																																																			<a href="#">'.$course['Course']['course_title'].'<span class="st-arrow">Open or Close</span></a>
																																																			
																																																					<div id="listdetailbox" class="st-content" style="height:auto;">
																																																														<!--<div class="listdetail-onlinecourse"></div>-->
																																																		
																																																							<div class="Listcontent" align="justify">'.$course['Course']['description'].'</div>
																																																									<div class="listdetailbox-heading">
																																																									<a href="'.WEB_URL.'applyonline/'.$course['Course']['url'].'"><div class="Listbtn-apply" ></div></a>
																																																									'.$course_brochure.'
																																																									'.$course_appln.'
																																																									<a href="'.WEB_URL.'courses/'.$course['Course']['url'].'"><div class="Listbtn-view" style="margin:0" ></div></a>
																																																									</div>
																																																									</div>
																																															    </li>';
		

		
	}
	return $face_course;
	$this->set('course_cat',$course_category['CourseCategory']['course_category_name']);
		$this->set('course_desc',$course_category['CourseCategory']['desc']);
		
		$this->set('page_title',$course_category['CourseCategory']['course_category_name']);
		$this->set('meta_title',$course_category['CourseCategory']['meta_title']);
		$this->set('meta_description',$course_category['CourseCategory']['meta_desc']); 
		$this->set('meta_keywords',$course_category['CourseCategory']['meta_keyword']); 
	}

	function courses_topic($category_id) {
		$this->autoRender = false;
		$this->layout = '';
		$courseCategory = $this->CourseCategory->read(null, $category_id);
		$this->CourseCategory->recursive = 0;
		if($courseCategory['CourseCategory']['related_category_id']!=''){
			$crit = "CourseCategory.parent_id in(".$courseCategory['CourseCategory']['related_category_id'].", ".$courseCategory['CourseCategory']['id'].") and CourseCategory.enable='1'";
			$order = 'CourseCategory.parent_id DESC';
		}else{
			$crit = "CourseCategory.parent_id='".$courseCategory['CourseCategory']['id']."' and CourseCategory.enable='1'";
			$order = '';
		}
		$courseTopics = $this->CourseCategory->find('all',array('conditions'=>$crit,'order'=>$order));

		return $courseTopics;
	}
	function aha_categories($category_id) {
		$this->autoRender = false;
		$this->layout = '';
		$courseCategory = $this->CourseCategory->read(null, $category_id);
		$this->CourseCategory->recursive = 0;
		
			$crit = "CourseCategory.parent_id='".$courseCategory['CourseCategory']['id']."' and CourseCategory.enable='1'";
			$order = '';
	
		$courseTopics = $this->CourseCategory->find('all',array('conditions'=>$crit,'order'=>$order));

		return $courseTopics;
	}
	
	function course_menu($category_id)
	{
		  
				//echo $category_id;
				$this->autoRender = false;
		  $this->layout = '';
				$crit = "Course.course_category_id='$category_id' and Course.enable='1' ORDER BY Course.course_title ASC";
				$course_name = $this->Course->find('all',array('conditions'=>$crit));
				return $course_name;
	}
	
	function all_courses_topic($category_id) {
		$this->autoRender = false;
		$this->layout = '';
		$courseCategory = $this->CourseCategory->read(null, $category_id);
		$this->CourseCategory->recursive = 0;
		/*if($courseCategory['CourseCategory']['related_category_id']!=''){
		$crit = "CourseCategory.parent_id='".$courseCategory['CourseCategory']['related_category_id']."' and CourseCategory.enable='1'";
		}else{
		$crit = "CourseCategory.parent_id='".$courseCategory['CourseCategory']['id']."' and CourseCategory.enable='1'";
		}*/
		$crit = "CourseCategory.parent_id!='0' and CourseCategory.enable='1'";
		$courseTopics = $this->CourseCategory->find('all',array('conditions'=>$crit));

		return $courseTopics;
	}

	function _coming_soon($id = null){
		$this->layout = 'main';
		$this->Course->recursive = 0;
		$cond = " Course.enable=0 AND Course.upcoming=1";
		
		$course = $this->Course->find('all',array('conditions'=>$cond,'order'=>'Course.course_title'));
		$this->set('courses', $course);
		
		$cat = $this->CourseCategory->read(null, $id);
		if($cat['CourseCategory']['parent_id'] == '0')
		{
				$root_parent = $cat['CourseCategory']['id'];
		}else{
				$root = $this->CourseCategory->read(null, $cat['CourseCategory']['id']);
				$root_parent = $root['CourseCategory']['parent_id'];
		}
		$this->set('root_parent', $root_parent);
	}
	
	function _faq($id = null){
		$this->layout = 'main';
		$cat = $this->CourseCategory->read(null, $id);
		if($cat['CourseCategory']['parent_id'] == '0')
		{
				$root_parent = $cat['CourseCategory']['id'];
		}else{
				$root = $this->CourseCategory->read(null, $cat['CourseCategory']['id']);
				$root_parent = $root['CourseCategory']['parent_id'];
		}
		$this->set('root_parent', $root_parent);
	}
	
	function _welcome($id = null){
		$this->layout = 'main';
		$this->set('root_parent', '2');
		
		$cat = $this->CourseCategory->read(null, $id);
		if($cat['CourseCategory']['parent_id'] == '0')
		{
				$root_parent = $cat['CourseCategory']['id'];
		}else{
				$root = $this->CourseCategory->read(null, $cat['CourseCategory']['id']);
				$root_parent = $root['CourseCategory']['parent_id'];
		}
		$this->set('root_parent', $root_parent);
	}

	function getCategoryDetails($id = null) {
		return $categoryDetails = $this->CourseCategory->read(null, $id);
	}
	
	
}
