<?php
class CommonHelper extends HtmlHelper {
 
 
 function chkFlagAdmin($key = null)
 {   
 	$val='';
 	switch($key)
  	{
  	 case 0 : $val = $this->image('panel/icn_cross.png',array('alt'=>'No','title'=>'No'));break;
  	 case 1 : $val = $this->image('panel/icn_tic.png',array('alt'=>'Yes','title'=>'Yes'));break;
   }
  	return $val;
 }	 	 
 
  function chkFlag($key = null)
 {   
 	$val='';
 	switch($key)
  	{
  	 case 0 : $val = $this->image('icn_cross.gif',array('alt'=>'No','title'=>'No'));break;
  	 case 1 : $val = $this->image('icn_tic.gif',array('alt'=>'Yes','title'=>'Yes'));break;
   }
  	return $val;
 }	 	 
 
 
 function dateFormatWOM($date = null)
 {
  $str_date = strtotime($date);
		return date('M, Y',$str_date); 
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
function dateFormat($date = null, $formatFlag = 0) {
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
                
        default:  // Output Format Nov 20, 2014   
                return date('M d, Y',$str_date); 
                break;
    }
}
 
 
 function datetimeFormat($date = null)
 {
  		$str_date = strtotime($date);
		return date('M d, Y h:i:s A',$str_date); 
 }
 
 
 function moneyFormat($number = null)
 { 
  if(is_numeric($number))
  { 
   $number = round($number,2);
    return "$ ".$number;		
//   return "&#163;".$number;
  }
  else 
  { return $number; }
 }
 
 
   /* 
    * Use common helper method instead of misc component    
    * Function to strip character to an limit till space or dot.
    */
  function stripContent($content, $characters=100, $strip_till = ''){    
		if(strlen($content) > $characters){
			$text = substr($content,0,strrpos(substr($content,0,$characters),$strip_till));
		}else{
			$text = $content; 
		}
		return $text;
    }
    
				
				function courseURL($course_id, $student_type_id=0) {
								return $this->requestAction(array('controller' => 'courses', 'action' => 'course_url'), array('pass'=>array($course_id, $student_type_id)));
				}

 
}
?>