
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TheRental Admin Console - Login</title>
<?php echo $html->css(array('layout','cake.generic')); ?>
</head>

<body id="login">
		
		<div id="login-wrapper" style="width:500px;">
    <div id="login-top">
     <h1>Forgot Password</h1>
    </div> <!-- End #logn-top -->
			
			
			<div id="login-content">
    <div class="bg_adminlogin">
    <table width="100%" border="0" cellspacing="2" cellpadding="0">      

        <tr>
          <td height="50" colspan="2" align="center" valign="middle" class="red13"><?php  echo $session->flash(); ?> </td>
        </tr>  
        
            <tr>
              <td height="20" align="left" valign="middle"> <b><?php echo $html->link('Sign In',array('controller'=>'admins', 'action'=>'login')); ?> </b> </td>
              <td height="20" align="right" valign="middle"></td>
            </tr>
          </table>
    </td>
        </tr>
      </table>
      </form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
  </body>

</html>