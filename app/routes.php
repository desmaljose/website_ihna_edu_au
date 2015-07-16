<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */

    Router::connect('/', array('controller' => 'cms', 'action' => 'home', 'home'));
    Router::connect('/image_gallery', array('controller' => 'cms', 'action' => 'image_gallery'));
    Router::connect('/video_gallery', array('controller' => 'cms', 'action' => 'video_gallery'));
	
    Router::connect('/international', array('controller' => 'courses', 'action' => 'international'));

	
    Router::connect('/students', array('controller' => 'cms', 'action' => 'students'));    
    Router::connect('/contact', array('controller' => 'cms', 'action' => 'contact'));
    Router::connect('/enquiries', array('controller' => 'cms', 'action' => 'enquiry'));
    Router::connect('/application_form/*', array('controller' => 'pages', 'action' => 'application_form'));
    Router::connect('/helpdesk/support_admin', array('controller' => 'pages', 'action' => 'support_admin'));   
    Router::connect('/helpdesk/mwt_support', array('controller' => 'pages', 'action' => 'mwt_support'));   
    Router::connect('/helpdesk/support', array('controller' => 'pages', 'action' => 'support'));   
    Router::connect('/helpdesk/frontsupport/*', array('controller' => 'pages', 'action' => 'front_support')); 
    Router::connect('/helpdesk/mwtsupport_status/*', array('controller' => 'pages', 'action' => 'mwtsupport_status')); 
   
   
    Router::connect('/courses', array('controller' => 'courses', 'action' => 'index'));   
		
   
    Router::connect('/quick_application_form/*', array('controller' => 'pages', 'action' => 'quick_application_form'));



// Old Payment redirection
Router::connect('/courses/pay_online', array('controller' => 'payments', 'action' => 'invoice_payment'));    
        
        
        
  // course based SEO urls
        
  // HLT51612 Diploma of Nursing (Enrolled-Division 2 Nursing)
  Router::connect('/courses/viewdetails/Nursing/Diploma-of-Nursing/*', array('controller' => 'courses', 'action' => 'details', 11));
  Router::connect('/courses/Diploma-of-Nursing/*', array('controller' => 'courses', 'action' => 'details', array(11,1)));
  
  // Initial Registration for Overseas Registered Nurses
 Router::connect('/courses/viewdetails/Nursing/Initial-Registration-for-Overseas-Registered-Nurses/*', array('controller' => 'courses', 'action' => 'details', 32));
  Router::connect('/courses/Initial-Registration-for-Overseas-Registered-Nurses/*', array('controller' => 'courses', 'action' => 'details', array(32,1)));  
  
  // HLT32512 CERTIFICATE III IN HEALTH SERVICES ASSISTANCE (ACUTE CARE) 
  Router::connect('/courses/viewdetails/Health-Services/Certificate-III-in-Health-Services-Assistance-(Assisting-in-nursing-work-in-acute-care)/*', array('controller' => 'courses', 'action' => 'details', 20));
  Router::connect('/courses/Certificate-III-in-Health-Services-Assistance(Assisting-in-nursing-work-in-acute-care)/*', array('controller' => 'courses', 'action' => 'details', array(20,1)));
  
  // HLT32512 CERTIFICATE III IN HEALTH SERVICES ASSISTANCE 
  Router::connect('/courses/viewdetails/Health-Services/Certificate-III-in-Health-Services-Assistance/*', array('controller' => 'courses', 'action' => 'details', 16));
  Router::connect('/courses/Certificate-III-in-Health-Services-Assistance/*', array('controller' => 'courses', 'action' => 'details', array(16,1)));  
  
  // CHC40312 CERTIFICATE IV IN DISABILITY 
  Router::connect('/courses/viewdetails/Health-Services/Certificate-IV-in-Disability/*', array('controller' => 'courses', 'action' => 'details', 15));
  Router::connect('/courses/Certificate-IV-in-Disability/*', array('controller' => 'courses', 'action' => 'details', array(15,1)));   
  
  // CANNULATION FOR NURSES
  Router::connect('/courses/viewdetails/Professional-Development/Intravenous-Cannulation/*', array('controller' => 'courses', 'action' => 'details', 14));
  
  // REGISTERED NURSE REFRESHER PROGRAM
  Router::connect('/courses/viewdetails/Online-Nursing/Registered-Nurse-Refresher-Program/*', array('controller' => 'courses', 'action' => 'details', 26));  
  
// MANUAL HANDLING (REFRESHER PROGRAM)
  Router::connect('/courses/viewdetails/Online-Professional-Development/Manual-Handling/*', array('controller' => 'courses', 'action' => 'details', 55)); 
  
// MANUAL HANDLING
  Router::connect('/courses/viewdetails/Professional-Development/Manual-Handling/*', array('controller' => 'courses', 'action' => 'details', 21));  
  
  // Certificate-III-in-Aged-Care
  Router::connect('/courses/viewdetails/Health-Services/Certificate-III-in-Aged-Care-(PCA-Course)/*', array('controller' => 'courses', 'action' => 'details', 13));
  Router::connect('/courses/Certificate-III-in-Aged-Care-(PCA-Course)/*', array('controller' => 'courses', 'action' => 'details', array(13,1)));
  
  // Registered Nurse Re-Entry to Practice Program
 Router::connect('/courses/viewdetails/Nursing/Registered-Nurse-Re-entry-to-Practice-Program/*', array('controller' => 'courses', 'action' => 'details', 25));
 
   
 /// 
     // Certificate III in Home and Community Care
 Router::connect('/courses/viewdetails/Health-Services/Certificate-III-in-Home-and-Community-Care/*', array('controller' => 'courses', 'action' => 'details', 17));  
   // Certificate IV in Aged Care
 Router::connect('/courses/viewdetails/Health-Services/Certificate-IV-in-Aged-Care/*', array('controller' => 'courses', 'action' => 'details', 18)); 
    // Certificate IV in Home and Community Care
 Router::connect('/courses/viewdetails/Health-Services/Certificate-IV-in-Home-and-Community-Care/*', array('controller' => 'courses', 'action' => 'details', 19)); 
 
 //Medication Administration for Enrolled Nurses
  Router::connect('/courses/viewdetails/Nursing/Medication-Administration-for-Enrolled-Nurses/*', array('controller' => 'courses', 'action' => 'details', 60)); 
  
  //Transition to the Diploma of Nursing (Enrolled Division 2 nursing)
  Router::connect('/courses/viewdetails/Nursing/Transition-to-the-Diploma-of-Nursing/*', array('controller' => 'courses', 'action' => 'details', 61));
 
   //Medication assistance skill set
  Router::connect('/courses/viewdetails/Skill-Sets/Medication-assistance-skill-set/*', array('controller' => 'courses', 'action' => 'details', 24)); 
   //International English Language Testing System(IELTS)
  Router::connect('/courses/viewdetails/English-Course/IELTS-Coaching/*', array('controller' => 'courses', 'action' => 'details', 28));  
  
    //Course in Micro-Suction and Aural Hygiene
  Router::connect('/courses/viewdetails/Short-Courses/Course-in-Micro-suction-and-Aural-Hygiene/*', array('controller' => 'courses', 'action' => 'details', 36));   
  
 ///
  
  
  
  
// LANDING PAGE REDIRECTION
  
// Initial Registration for Overseas Registered Nurses
  Router::connect('/enquireonline/landing/1/Initial-Registration-for-Overseas-Registered-Nurses(IRON)/*', array('controller' => 'pages', 'action' => 'landing', 32));
  
  // HLT32512 CERTIFICATE III IN HEALTH SERVICES ASSISTANCE (ACUTE CARE) 
  Router::connect('/enquireonline/landing/100/Certificate-III-in-Health-Services-Assistance-(Assisting-in-nursing-work-in-acute-care)/*', array('controller' => 'pages', 'action' => 'landing', 20));
  
  // CHC40312 CERTIFICATE IV IN DISABILITY 
  Router::connect('/enquireonline/landing/16/Certificate-IV-in-Disability/*', array('controller' => 'pages', 'action' => 'landing', 15));
  
  // HLT51612 Diploma of Nursing (Enrolled-Division 2 Nursing)
  Router::connect('/enquireonline/landing/3/Diploma-of-Nursing-(Enrolled-Division-2-nursing)/*', array('controller' => 'pages', 'action' => 'landing', 11));

// REGISTERED NURSE RE-ENTRY TO PRACTICE PROGRAM
  Router::connect('/enquireonline/landing/2/Registered-Nurse-Re-entry-to-Practice-Programs/*', array('controller' => 'pages', 'action' => 'landing', 25));

 // REGISTERED NURSE REFRESHER PROGRAM 
  Router::connect('/enquireonline/landing/2/enquireonline/landing/101/Registered-Nurse-Refresher-Programs/*', array('controller' => 'pages', 'action' => 'landing', 26));
  
 // CHC30212 CERTIFICATE III IN AGED CARE 
  Router::connect('/enquireonline/landing/14/Certificate-III-in-Aged-Care/*', array('controller' => 'pages', 'action' => 'landing', 13));    


  
  
        
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
  // Router::connect('/', array('controller' => 'cms', 'action' => 'home', 'home'));
  // Router::connect('/ihna_profile/', array('controller' => 'cms', 'action' => 'ihna_profile'));
 
Router::connect('/admin/:controller/:action/*', array('admin' => true, 'prefix' => 'admin', 'controller' => 'admins', 'action' => 'index'));

$Post = ClassRegistry::init('Cm');
$rows = $Post->find('all',array('conditions'=>array('Cm.enable'=>1, 'Cm.seo_url !=' => '')));
foreach($rows as $row)
        {   
    Router::connect('/'.$row['Cm']['seo_url'], array('controller' => 'cms', 'action' => 'content', $row['Cm']['id'] ));
}        