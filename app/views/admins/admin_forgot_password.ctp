
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TheRental Admin Console - Login</title>
<?php echo $html->css(array('layout','cake.generic')); ?>
</head>

<body id="login">
	<div id="login-wrapper">
         	<div class="topSection">
            	<div class="clear"></div>
  			</div>
            <div class="login_box">
                <div id="login-top">
                    <h1>Forgot Password</h1>
                </div> <!-- End #logn-top -->
                        

    
		
			<div id="login-content">
				
			<?php echo $form->create('Admin',array('action'=>'forgotPassword')); ?>  		<?php  echo $session->flash(); ?>
					
					<p class="clear">
						<label>Email ID : </label>
						<input type="text" size="30" value="" id="E-mail_Address" class="textboxblue" style="margin-bottom:10PX !important" name="data[Admin][email]"/>
					</p>
                    
					<div style="border-bottom:1px solid #9ECFF8; padding-top:5px !important; clear:both; margin-bottom:15px;"></div>
					<p style="width:200px; float:left">
					<b><?php echo $html->link('Sign In',array('controller'=>'admins', 'action'=>'login')); ?> </b>
					</p>
                    
					<p style="float:right">
						 <input type="submit" class="sub_btn" style="width:100px;"  value="submit" name="submit">
					</p>
   <?php /*?> <table align="center" width="100%">
			 <tr>
              <td height="20" align="left" valign="middle"> <b><?php echo $html->link('Sign In',array('controller'=>'admins', 'action'=>'login')); ?> </b> </td>
              <td height="20" align="right" valign="middle"></td>
     </tr>
     </table><?php */?>	
				</form>

			</div>
			 
		</div>	
		</div> <!-- End #login-wrapper -->
		
  </body>

</html>