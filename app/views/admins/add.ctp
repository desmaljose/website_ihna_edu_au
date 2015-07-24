<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Add Property Manager');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
      <?php  echo $session->flash(); ?> 
      </div>
      <?php echo $form->create('Admin',array('enctype'=>'multipart/form-data'));?>

	<fieldset>
	<?php
		echo $form->input('firstname',array('id'=>'Firstname'));
		echo $form->input('lastname',array('id'=>'Lastname'));
		echo $form->input('username',array('id'=>'Username'));	
		echo $form->hidden('s_flag',array('id'=>'s_flag','value'=>0));
		echo $form->hidden('enable',array('value'=>1));
		echo $form->input('primary_email',array('id'=>'Primary_Email'));
		echo $form->input('secondary_email',array('id'=>'Secondary_Email'));
		echo $form->input('address',array('id'=>'Address'));
		echo $form->input('city',array('id'=>'City'));
		echo $form->input('state',array('id'=>'State'));
		echo $form->input('zip',array('id'=>'Zip'));
		echo $form->input('homephone',array('id'=>'Homephone'));
		echo $form->input('cellphone',array('id'=>'Cellphone'));
		echo $form->input('date_of_birth',array('minYear'=>date('Y')-110,'maxYear'=>date('Y')));
		echo $form->input('license_number',array('id'=>'License_Number'));
		echo '<div class="input text"><label for="SpeakMoreLanguages">Do you speak more than one language?</label>'.$form->radio('speak_more_languages', array('Yes'=>'Yes','No'=>'No'),array('legend'=>false,'default'=> "No",'onclick'=>'divDisplay("managers",this.value)')).'</div>	';				
		echo '<div class="input text" id="morelanguages" style="display:none;"><label for="Languages">If yes, which ones</label>'.$form->input('languages',array('label'=>false,'div'=>false)).'</div>	';				
		echo $form->input('year_experience',array('id'=>'Experience','label'=>'Year of Experience'));
		echo $form->input('bio');
		echo $form->input('picture',array('type'=>'file','label'=>'Upload Picture'));
	?>
	</fieldset>
<input type="submit" value="Submit"/>
<?php  echo $form->button('Cancel', array('onclick' => "Javascript:history.go(-1);"));?>
</form>
</div></div></div> </div> 