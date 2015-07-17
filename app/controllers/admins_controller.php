<?php
class AdminsController extends AppController {

	var $name       = 'Admins';
	var $helpers    = array('Session','Html', 'Form', 'Common');	
	var $components = array('Session','Upload','Misc');

	function admin_index()
	{
  	$this->checkPermissionAdmin();
  	$this->layout ='admin';
  	$summary = $this->Misc->getSettingsDetails();
  	$this->set('summary',$summary); 
	}
	
	function admin_view($id = null) {	 
	 $this->checkPermissionAdmin();
	$this->layout ='admin';
		if (!$id) {
			$this->Session->setFlash(__('Invalid Admin.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('admin', $this->Admin->read(null, $id));
	}
	
	function admin_add() {
	 $this->checkPermissionAdmin();
 	$this->layout ='admin'; 	 
		if (!empty($this->data)) {
			$this->Admin->create();
			$pawd = $this->randomkeys();					
            $this->data['Admin']['password']  = base64_encode($pawd); 
		    $imagename   = '';	 
		 
		 if($this->data['Admin']['speak_more_languages']=="Yes")
   $this->data['Admin']['languages']  = $this->data['Admin']['languages'] ;
   else 
   $this->data['Admin']['languages']  = '' ;
   
		 if ($this->Admin->save($this->data)) {
 		  $insert_id = $this->Admin->id;
 		
 		 if($this->data['Admin']['picture']['size']>0)
 	  {
 	     $imagename        = $insert_id."_".$this->data['Admin']['picture']['name'];
       $destination      = realpath('../../app/webroot/uploads/managers/').'/';
       $file             = $this->data['Admin']['picture']; 	  
    	  $result           = $this->Upload->upload($file, $destination, $imagename, null,null);	
    		 $imagename        = $this->Upload->result ;
    		 if ((!$result) && ($this->Upload->result == ""))
       {        
        $this->Session->setFlash(__('The Image Upload Failed.', true));
    				$this->redirect(array('action'=>'managers'));
       }
       $data       = array( 'Admin' => array( 'id' => $insert_id, 'imagename' => $imagename));
       $this->Admin->save( $data, false, array('imagename') );       
      
 	  }   
 	  
 	  $this->Misc->_sendMailManagerReg(1,$insert_id,2);
 	  $this->Misc->_sendMailSupport(5,$insert_id);
 	 
				$this->Session->setFlash(__('The Manager has been saved.', true));
				$this->redirect(array('action'=>'managers'));
			} else {
				$this->Session->setFlash(__('The Manager could not be saved. Please, try again.', true));
			}
		}
	}

	
	
function admin_edit($id = null) {
 
	 $this->checkPermissionAdmin();
	 $this->layout = 'admin';	 
	 if(!$id){ $id = $_SESSION['admin']['id']; }	 
	  
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Manager.', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
		  if($this->data['Admin']['picture']['size']>0)
 	  {
 	     $destination      = realpath('../../app/webroot/uploads/managers/').'/';
 	     if($this->data['Admin']['previousimg']!="")
    	  {
    	     if(file_exists($destination.$this->data['Admin']['previousimg']))
    	     {
    	           unlink($destination.$this->data['Admin']['previousimg']);      
    	           $this->data['Admin']['imagename'] = "" ;
    	     }   
    	  }
 	   
 	     $imagename        = $id."_".$this->data['Admin']['picture']['name'];       
       $file             = $this->data['Admin']['picture']; 	  
    	  $result           = $this->Upload->upload($file, $destination, $imagename, null,null);	
    		 $imagename        = $this->Upload->result ;
    		 if ((!$result) && ($this->Upload->result == ""))
       {        
        $this->Session->setFlash(__('The Image Upload Failed.', true));
    				$this->redirect(array('action'=>'managers'));
       }
       $this->data['Admin']['imagename']     =  $imagename ;  
 	  }   
 	  else 
 	  {     $this->data['Admin']['imagename']  =  $this->data['Admin']['previousimg'] ;  	  }
 	  
 	  if($this->data['Admin']['speak_more_languages']=="Yes")
    $this->data['Admin']['languages']  = $this->data['Admin']['languages'] ;
    else 
    $this->data['Admin']['languages']  = '' ;
 	  $this->data['Admin']['password']  = base64_encode($this->data['Admin']['password']);
			 if ($this->Admin->save($this->data)) {				
		 		$this->Session->setFlash(__(' Profile has been updated.', true));
			 	$this->redirect(array('action'=>'managers'));
			} else {
				$this->Session->setFlash(__('The Manager could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Admin->read(null, $id);			
		}
	}
	
	

function admin_adminedit($id = null) {
 
	 $this->checkPermissionAdmin();
	 $this->layout = 'admin';	 
	 if(!$id){ $id = $_SESSION['admin']['id']; }	 
	  
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Admin.', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
		 	  
			 if ($this->Admin->save($this->data)) {				
		 		$this->Session->setFlash(__(' Profile has been updated.', true));
			 	//$this->redirect(array('action'=>'managers'));
			} else {
				$this->Session->setFlash(__('The Admin could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Admin->read(null, $id);			
		}
	}
	

	function admin_delete($id = null) {
	 $this->checkPermissionAdmin();
	 
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Admin.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$result      = $this->Admin->find('first', array('conditions'=>array('id'=>$id),'fields'=>array('id','imagename')));			
	 $destination = realpath('../../app/webroot/uploads/managers/').'/';
	  
  if($result['Admin']['imagename']!="")
  {
     if(file_exists($destination.$result['Admin']['imagename']))
     unlink($destination.$result['Admin']['imagename']);    
  }
	  
		if ($this->Admin->del($id)) {	  
			$this->Session->setFlash(__('Admin deleted.', true));
			$this->redirect(array('action'=>'managers'));
		}
	}

	
	
	
	function admin_login()
	{
	 $this->layout=null;
		
	if (!empty($this->data))
	{
		$username = $this->data['username'];
		$password = $this->data['password'];	
		$password = base64_encode($this->data['password']);		
		
		$getUser = $this->Admin->find('first', array('conditions' => array('Admin.username'=> $username, 'Admin.password'=> $password, 'Admin.enable'=> 1), 'fields' => array('id', 'username', 'email','role_id', 'created','last_login')));
			
		if(isset($getUser['Admin']))
		{			
		   $datetoday  = $this->Admin->query("SELECT NOW() AS today") ;	    
		   $last_login = $datetoday[0][0]['today'];
		   
     $data       = array( 'Admin' => array( 'id' => 1, 'last_login' => $last_login));
     $this->Admin->save( $data, false, array('last_login') ); 
     
     $this->Session->write('admin',$getUser['Admin']);	
			  $this->redirect(array('controller'=>'admins','action'=>'admin_index'), null, true);		  
		}
		else
		{		 
  			$this->Session->setFlash('Invalid login details! Please try again.');		
  			//$this->redirect(array('controller'=>'admins','action'=>'admin_login'), null, true);
		}
	}
}


function admin_logout()
{
	$this->Session->write('admin',array());	
	$this->Session->setFlash('You have successfully logged out from the system.');
	$this->redirect(array('controller'=>'admins','action'=>'admin_login'), null, true);
}

	

 
function admin_changePassword()
{
  $this->layout = 'admin';
	 $this->checkPermissionAdmin();
   
  if (!empty($this->data)) {   
   
   if($this->data['Admin']['oldpassword']=='' || $this->data['Admin']['password']=='')
   {
      $this->Session->setFlash('Invalid Old Password.');
	  	  $this->redirect(array('controller'=>'admins','action'=>'changePassword'), null, true);
   }
   
   $password = base64_encode($this->data['Admin']['oldpassword']);
   $rUser = $this->Admin->find('all', array('conditions' => array('Admin.id'=> $_SESSION['admin']['id'],'Admin.password'=> $password), 'fields' => array('id', 'email', 'created')));

   if(sizeof($rUser)>0)
   {
   $this->data['Admin']['password'] = base64_encode($this->data['Admin']['password']);   
   $this->data['Admin']['con_password'] = base64_encode($this->data['Admin']['con_password']);   
   $this->data['Admin']['id'] = $_SESSION['admin']['id'];   
    
			if ($this->Admin->save($this->data)) {			 
				$this->Session->setFlash('Password changed successfully.');
	  	$this->redirect(array('controller'=>'admins','action'=>'admin_adminedit'), null, true);
			}
			
   }
   else 
   {
    $this->Session->setFlash('Invalid Old Password.');
	  	$this->redirect(array('controller'=>'admins','action'=>'changePassword'), null, true);
   }
			
			
  }
}




function admin_forgotPassword()
{
 $this->layout = null;
  if(!empty($this->data))
  {
     $getUser = $this->Admin->find('first', array('conditions' => array('Admin.email'=>$this->data['Admin']['email']), 'fields' => array('Admin.id','Admin.password','Admin.email')));  
     
     if($getUser)
     {
      $forgot_mail_data['password'] = base64_decode($getUser['Admin']['password']);
      $to_array = $getUser['Admin']['email'];
      $this->_sendForgotPassword(30,$forgot_mail_data, $to_array);
      $this->Session->setFlash('Your password is forward to your E-mail Address.');
      $this->redirect(array('controller'=>'admins','action'=>'successForgotPassword'), null, true);
     }
     else 
     {
      $this->Session->setFlash('Invalid E-mail Address.');
      $this->redirect(array('controller'=>'admins','action'=>'forgotPassword'), null, true);
     }
  }
}




    
    // mail on Manager register
    function _sendForgotPassword($template_id,$forgot_mail_data,$to_array)
    { 
      $p_mail = $s_mail ='';
       
      $emailresults 	= 	$this->Admin->query("SELECT * FROM email_templates WHERE id = '".$template_id."'");	
      if($emailresults[0]['email_templates']['enable']==1)
      {
       $subject		=	$emailresults[0]['email_templates']['subject'];		      
       $message		=	nl2br($emailresults[0]['email_templates']['matter']);     
              
       
       //replace Site details
       $sysresults 	  = 	$this->Admin->query("SELECT * FROM settings WHERE id = '1'");	
       $system_email	=	$sysresults[0]['settings']['system_email'];		
       $site_name		   =	$sysresults[0]['settings']['site_name'];		
       
       $message  =	str_replace('[site_name]',$site_name,$message);         
       $message  =	str_replace('[password]',$forgot_mail_data['password'],$message); 
       
       
       $headers  = "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
       $headers .= "From: ".$site_name." <".$system_email.">" . "\r\n";
 
      
       // Mail it
       mail($to_array, $subject, $message, $headers);   
      }  
    } 
    
    
     
    
    

	function admin_randomkeys()
 {
      $pattern = "1R2Q3P4L5O678M9N0abTcXdWSefVghUiZjkYlKmAnoBpqrCIsJtDuFvwExyGzH";
      $key     = ""  ;
      
      for($i=0;$i<10;$i++)
      {       $key   .=  $pattern{rand(0,15)}      ;     }
      
   
     return $key;
 }

function admin_successForgotPassword()
{
  $this->layout = null;
}


 function admin_deleteimage($id = null) {
	$this->checkPermissionAdmin();
	$this->layout ='admin';	

	if (!$id) {
		$this->Session->setFlash(__('Invalid id for User. ', true));
		$this->redirect(array('controller'=>'admins'));
	}
	else 
	{
	  $result      = $this->Admin->find('first', array('conditions'=>array('id'=>$id),'fields'=>array('id','imagename')));			
	  $destination = realpath('../../app/webroot/uploads/managers/').'/';
	  
	  if($result['Admin']['imagename']!="")
	  {
	     if(file_exists($destination.$result['Admin']['imagename']))
	     unlink($destination.$result['Admin']['imagename']);
	     
	     $data  = array( 'Admin' => array( 'id' => $id, 'imagename' => ''));
      $this->Admin->save( $data, false, array('imagename') );       
	  }
	  $this->redirect(array('action'=>'edit',$id));
	}
		
}


  function admin_downloads() 
  {
  	$this->checkPermissionAdmin();
  	$this->layout ='admin';	
  	
  	
  }

  
  
  function admin_trainings() 
  {
  	$this->checkPermissionAdmin();
  	$this->layout ='admin';	
  	
  	
  }

	
function admin_checkAdminExists($username=null)
{
  $this->autoRender=false;
	 $isExists=0;
	 $this->Admin->recursive = 0;	
	 $user = $this->Admin->find('first',array('conditions'=>array('Admin.username'=>$username)));
	 if(isset($user['Admin']['id'])){
	  $isExists=1; 
	 }
	 return $isExists;
}



	function admin_checkAdminEditExists($username=null,$uid=null)
{
  $this->autoRender=false;
	 $isExists=0;
	 $this->Admin->recursive = 0;	
	 $user = $this->Admin->find('first',array('conditions'=>array('Admin.username'=>$username,'Admin.id !='=>$uid)));
	 if(isset($user['Admin']['id'])){
	  $isExists=1; 
	 }
	 return $isExists;
}





// Titken Lipinski, 2007

function admin_LatLonPointUTMtoLL($f, $f1, $j) {
// $f = Northing
// $f1 = Easting
// $j: UTM ZONE (Danmark = 32)

$d = 0.99960000000000004; // scale along long0
$d1 = 6378137; // Polar Radius
$d2 = 0.0066943799999999998;

$d4 = (1 - sqrt(1 - $d2)) / (1 + sqrt(1 - $d2));
$d15 = $f1 - 500000;
$d16 = $f;
$d11 = (($j - 1) * 6 - 180) + 3;
$d3 = $d2 / (1 - $d2);
$d10 = $d16 / $d;
$d12 = $d10 / ($d1 * (1 - $d2 / 4 - (3 * $d2 * $d2) / 64 - (5 * pow($d2,3) ) / 256));
$d14 = $d12 + ((3 * $d4) / 2 - (27 * pow($d4,3) ) / 32) * sin(2 * $d12) + ((21 * $d4 * $d4) / 16 - (55 * pow($d4,4) ) / 32) * sin(4 * $d12) + ((151 * pow($d4,3) ) / 96) * sin(6 * $d12);
$d13 = rad2deg($d14);
$d5 = $d1 / sqrt(1 - $d2 * sin($d14) * sin($d14));
$d6 = tan($d14) * tan($d14);
$d7 = $d3 * cos($d14) * cos($d14);
$d8 = ($d1 * (1 - $d2)) / pow(1 - $d2 * sin($d14) * sin($d14), 1.5);
$d9 = $d15 / ($d5 * $d);
$d17 = $d14 - (($d5 * tan($d14)) / $d8) * ((($d9 * $d9) / 2 - (((5 + 3 * $d6 + 10 * $d7) - 4 * $d7 * $d7 - 9 * $d3) * pow($d9,4) ) / 24) + (((61 + 90 * $d6 + 298 * $d7 + 45 * $d6 * $d6) - 252 * $d3 - 3 * $d7 * $d7) * pow($d9,6) ) / 720);
$d17 = rad2deg($d17); // Breddegrad (N)
$d18 = (($d9 - ((1 + 2 * $d6 + $d7) * pow($d9,3) ) / 6) + (((((5 - 2 * $d7) + 28 * $d6) - 3 * $d7 * $d7) + 8 * $d3 + 24 * $d6 * $d6) * pow($d9,5) ) / 120) / cos($d14);
$d18 = $d11 + rad2deg($d18); // Længdegrad (Ø)
return array('lat'=>$d17,'lng'=>$d18);
}

function admin_abcd()
{

 $zip = $this->Admin->query("SELECT * FROM `tbl_zipcodes` WHERE id < 10000");
 foreach ( $zip as $zips)
 {
  
  $zipc  = $zips['tbl_zipcodes']['zip_code'];
  $zipid = $zips['tbl_zipcodes']['id'];
  
  $url = 'http://maps.google.com/maps/geo?q='.$zipc.',+UK&output=csv&sensor=false';
  $data = @file_get_contents($url);
  $result = explode(",", $data);
  
  //echo $result[0]; // status code
  //echo $result[1]; // accuracy  
  
  $this->Admin->query("UPDATE `tbl_zipcodes` SET `lat` = '".$result[2]."',`long` = '".$result[3]."' WHERE `id` = ".$zipid);
  echo  $zipid."<br>";
 }
}



}
?>