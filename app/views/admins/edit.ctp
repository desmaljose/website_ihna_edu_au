<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Edit Property Manager');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
      <?php  echo $session->flash(); ?> 
      </div>
      <?php echo $form->create('Admin',array('enctype'=>'multipart/form-data'));?>

	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('firstname',array('id'=>'Firstname'));
		echo $form->input('lastname',array('id'=>'Lastname'));
		echo $form->input('username',array('id'=>'Username','readonly'=>'readonly'));	
		if($_SESSION['admin']['userlevel']==1)
		{
		echo $form->input('password',array('readonly'=>true,'type'=>'text','value'=>base64_decode($this->data['Admin']['password'])));
		}
		echo $form->input('email',array('id'=>'Email'));			
	?>
	</fieldset>
<input type="submit" value="Submit"/>
<?php  echo $form->button('Cancel', array('onclick' => "Javascript:history.go(-1);"));?>
</form>
</div></div></div> </div> 