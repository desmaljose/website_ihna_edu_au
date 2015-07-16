<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Change Password');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
      <?php  echo $session->flash(); ?> 
      </div>
<?php echo $form->create('Admin',array('action'=>'changePassword'));?>
<fieldset>
<?php 
echo $form->input('oldpassword', array('type'=>'password','label'=>'Old Password','div'=>'required','id'=>"Old_Password")); 
echo $form->input('password', array('type'=>'password','id'=>"New_Password",'label'=>'New Password')); 
echo $form->input('con_password', array('type'=>'password','label'=>'Confirm Password','div'=>'required','id'=>"Confirm_Password",'value'=>""));
?> 

</fieldset>
<?php echo $form->end('Submit');?>
</div></div></div> </div> 
