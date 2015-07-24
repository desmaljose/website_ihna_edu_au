<?php
class RolesController extends AppController {

	var $name = 'Roles';
	var $helpers    = array('Session','Html', 'Form', 'Common');
	var $uses = array('Role','User','UserRoles','UserDetail','Module','UserModule');
	
	//Function For Index Page
	
	function index() {
		$this->layout = 'admin';
		$this->checkPermissionAdmin();
		$this->Role->recursive = 0;
		$logged_user_details = $this->Session->read('admin');
		$this->set('logged_user_details',$logged_user_details);
		if($logged_user_details['role_id'] != '1')
		{
			$this->Session->setFlash(__('Access Denied', true));
			$this->redirect("/users/users/index");
		}
		if(isset($this->params['named']['page']))
			$page = $this->params['named']['page'];
			else
			$page = 1;
			$this->set('page',$page);
			$this->paginate = array(
            'fields' => array('Role.*'),
            'limit' => 10);
		//$this->set('roles', $this->paginate());
		$this->set('limit',10);
		$roles = $this->Paginate('Role');
		$this->set(compact('roles'));
	}
	
	//Function For View Roles
	
	function view($id = null) {
		$this->layout = 'admin';
	
		$this->checkPermissionAdmin();
		if (!$id) {
			$this->Session->setFlash(__('Invalid role', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('role', $this->Role->read(null, $id));
	}
	
	//Function For Add Roles
	
	function add() {
		$this->layout = 'admin';
		$this->checkPermissionAdmin();
		
		if (!empty($this->data)) {
			$this->Role->create();
			$check_exists = $this->Role->find('all',array('conditions'=>array('role_name'=>$this->data['Role']['role_name'])));
			if($check_exists)
			{
				 $this->Session->setFlash(__('Role Already Exists. Please, try again.', true));
			}
			else
			{
			if ($this->Role->save($this->data)) {
				$this->UserRoles->save(array('role_name'=>$this->data['Role']['role_name'],'enable'=>'1'));
				$this->Session->setFlash(__('The role has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The role could not be saved. Please, try again.', true));
			}
			}
		}
	}
	
	//Function For View User Rights
	
	function user_rights($id=null)
	{
		$this->layout = 'admin';
		 $role_id = $id;
		 $this->set('role_id',$role_id);
		 $modules = $this->Module->find('all');
		 $this->set('modules',$modules);
		 $logged_user_details = $this->Session->read('admin');
		$this->set('logged_user_details',$logged_user_details);
		 if($logged_user_details['role_id'] != '1')
		{
			$this->Session->setFlash(__('Access Denied', true));
			$this->redirect("/users/users/index");
		}
		 if(isset($_POST['Submit']))
		 {
			
			$cnt = count($_POST['mid']);
			$check_exists = $this->UserModule->find('all',array('conditions'=>array('role_id'=>$id)));
			if($check_exists)
			$this->UserModule->deleteAll("role_id ='$id'");
			foreach($modules as $key => $val)
			{
				$mod_id = $val['Module']['id'];
				if(isset($_POST['add_'.$mod_id]))
				$add = 1;
				else
				$add = 0;
				if(isset($_POST['edit_'.$mod_id]))
				$edit =  1;
				else
				$edit = 0;
				if(isset($_POST['delete_'.$mod_id]))
				$delete = 1;
				else
				$delete = 0;
				if(isset($_POST['view_'.$mod_id]))
				$view =  1;
				else
				$view = 0;
				$this->UserModule->saveAll(array('role_id'=>$id,'module_id'=>$val['Module']['id'],'add'=>$add,'edit'=>$edit,'delete'=>$delete,'view'=>$view));
			}
			$this->Session->setFlash('Roles succesfuly added.');
		 }
		 
		
	}
	
	//Function For Get Rights For given Userid
	
	function getRights($id,$user_id)
	{
		$det = $this->UserModule->find('first',array('conditions'=>array('module_id'=>$id,'role_id'=>$user_id)));
		return $det;
	
	}
	
	//Function For Edit Roles
	
	function edit($id = null) {
		$this->layout = 'admin';
		$this->checkPermissionAdmin();
		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid role', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$role_cond = "role_name ='".$this->data['Role']['role_name']."' AND Role.id !='".$id."'";
			$check_exists = $this->Role->find('all',array('conditions'=>$role_cond));
			if($check_exists)
			{
				 $this->Session->setFlash(__('Role Already Exists. Please, try again.', true));
			}
			else
			{
			if ($this->Role->save($this->data)) {
				$this->Session->setFlash(__('The role has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The role could not be saved. Please, try again.', true));
			}
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Role->read(null, $id);
		}
	}

	//Function For Delete Roles

	function delete($id = null) {
		$this->layout = 'admin';
	
	$this->checkPermissionAdmin();
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for role', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Role->delete($id)) {
			$this->Session->setFlash(__('Role deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Role was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Role->recursive = 0;
		$this->set('roles', $this->paginate());
	}
	
	//Function For View Roles Dashboard
	
	function roledash() {
		$this->layout = 'admin';
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid role', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('role', $this->Role->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Role->create();
			if ($this->Role->save($this->data)) {
				$this->Session->setFlash(__('The role has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The role could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid role', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Role->save($this->data)) {
				$this->Session->setFlash(__('The role has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The role could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Role->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for role', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Role->delete($id)) {
			$this->Session->setFlash(__('Role deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Role was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	//Function For get correspondence user menu
	
	function module_access()
	{
	   
	    $str = '';
	 if(isset($_SESSION['admin']['id']))
	 {
		//$this->checkPermissionAdmin();
		 $this->loadModel('Module'); 
		 $admin_session = $this->Session->read('admin');
		 $role_id = $admin_session['role_id'];
		 
		 $modules =  $this->Module->query("SELECT * FROM modules  M INNER JOIN user_modules  U ON U.module_id = M.id WHERE M.enable = '1' AND (U.add='1' OR U.edit='1' OR U.delete='1' OR U.view='1') AND U.role_id =$role_id");
		 $this->set('modules',$modules);
		
		 //pr($modules);
		 if($modules)
		 {
			 $str = '<div id="ddtopmenubar">
    <div class="siteNav"> 
       <ul id="menu">';
	 if(strstr($_SERVER['QUERY_STRING'],'users/users/index')) $menu_flg='selected';else $menu_flg=''; 
	    $str.='<li class="'.$menu_flg.'" ><a href="'.WEB_URL.'users/users/index">Home</a></li> ';
		foreach($modules as $mkey => $mval)
		 {
			
			if(strstr($_SERVER['QUERY_STRING'],$mval['M']['url']))
			{
			$menu_flag = "selected";
			}
			else
			{
			$menu_flag = "";
			}
			if($mval['M']['module_name']=='Masters')
			{
				$rel = 'rel="menu18"' ;
				$href = "#";
			}
			else
			{
				$rel = "";
				$href = WEB_URL.$mval['M']['url'];
			}
			//echo $menu_flag;
			$str.='<li class="'.$menu_flag.'"><a href="'.$href.'" '.$rel.'>'.$mval['M']['module_name'].'</a></li>';
		 }
          $str.= '</ul></div></div></div>
		  <ul id="menu18"  class="ddsubmenustyle">
          <li ><a href="'.WEB_URL.'roles">Role Management</a></li>
           <li ><a href="'.WEB_URL.'modules">Module Management</a></li>
       </ul>';
		 }
		 else
		 {
			 $str = " <div class='siteNav'> <div style='height:50px;'><span style='color:#ff0000;font-weight:bold;padding-left:157px;padding-bottom:19px;'>No rights assigned</span></div></div>";
		 }
		echo $str;
	 }else
	 {
		 $this->redirect(array('controller'=>'users','action'=>'login'), null, true);
	 }
  	}
	
	//Function For controling a user to given add,edit,delete,view option
	
	function action_access($mod_name,$id)
	{
		
		$mod_det = $this->Module->find('first',array('conditions'=>array('module_name'=>$mod_name)));
		
		$mod_id = $mod_det['Module']['id'];
		 if(isset($_SESSION['admin']['id']) && $mod_id)
	 	{
			$role_id = $_SESSION['admin']['role_id'];
			$this->set('role_id',$role_id);
			$mod_access = $this->UserModule->find('first',array('conditions'=>array('role_id'=>$role_id,'module_id'=>$mod_id)));
			
			if($mod_access && $mod_access['UserModule']['edit']==1)
			{
				$href = WEB_URL.$mod_det['Module']['url'].'/edit/'.$id;
				echo '<a href="'.$href.'" title="Edit" ><img src="'.WEB_URL.'img/panel/btn_edit.gif"/></a>';
				
			}
			if($mod_access && $mod_access['UserModule']['delete']==1)
			{
				$href = WEB_URL.$mod_det['Module']['url'].'/delete/'.$id;
				$confirm = "return confirm('Are you sure you want to delete?')";
				echo '<a href="'.$href.'" title="Delete" onclick="'.$confirm.'"  ><img src="'.WEB_URL.'img/panel/btn_delete.gif"/></a>';
				
			}
			
		}
	}
	
	/* Added by sreejith to avoid action area in index page */
	//Function For controling a user to given add,edit,delete,view option
	function action_access_hide($mod_name,$id)
	{
		
		$mod_det = $this->Module->find('first',array('conditions'=>array('module_name'=>$mod_name)));
		
		$mod_id = $mod_det['Module']['id'];
		
		 if(isset($_SESSION['admin']['id']) && $mod_id)
	 	{
			$role_id = $_SESSION['admin']['role_id'];
			$this->set('role_id',$role_id);
			$mod_access = $this->UserModule->find('first',array('conditions'=>array('role_id'=>$role_id,'module_id'=>$mod_id)));
			if($mod_access['UserModule']['edit'] == 0 && $mod_access['UserModule']['delete'] == 0)
			{
				$view = "0";	
			}else
			{
				$view = "1";
			}	
		}
		return $view;
	}
	
	//Function For controling a user to given add option (course page)
	
	function action_access_head($mod_name,$id)
	{	
		$ses_id = $id;
		$mod_det = $this->Module->find('first',array('conditions'=>array('module_name'=>$mod_name)));
		
		$mod_id = $mod_det['Module']['id'];
		 if(isset($ses_id) && $mod_id)
	 	{
			$role_id = $_SESSION['admin']['role_id'];
			$this->set('role_id',$role_id);
			$mod_access = $this->UserModule->find('first',array('conditions'=>array('role_id'=>$role_id,'module_id'=>$mod_id)));
			if($mod_access['UserModule']['edit'] == 0 && $mod_access['UserModule']['delete'] == 0)
			{
				$head = "0";	
			}else
			{
				$head = "1";
			}	
		}
		return $head;
	}
	
	//Function For controling a user tools(course page)
	
	function action_course_access($mod_name,$id)
	{
		
		$mod_det = $this->Module->find('first',array('conditions'=>array('module_name'=>$mod_name)));
		
		$mod_id = $mod_det['Module']['id'];
		 if(isset($_SESSION['admin']['id']) && $mod_id)
	 	{
			$role_id = $_SESSION['admin']['role_id'];
			$this->set('role_id',$role_id);
			$mod_access = $this->UserModule->find('first',array('conditions'=>array('role_id'=>$role_id,'module_id'=>$mod_id)));
			
			if($mod_access && $mod_access['UserModule']['edit']==1)
			{
				$href = WEB_URL.$mod_det['Module']['url'].'/edit/'.$id;
				echo '<a href="'.$href.'" title="Edit" ><img src="'.WEB_URL.'img/panel/btn_edit.gif"/></a>';
				
			}
			if($mod_access && $mod_access['UserModule']['delete']==1)
			{
				$href = WEB_URL.$mod_det['Module']['url'].'/delete/'.$id;
				$confirm = "return confirm('Are you sure you want to delete?')";
				echo '<a href="'.$href.'" title="Delete" onclick="'.$confirm.'"  ><img src="'.WEB_URL.'img/panel/btn_delete.gif"/></a>';
				
			}
			if($_SESSION['admin']['role_id'] == '1' || $_SESSION['admin']['role_id'] == '3')
			{
				$href = WEB_URL.'course_unit_timetables/list_add/'.$id;
				echo '<a href="'.$href.'" title="Course Unit Timetable"  ><img src="'.WEB_URL.'img/panel/Timetable.png"/></a>';
				
			}
			if($_SESSION['admin']['role_id'] == '1' || $_SESSION['admin']['role_id'] == '3')
			{
				$href = WEB_URL.$mod_det['Module']['url'].'/student_enrol/'.$id;
				$confirm = "return popitup('".WEB_URL.$mod_det['Module']['url'].'/student_enrol/'.$id."')";
				echo '<a href="'.$href.'" title="View assigned students/ assign new students" onclick="'.$confirm.'"  ><img src="'.WEB_URL.'img/panel/student_icon.jpg"/></a>';
				
			}
			if($_SESSION['admin']['role_id'] == '1' || $_SESSION['admin']['role_id'] == '3')
			{
				$href = WEB_URL.$mod_det['Module']['url'].'/course_unit_det/'.$id;
				$confirm = "return popitup('".WEB_URL.$mod_det['Module']['url'].'/course_unit_det/'.$id."')";
				echo '<a href="'.$href.'" title="View assigned faculty to course unit / assign new faculty to course unit" onclick="'.$confirm.'"  ><img src="'.WEB_URL.'img/panel/fac.gif"/></a>';
				
			}
			
			
		}
	}
	
	/* Added by sreejith to avoid action area in index page */
	
	//Function For controling a user to given add,edit,delete,view option (Library Page)
	
	function action_access_lib($mod_name,$id)
	{
		
		$mod_det = $this->Module->find('first',array('conditions'=>array('module_name'=>$mod_name)));
		
		$mod_id = $mod_det['Module']['id'];
		 if(isset($_SESSION['admin']['id']) && $mod_id)
	 	{
			$role_id = $_SESSION['admin']['role_id'];
			$this->set('role_id',$role_id);
			$mod_access = $this->UserModule->find('first',array('conditions'=>array('role_id'=>$role_id,'module_id'=>$mod_id)));
			if($mod_access && $mod_access['UserModule']['edit']==1)
			{
				$href = WEB_URL.$mod_det['Module']['url'].'/edit/'.$id;
				echo '<a href="'.$href.'" title="Edit" ><img src="'.WEB_URL.'img/panel/btn_edit.gif"/></a>';
				
			}
			if($mod_access && $mod_access['UserModule']['delete']==1)
			{
				$href = WEB_URL.$mod_det['Module']['url'].'/delete/'.$id;
				$confirm = "return confirm('If you delete this category you should lose library log of this category, Do you want to continue?')";
				echo '<a href="'.$href.'" title="Delete" onclick="'.$confirm.'"  ><img src="'.WEB_URL.'img/panel/btn_delete.gif"/></a>';
				
			}
			
		}
	}
	
	//Function For controling a user to given add option
	
	function add_access($mod_name)
	{
		
		$mod_det = $this->Module->find('first',array('conditions'=>array('module_name'=>$mod_name)));
		$mod_id = $mod_det['Module']['id'];
		 if(isset($_SESSION['admin']['id']) && $mod_id)
	 	{
			$role_id = $_SESSION['admin']['role_id'];
			$this->set('role_id',$role_id);
			$mod_access = $this->UserModule->find('first',array('conditions'=>array('role_id'=>$role_id,'module_id'=>$mod_id)));
			if($mod_access && $mod_access['UserModule']['add']==1)
			{
				
				$href = WEB_URL.$mod_det['Module']['url'].'/add/';
				if($mod_name =="Books Management")
				echo '<a href="'.$href.'" title="Add New Book" >Add New Book </a>';
				else
				echo '<a href="'.$href.'" title="Add New '.$mod_det['Module']['module_name'].'" >New '.strtolower($mod_det['Module']['module_name']).'</a>';
				
			}
		}
	}
	
	//Function For controling a user to given add option in staff unit
	
	function add_access_unit($mod_name,$unit_id)
	{
		
		$mod_det = $this->Module->find('first',array('conditions'=>array('module_name'=>$mod_name)));
		$mod_id = $mod_det['Module']['id'];
		 if(isset($_SESSION['admin']['id']) && $mod_id)
	 	{
			$role_id = $_SESSION['admin']['role_id'];
			$this->set('role_id',$role_id);
			$mod_access = $this->UserModule->find('first',array('conditions'=>array('role_id'=>$role_id,'module_id'=>$mod_id)));
			if($mod_access && $mod_access['UserModule']['add']==1)
			{
				
				$href = WEB_URL.$mod_det['Module']['url'].'/add/'.$unit_id;
				if($mod_name =="Books Management")
				echo '<a href="'.$href.'" title="Add New Book" >Add New Book </a>';
				else
				echo '<a href="'.$href.'" title="Add New '.$mod_det['Module']['module_name'].'" >New '.strtolower($mod_det['Module']['module_name']).'</a>';
				
			}
		}
	}
	
	//Function For controling a user to given View option
	
	function list_access($mod_name)
	{
		$mod_det = $this->Module->find('first',array('conditions'=>array('module_name'=>$mod_name)));
		$mod_id = $mod_det['Module']['id'];
		 if(isset($_SESSION['admin']['id']) && $mod_id)
	 	{
			$role_id = $_SESSION['admin']['role_id'];
			$this->set('role_id',$role_id);
			$mod_access = $this->UserModule->find('first',array('conditions'=>array('role_id'=>$role_id,'module_id'=>$mod_id)));
			if($mod_access && $mod_access['UserModule']['add']==1)
			{
				$href = WEB_URL.$mod_det['Module']['url'].'/index';
				echo '<a href="'.$href.'" >List '.strtolower($mod_det['Module']['module_name']).'</a>';
				
			}
		}
	}
	
	//Function For get Role name for given id
	
	function getRoleName($id)
	{
		 $roles = $this->Role->find('first',array('conditions'=>array('id'=>$id)));
		 $role_name = $roles['Role']['role_name'];
		 return $role_name;
	}

}
