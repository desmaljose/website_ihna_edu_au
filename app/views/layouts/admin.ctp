<?php echo $this->element('sql_dump'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin: <?php echo $meta_title;?></title>
<?php
	echo $html->charset();
	echo $html->meta('keywords',$meta_keywords); 
	echo $html->meta('description',$meta_description); 
	echo $html->meta('icon');	
?>
<?php echo $html->css(array('themes','layout','cake.generic')); ?>
<?php e($javascript->link(array('jquery','jquery.admin'))); ?>
<?php echo $scripts_for_layout; ?>
<script> var baseurl ='<?php echo WEB_URL;?>'; </script>

</head>
<body>
<!-- ******** Page Wrapper Starts******* -->
<div class="pageWrapper">
   <!-- ******** Page Header Starts******* -->
   <div class="pageHeader">
     <!--Site Logo-->
     <div class="logo">
     <span><a href="<?php echo WEB_URL;?>admin/admins/"><img src="<?php echo WEB_URL;?>img/logo.png" width="100" alt="IHNA" title="IHNA" /></a></span>
     <a class="viewWebsite curveEdges" target="_blank" href="<?php echo WEB_URL;?>">Website Front-End</a>
     </div>
     <!--Admin Login Infos-->
     <div class="loginInfos"> 
     <p>Hello <strong><?php echo $_SESSION['admin']['username']; ?></strong>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a title="Edit your profile" href="<?php echo WEB_URL;?>admin/admins/adminedit">Edit your profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a title="Log out" href="<?php echo WEB_URL;?>admin/admins/logout">Log out</a></p>
     <p>Last Login: <?php echo date("d M Y",strtotime($_SESSION['admin']['last_login']));  ?></p>
     </div>
     <!--Admin Main Navigation -->
    <div class="siteNav"> 
       <ul> 
       <?php (strstr($_SERVER['QUERY_STRING'],'admins'))? $menu_flg='selected': $menu_flg=''; ?>
       <li  class="<?php echo $menu_flg;?> "><a href="<?php echo WEB_URL;?>admin/admins">Home</a></li> 

       <?php (strstr($_SERVER['QUERY_STRING'],'settings/edit'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/settings/edit/1">Site Settings</a></li> 

       <?php (strstr($_SERVER['QUERY_STRING'],'cms/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/cms/">CMS</a></li> 
 
       <!--
       <?php (strstr($_SERVER['QUERY_STRING'],'course_categories/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/course_categories/">Course Categories</a></li> 
       -->
<?php 
if(strstr($_SERVER['QUERY_STRING'],'JobApplications')||strstr($_SERVER['QUERY_STRING'],'JobDetails')||strstr($_SERVER['QUERY_STRING'],'JobProviderDetails')||strstr($_SERVER['QUERY_STRING'],'JobCategories')){
    $menu_flg='selected';
}else{
    $menu_flg='';
}
?>

       
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/JobApplications/">Jobs</a></li>        

       
       <!--
       <?php (strstr($_SERVER['QUERY_STRING'],'courses/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/courses/">Courses</a></li> 
       -->
       
         <?php /*?>
       <?php (strstr($_SERVER['QUERY_STRING'],'testimonials/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/testimonials/">Testimonials</a></li> 
        <?php (strstr($_SERVER['QUERY_STRING'],'latestnews/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/latestnews/">Latest News</a></li> 
<?php (strstr($_SERVER['QUERY_STRING'],'careers/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/careers/">Careers</a></li> 
       <?php (strstr($_SERVER['QUERY_STRING'],'users/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/users/">Users</a></li> 
<?php (strstr($_SERVER['QUERY_STRING'],'image_categories/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/image_categories/">Image Categories</a></li> 
<?php (strstr($_SERVER['QUERY_STRING'],'image_gallery/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/image_galleries/">Gallery</a></li> 
<?php (strstr($_SERVER['QUERY_STRING'],'applyonline_payments/'))? $menu_flg='selected': $menu_flg=''; ?>
       <li class="<?php echo $menu_flg;?>"><a href="<?php echo WEB_URL;?>admin/applyonline_payments/">Course Payments</a></li> 
<?php */?>
       </ul>
    </div>

</div> 
   <!--SubNavigation-->
   <!--      <div class="subNav clear"> <?php  /*echo $submenu;*/ ?>     </div>     -->
   
   </div>
   <!-- ******** Page Header Ends Content Area Starts*******-->
   
   <div class="contentWrapper">
   
    	 <?php echo $content_for_layout ?> 
     
   </div>
   
   <!-- ********Content Area Ends & Page Footer Starts*******-->
   <div class="pageFooter">
    <p>&copy; 2011 All Rights Reserved ihnamalaysia.com.my</p>
   </div>
   <!-- ******** Page Footer Ends******* -->
</div>
<!-- ******** Page Wrapper Ends******* -->

<?php echo $google_analytics; ?>

</body>
</html>

