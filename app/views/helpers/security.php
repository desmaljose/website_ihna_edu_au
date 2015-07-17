<?php
class SecurityHelper extends HtmlHelper {

    function randomSecurity($length)
    {
        $_rand_src = array(
		array(48,57) //digits
		, array(97,122) //lowercase chars
//		, array(65,90) //uppercase chars
	);
	srand ((double) microtime() * 1000000);
	$random_string = "";
	for($i=0;$i<$length;$i++){
		$i1=rand(0,sizeof($_rand_src)-1);
		$random_string .= chr(rand($_rand_src[$i1][0],$_rand_src[$i1][1]));
	}
	return $random_string;
    }


    function randomNumbering($length=9)
    {
        $charecter = 'abc12def0987xyz6mno54jqp3sk';

        $urlsecure = '';

        for($i=0;$i<$length;$i++)
        {
            $urlsecure .=  $charecter[(rand() % strlen($charecter))];
        }

        return $urlsecure;
    }
    
    function redirection($page=NULL)
    {
        if($page != NULL)
        {
            echo "<script>window.location.href='" . $page . "';</script>";
        }
    }

    function autoRedirect()
    {
        //echo "yess";
        echo "<script>window.location.href='" . LOCAL_URL_ADMIN . "admins'</script>";
    }    
    
}
?>