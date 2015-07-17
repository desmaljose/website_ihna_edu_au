<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Edit Profile');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
      <?php  echo $session->flash(); ?> 
      </div>
      <?php echo $form->create('Admin',array('id'=>'AdminEditForm','action'=>'admin_adminedit'));?>

	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('firstname',array('id'=>'First_Name'));
		echo $form->input('lastname',array('id'=>'Last_Name'));
		echo $form->input('username',array('id'=>'Username','readonly'=>'readonly'));	
		echo $form->input('email',array('id'=>'Email'));			
	?>
	<div class="input text"><label for="Password">Password</label>
	<a href="<?php echo WEB_URL;?>admin/admins/changePassword">Change Password</a>
	</div>
	</fieldset>
<input type="submit" value="Submit"/>
<?php  echo $form->button('Cancel', array('onclick' => "Javascript:window.location='".WEB_URL."admin/admins/';"));?>
</form>
</div></div></div> </div> 