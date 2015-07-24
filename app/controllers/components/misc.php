<?php
	
	class MiscComponent extends Object { 
	 
    var $controller = null;	
    var $helpers = array('Common');
    var $components = array('Session');
    
    function startup(&$controller)
    {
    	$this->controller = $controller;
   	}  
	
   	
   	
   	
   	
   	 	
   	function getCmsDetails($id=null)
    {
     $rslt=array();
     
    		$results 	= 	$this->controller->{$this->controller->modelNames[0]}->query("SELECT * FROM `cms` WHERE id = ".$id);	
    		if($results)
    		{ 		 $rslt =	$results[0]['cms'];			    		}	    		
     
		  return $rslt;
    }  
    
    
   	function getSettingsDetails()
    {
     $rslt=array();
     
    		$results 	= 	$this->controller->{$this->controller->modelNames[0]}->query("SELECT * FROM `settings` WHERE id = 1");	
    		if($results)
    		{ 		 $rslt =	$results[0]['settings'];			    		}	    		
     
		  return $rslt;
    }   
    
	
    function badgeDetails($id = null)
    {
     $rslt=array();       
     $badge_details = $this->controller->{$this->controller->modelNames[0]}->query("SELECT badges.* FROM `badges` WHERE `badges`.id = '".$id."'");
    	if($badge_details)
    		{ 		 $rslt =	$badge_details[0];			    		}	    		
    		return $rslt;    
    }
    
    
    
    
    function memberLeftPanel()
    {
     $rslt=array();       
  
      $badge_purchased = $this->controller->{$this->controller->modelNames[0]}->query("SELECT `user_badges`.badge_id FROM `user_badges` WHERE  `badge_mode` = 'PayPal' AND `user_id`=".$_SESSION['user']['id']);
	     $badge_earned = $this->controller->{$this->controller->modelNames[0]}->query("SELECT `user_badges`.badge_id FROM `user_badges` WHERE `badge_mode` = 'Earned' AND `user_id`=".$_SESSION['user']['id']);
	     $rslt['user_badges']= array_merge($badge_purchased,$badge_earned);
	      
          	
      $user_details = $this->controller->{$this->controller->modelNames[0]}->query("SELECT * FROM `users` WHERE `id`=".$_SESSION['user']['id']);
	     
      if($user_details)
    		{ $rslt['users']= $user_details[0]['users'];     		}
	        		
    		return $rslt;    
    }
   
    
    
    
    
    function getAllTherapyTypes()
    {
     $rslt=array();
     
    		$results 	= 	$this->controller->{$this->controller->modelNames[0]}->query("SELECT * FROM `therapist_types` WHERE enable = 1");	
    		if($results)
    		{
 
    		 foreach ($results as $result)
    		 {		
    		     $rslt[$result['therapist_types']['id']] =	$result['therapist_types']['title'];	    		    
    		 }   
    		}	   
     		
 
		  return $rslt;
    }    
    

    
    
    
	
    function getCostDetails($id = NULL)
    {
     $rslt=array();
     if($id)
     {
    		$results 	= 	$this->controller->{$this->controller->modelNames[0]}->query("SELECT * FROM `costs` WHERE id = '".$id."'");	
    
    		if($results)
    		{ 		 $rslt =	$results[0]['costs']['cost'];			    		}	    		
     }
		  return $rslt;
    }    
    
    
     
    
	
    function getProblemDetails($id = NULL)
    {
     $rslt='';
     if($id)
     {
      $ids = str_replace(",,",",",$id);      
      $ids = substr($ids,1,-1);
   
    		$results 	= 	$this->controller->{$this->controller->modelNames[0]}->query("SELECT * FROM `problems` WHERE id IN(".$ids.")");	
    		if($results)
    		{
    		 foreach ($results as $rsl)
    		 {
    		  $rslt .= $rsl['problems']['problem'].', ';    		  
    		 }   		 
    		}	    		
     }
		  return substr($rslt,0,-2);
    }    
    
    
    
       
    
     function clientType($key = null)
     { 
      $val='';
      if(strstr($key,',1,'))
      { $val.='Adult / ';  }
        
      if(strstr($key,',2,'))
      { $val.='Adolescent / ';  }
      
      if(strstr($key,',3,'))
      { $val.='Child / ';  }
      
      	return substr($val,0,-2);
     }	
     
       
     
     
        
    function statUpdate($id = NULL,$key= NULL)
    {     
     if($id)
     {
    		$results 	= 	$this->controller->{$this->controller->modelNames[0]}->query("SELECT * FROM `statistics` WHERE `therapist_id` = '".$id."' AND `created` = curdate() ");	
    		if($results)
    		{    
       		 switch($key)
       		 {
         		 case 'search':
             $this->controller->{$this->controller->modelNames[0]}->query("UPDATE `statistics` SET `search_result` = `search_result` + 1 WHERE `id` = ".$results[0]['statistics']['id']);
             break;
         		
         		 case 'profile':
             $this->controller->{$this->controller->modelNames[0]}->query("UPDATE `statistics` SET `profile_view` = `profile_view` + 1  WHERE `id` = ".$results[0]['statistics']['id']);
         	   break;
         	   
         		 case 'click':
             $this->controller->{$this->controller->modelNames[0]}->query("UPDATE `statistics` SET `click_thru` = `click_thru` + 1 WHERE `id` = ".$results[0]['statistics']['id']);
             break;
             
         		 case 'email':
             $this->controller->{$this->controller->modelNames[0]}->query("UPDATE `statistics` SET `mail_sent` = `mail_sent` + 1  WHERE `id` = ".$results[0]['statistics']['id']);
             break;
           }    		
    		}	  
    		else 
    		{	 
    		 
    		  switch($key)
       		 {
         		 case 'search':
             $this->controller->{$this->controller->modelNames[0]}->query("INSERT INTO `statistics` (`therapist_id` , `search_result`, `created` ) VALUES ('".$id."', '1',now())");
             break;
             
         		 case 'profile':
             $this->controller->{$this->controller->modelNames[0]}->query("INSERT INTO `statistics` (`therapist_id` , `profile_view`, `created` ) VALUES ('".$id."', '1',now())");
         	   break;
         	   
         		 case 'click':
             $this->controller->{$this->controller->modelNames[0]}->query("INSERT INTO `statistics` (`therapist_id` , `click_thru`, `created` ) VALUES ('".$id."', '1',now())");
             break;
             
         		 case 'email':
             $this->controller->{$this->controller->modelNames[0]}->query("INSERT INTO `statistics` (`therapist_id` , `mail_sent`, `created` ) VALUES ('".$id."', '1',now())");
             break;
           }    
    		 
    		}
    		
 		    switch($key)
    		 {
      		 case 'search':
          $this->controller->{$this->controller->modelNames[0]}->query("UPDATE `settings` SET `search_performed` = `search_performed` + 1 WHERE 1");
          break;
      		
      		 case 'profile':
          $this->controller->{$this->controller->modelNames[0]}->query("UPDATE `statistics` SET `page_views` = `page_views` + 1 WHERE 1");
      	   break;
      	   
      		 case 'click':
          $this->controller->{$this->controller->modelNames[0]}->query("UPDATE `statistics` SET `click_thrus` = `click_thrus` + 1 WHERE 1");
          break;
          
      		 case 'email':
          $this->controller->{$this->controller->modelNames[0]}->query("UPDATE `statistics` SET `emails_sent` = `emails_sent` + 1 WHERE 1");
          break;
        }    
    		
    		
    		
    		  		
     }
     
     
     
		 
    }    
    
				/*
				* Function to retrive date in specific format. Inoput time string
				* case 0: // Output Format Nov 20, 2014 
				* case 1:    // Output Format Nov 20, 2014 11:19:44 PM 
				* case 2:    // Output Format 20-11-2014
				* case 3:    // Output Format 20-11-2014 11:27:03 PM
				* case 4:    // Output Format 20/11/2014 11:30 PM 
				* case 5:    // Output Format Nov 20, 2014 11:56 PM 
				* case 6:    // Output Format 11:56 PM 
				* case 7:    // Output Format Wed Nov 20, 2014 
				* default:  // Output Format Nov 20, 2014 
				* 
				*/
				function commonDateFormat($date = null, $formatFlag = 0) {
								if($date == "0000-00-00 00:00:00" || $date == "0000-00-00" || $date == null || $date == '')
												return ''; 
													
								$str_date = strtotime($date);
								switch($formatFlag) {
												case 0: // Output Format Nov 20, 2014
																				return date('M d, Y',$str_date);
																				break; 
																				
												case 1:    // Output Format Nov 20, 2014 11:19:44 PM 
																				return date('M d, Y h:i:s A',$str_date);
																				break; 
																				
												case 2:    // Output Format 20-11-2014
																				return date('d-m-Y',$str_date); 
																				break;      
																															
												case 3:    // Output Format 20-11-2014 11:27:03 PM
																				return date('d-m-Y h:i:s A',$str_date); 
																				break;
																				
												case 4:    // Output Format 20/11/2014 11:30 PM 
																				return date('d/m/Y h:i A',$str_date); 
																				break;
																				
												case 5:    // Output Format Nov 20, 2014 11:56 PM 
																				return date('M d, Y h:i A',$str_date); 
																				break;                               
																				
												case 6:    // Output Format 11:56 PM 
																				return date('h:i A',$str_date); 
																				break;
																				
												case 7: // Output Format Nov 20, 2014
																				return date('D M d Y',$str_date);
																				break;  
																				
												case 2:    // Output Format 20-11-2014
																				return date('Y-m-d',$str_date); 
																				break;                                    
																				
												default:  // Output Format Nov 20, 2014   
																				return date('M d, Y',$str_date); 
																				break;
								}
				}
 
}
?>