<div id="breadcrumb">
        <?php
              $html->addCrumb('Dashboard',  '../' , array('class' => 'breadcrumblast')) ;  
              echo $html->getCrumbs('  > ', 'Home');
         ?>
</div>
   <div class="mainBox mainBoxborder">
     <div class="block">
      <!-- Header Block -->
      <div class="block_head" style="background:#cfebe9;;">
       <h1 class="fleft">Site Administrator</h1>
      </div>
      <!-- Content Block -->
      <div class="block_content">
       <!-- Quick shorutcuts -->
       <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>admin/settings/edit/1" title="Site Settings">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_settings.png" alt="Site Settings" /></span>
        <b>Site Settings</b>
       </a>
       </div>
       
         <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>roles" title="Role Management">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_role.png" alt="Role Management" /></span>
        <b>Role Management</b>
       </a>
       </div> 
       
        <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>modules" title="Module Management">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_module.png" alt="Module Management" /></span>
        <b>Module Management</b>
       </a>
       </div>
       
       <div class="quickShortcut fleft">
       <a href="<?php echo WEB_URL;?>newsletters" title="Newsletter Management">
        <span><img src="<?php echo WEB_URL;?>img/dashboard/icn_newsletter.png" alt="Newsletter Management" /></span>
        <b>Newsletter Management</b>
       </a>
       </div>
       
      </div>      
      </div>      
      </div>      </div>
   
  
      
      