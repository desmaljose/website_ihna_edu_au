 <!-- Quick Shortcuts -->
     <div class="mainBox mainBoxborder">
     <div class="block">
      <!-- Header Block -->
      <div class="block_head" style="background:#cfebe9;">
       <h1 class="fleft">Main Admin Panel</h1>
      </div>
      <!-- Content Block -->
      <div class="block_content">
       <!-- Quick shorutcuts -->
    <div style="padding-top:10px; padding-left:5px; height:110px">
   <?php 

       if($_SESSION['admin']['role_id']==1)
       { ?>
         <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/settings/edit/1">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_settings.png" alt="Site Settings" /></span>
        <b>Site Settings</b>
       </a>
       </div>
<?php  } ?>
       <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/cms/index">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_text.png" alt="Content Management" /></span>
        <b>Content Management</b>
       </a>
       </div>
       
        
       <!-- 
        <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/course_categories/">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_globe.png" alt="ert" /></span>
        <b>Course Categories</b>
       </a>
       </div>
        
        <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/courses/">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_user.png" alt="ert" /></span>
        <b>Courses</b>
       </a>
       </div>
        -->
        
        
       <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/JobApplications/">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_globe.png" alt="ert" /></span>
        <b>Jobs</b>
       </a>
       </div>
        
        
        
        
        
      <?php /*?>
               
       <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/admins/">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_user.png" alt="ert" /></span>
        <b>Administrators</b>
       </a>
       </div>
               <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/users/">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_user.png" alt="ert" /></span>
        <b>Users</b>
       </a>
       </div>
       </div>
       <br>
          <div style=" padding-top:10px; padding-left:5px; height:110px">       
       <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL?>admin/testimonials" >
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_globe.png" alt="blog" /></span>
        <b>Testimonials</b>
       </a>
       </div>
       <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/latestnews/">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_info.png" alt="ert" /></span>
        <b>Latest News</b>
       </a>
       </div>
                
       <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/course_categories/">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_user.png" alt="ert" /></span>
        <b>Course Categories</b>
       </a>
       </div>
       
       <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/courses/">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_user.png" alt="ert" /></span>
        <b>Courses</b>
       </a>
       </div>
       <?php */?>
       
      </div>
       
       
      </div>      
      </div>      </div>


      
      