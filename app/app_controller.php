<?php
class AppController extends Controller {
	
	public $components = array ('Session','Misc');
	public $helpers    = array ('Session','Html', 'Form', 'Javascript');
	var $paginate      = array('limit'=>40);
	
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
		$this->set('page_title', $this->settings['meta_title']);
		$this->set('meta_title',$this->settings['meta_title']);
		$this->set('meta_description',$this->settings['meta_description']);
		$this->set('meta_keywords',$this->settings['meta_keywords']);
		$this->set('google_analytics',$this->settings['google_analytics']);
        $menus = $this->load_menu();
        $this->set('menus',$menus);
        $submenus = $this->loadsubMenus();
        //pr($submenus);
        $this->set('submenus',$submenus);

	}

	
		
	//Settings are loaded in to array $settings
	function load_settings()
	{
		 $this->loadModel('Setting'); 
			$results 	= 	$this->Setting->query("SELECT * FROM `settings` LIMIT 1 ");	
			
			if($results)
			{
				$this->settings['meta_title'] = $results[0]['settings']['meta_title'];
				$this->settings['meta_description'] = $results[0]['settings']['meta_description'];
				$this->settings['meta_keywords'] = $results[0]['settings']['meta_keywords'];                                                      
				$this->settings['google_analytics'] = $results[0]['settings']['google_analytics'];
			}
			
	 	$this->set('settings',$this->settings);
	 	
	}
	// Function to load menu
    function load_menu()
    {
        $this->loadModel("Cm");
        $det = $this->Cm->find('all',array('conditions'=>array('Cm.enable'=>'1','Cm.parent_id'=>0,'Cm.show_in_parent_menu'=>1),'order'=>array('Cm.sort ASC')));		
        //pr($det);
        $this->set('det',$det);
        $menu_str = '';
        if($det)
        {
           //pr($det);
           $menu_str = '<ul class="cd-navigation">';
            foreach($det as $key =>$val)
            {
                //$check_child_exists = $this->Cm->find('all',array('conditions'=>array('Cm.enable'=>'1','Cm.parent_id'=>$val['Cm']['id']),'order'=>array('Cm.sort ASC')));
                $check_child_exists = $this->Cm->find('all',array('conditions'=>array('Cm.enable'=>'1','Cm.parent_id'=>$val['Cm']['id'],'Cm.show_in_parent_menu'=>'1'),'order'=>array('Cm.sort ASC')));				


//$logs = ConnectionManager::getDataSource('default')->getLog();
//$end = end($logs['log']);
//echo $end['query'];
//exit;

                if(!$check_child_exists)
                { 
                   if($val['Cm']['is_external_url'] == '1')
				   {
					    $menu_str.='<li class="no-submenu"><a href="'.$val['Cm']['seo_url'].'" target="'.$val['Cm']['page_target'].'">'.$val['Cm']['page_title'].'</a></li>';
				   }
				   else
				   {				   
                        $menu_str.='<li class="no-submenu"><a href="'.WEB_URL.$val['Cm']['seo_url'].'" >'.$val['Cm']['page_title'].'</a></li>';
				   }
              
                }
                else
                {
                    $menu_str .='<li class="item-has-children"><a href="#0">'.$val['Cm']['page_title'].'</a>
                    <ul class="sub-menu">';
                    foreach($check_child_exists as $ckey =>$cval)
                        {
						   if($cval['Cm']['is_external_url']=='1')						  
						   {
							    $menu_str.='<li><a href="'.$cval['Cm']['seo_url'].'" target="'.$cval['Cm']['page_target'].'">'.$cval['Cm']['page_title'].'</a></li>';
						   }
						   else{                            
							
							   $menu_str.='<li><a href="'.WEB_URL.$cval['Cm']['seo_url'].'">'.$cval['Cm']['page_title'].'</a></li>';
				             }
                        }
                    
                    $menu_str.='</ul>
                    </li>';
                }
             }
             $menu_str.='</ul>';
        } 
        return $menu_str;
    } 

    function loadsubMenus()
    {
        $this->loadModel("Cm");
								$url = '';
								if(isset($this->params['url']['url']))
				        $url = $this->params['url']['url'];
        $cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
        $check_child_exists = $this->Cm->find('all',array('conditions'=>array('Cm.enable'=>'1','Cm.parent_id'=>$cms['Cm']['parent_id'],'Cm.show_in_right_menu'=>1),'fields'=>array('Cm.id','Cm.page_title','Cm.seo_url','Cm.short_url'),'order'=>array('Cm.sort ASC')));
        
       return $check_child_exists;
    }
	function getCourseCategories()
	{
	    $this->loadModel('CourseCategory');
	    $categories = $this->CourseCategory->find('all',array('conditions'=>array('CourseCategory.id'=>2,'CourseCategory.enable'=>1),'fields'=>array('id','course_category_name','url'),'order'=>'CourseCategory.course_category_name'));
		
		$menu = '';
		if($categories){
				foreach($categories as $ckey =>$cval){
		    if($cval['CourseCategory']['url']=='learn-at-leisure')
		    $ahref = WEB_URL.$cval['CourseCategory']['url'];
		    else
		    $ahref= WEB_URL.'course/'.$cval['CourseCategory']['url'];
           $menu.='<li class="developer-link" onclick="mixpanel.track(\'Clicked Mobile Developer Link\');"><a href="'.$ahref.'">'.$cval['CourseCategory']['course_category_name'].'</a>';
           $this->loadModel('Course');
		   $courses = $this->Course->find('all',array('conditions'=>array('Course.enable'=>1,'Course.course_category_id'=>$cval['CourseCategory']['id']),'fields'=>array('Course.id','Course.course_title','Course.url','Course.course_category_id'),'order'=>'Course.course_title'));
           if($courses && $cval['CourseCategory']['id']!=3)
           {
             $menu.='<ul>';
             foreach($courses as $cokey=>$coval){
				 if($coval['Course']['course_category_id']!=3)
				 {

				 //$chref = '#';

				 //else

				 $chref = WEB_URL.'courses/'.$coval['Course']['url'];

				$menu.='<li class="details-link" onclick="mixpanel.track(\'Clicked Mobile Details Link\');"><a href="'.$chref.'">'.$coval['Course']['course_title'].'</a></li>';
			}
			 }
             $menu.='</ul>';
			}
           $menu.='</li>';
           
            }
            }
            return $menu;
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


	
			/**
	 * prints out an array
	 */
	function checkPermissionUser() 
	{	 
	 if(!isset($_SESSION['user']['id']))
	 {
    $this->Session->setFlash('Please sign in to view this page.');
    $this->Session->write('user',array());	
    $this->redirect(array('controller'=>'users','action'=>'home'), null, true);	
    exit;  
	 }
	 $this->set('left_panel',$this->Misc->memberLeftPanel());
	 $this->set('misc',$this->Misc);
	 
	}
		
	public function encrypt($sData, $secretKey) {
        $sResult = '';
        for ($i = 0; $i < strlen($sData); $i++) {
            $sChar = substr($sData, $i, 1);
            $sKeyChar = substr($secretKey, ($i % strlen($secretKey)) - 1, 1);
            $sChar = chr(ord($sChar) + ord($sKeyChar));
            $sResult .= $sChar;
        }
        return $this->encode_base64($sResult);
    }
    public function encode_base64($sData) {
        $sBase64 = base64_encode($sData);
        return str_replace('=', '', strtr($sBase64, '+/', '-_'));
    }

    public function decode_base64($sData) {
        $sBase64 = strtr($sData, '-_', '+/');
        return base64_decode($sBase64 . '==');
    }
    public function decrypt($sData, $secretKey) {
        $sResult = '';
        $sData = $this->decode_base64($sData);
        for ($i = 0; $i < strlen($sData); $i++) {
            $sChar = substr($sData, $i, 1);
            $sKeyChar = substr($secretKey, ($i % strlen($secretKey)) - 1, 1);
            $sChar = chr(ord($sChar) - ord($sKeyChar));
            $sResult .= $sChar;
        }
        return $sResult;
    }
    
    


	
}
