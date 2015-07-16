<?php echo $this->element('sql_dump'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Console - Login</title>
<?php echo $html->css(array('layout','cake.generic')); 
echo $html->meta('icon',WEB_URL.'img/favicon.ico');	
?>
</head>

<body id="login">
		
		<div id="login-wrapper">
        <div class="topSection">
    
    <div class="clear"></div>
  </div>
  <div class="login_box">
    <div id="login-top">
     <h1>Administrator Login</h1>
    </div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form id="AdminLoginForm" name="AdminLoginForm" method="post" action="<?php echo $html->url('login/');?>">
				
					<?php  echo $session->flash(); ?>
					
					<p class="clear">
						<label>Username</label>
						<input name="data[username]" type="text" class="textboxblue" id="E-mail_Address"/>
					</p>

					<p class="clear">
						<label>Password</label>
						<input name="data[password]" type="password" class="textboxblue" id="Password" style="margin-bottom:10px !important;"/>
					</p>
                    <div style="border-bottom:1px solid #9ECFF8; padding-top:5px !important; clear:both; margin-bottom:15px;"></div>
					<p style="width:200px; float:left">
					<?php echo $html->link(__('Forgot Password?', true), array('controller'=>'admins','action' => 'forgotPassword')); ?>
					</p>

					
					<p style="float:right">
						 <input type="submit" class="sub_btn"  style="width:100px; float:right"  value="submit" name="submit">
					</p>
					
				</form>

			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		</div>
  </body>

</html>
