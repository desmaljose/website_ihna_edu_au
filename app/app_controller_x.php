<?php

class AppController extends Controller {
	
	public $components = array ('Session','Misc');
	public $helpers    = array ('Session','Html', 'Form', 'Javascript','DatePicker');
	
	var $paginate      = array('limit'=>15);
	
	/*Initialize menu variables*/
	var $top_menus='';
	var $bottom_menus='';
	var $breadcrumb='';
	var $user_banner_details='';
	var $settings =  array();
	/**
	 * prints out an array
	 */
	function pa($arr) {
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
	
	function beforeFilter()
	{
  		$this->load_settings();
		$this->set('site_name',$this->settings['site_name']);
		$this->set('site_logo',$this->settings['system_logo']);
		$this->set('currency',$this->settings['currency']);
		$this->pageTitle = $this->settings['meta_title'];
		$this->set('meta_title',$this->settings['meta_title']);
		$this->set('meta_description',$this->settings['meta_description']);
		$this->set('meta_keywords',$this->settings['meta_keywords']);
		$this->set('google_analytics',$this->settings['google_analytics']);
		$sections = $this->getModules();
		$this->set('sections',$sections);
		//$this->module_access();
	}
	
		
	//Settings are loaded in to array $settings
	function getModules()
	{
		 $this->loadModel('Module'); 

		 $sections = $this->Module->query("SELECT * FROM modules WHERE enable = '1'");
		 return $sections;
	}
	function load_settings()
	{
		 $this->loadModel('Setting'); 
		 $results 	= 	$this->Setting->query("SELECT * FROM `settings` LIMIT 1 ");	
			
			if($results)
			{
				$this->settings['site_name'] = $results[0]['settings']['site_name'];
				$this->settings['system_logo'] = $results[0]['settings']['system_logo'];
				$this->settings['currency'] = $results[0]['settings']['currency'];
				$this->settings['meta_title'] = $results[0]['settings']['meta_title'];
				$this->settings['meta_description'] = $results[0]['settings']['meta_description'];
				$this->settings['meta_keywords'] = $results[0]['settings']['meta_keywords'];
				$this->settings['google_analytics'] = $results[0]['settings']['google_analytics'];
			}
			
	 	$this->set('settings',$this->settings);
	 	
	}
	
	
		
		/**
	 * prints out an array
	 */
	function checkPermissionAdmin() 
	{
	 
	 if(!isset($_SESSION['admin']['id']))
	 {
    $this->Session->setFlash('Please sign in to view this page.');
   	//$this->flash(__('Session Expired!!', true), array('controller'=>'admins','action'=>'adminLogin'));
		  $this->redirect(array('controller'=>'admins','action'=>'login'), null, true);
	 }
	}
	
	function checkPageViewPermission($mod_id,$act) 
	{
		  $view_exist = $this->Module->query("select `id`,`add`,`edit`,`delete`,`view` from admin_modules where role_id=".$_SESSION['admin']['role_id']." and module_id=".$mod_id);
		
		  if($act == "view"){
			$view = $view_exist[0]['admin_modules']['view'];
			  if($view == 0 && $view != '')
			  {
				$this->Session->setFlash(__('Access Denied', true));
				$this->redirect("/admin/admins/index"); 
			  }
		  }elseif($act == "delete")
		  {
		    $del = $view_exist[0]['admin_modules']['delete'];
			  if($del == 0 && $del != '')
			  {
				$this->Session->setFlash(__('Access Denied', true));
				$this->redirect("/admin/admins/index"); 
			  }
		  }elseif($act == "edit")
		  {
		    $edit = $view_exist[0]['admin_modules']['edit'];
			  if($edit == 0 && $edit != '')
			  {
				$this->Session->setFlash(__('Access Denied', true));
				$this->redirect("/admin/admins/index"); 
			  }
		  }else
		  {
		    $add = $view_exist[0]['admin_modules']['add'];
			  if($add == 0 && $add != '')
			  {
				$this->Session->setFlash(__('Access Denied', true));
				$this->redirect("admin/admins/index"); 
			  }
		  }
	}
	
}
