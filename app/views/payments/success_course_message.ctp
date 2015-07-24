<!-- Google Code for Enquiry Conversion Page -->
 <script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1043783544;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "bMEACO7y1QIQ-L7b8QM"; var google_conversion_value = 0; if (1) {
   google_conversion_value = 1;
}
/* ]]> */
</script>
<script type="text/javascript"  
src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="http://www.googleadservices.com/pagead/conversion/1043783544/?value=1&amp;label=bMEACO7y1QIQ-L7b8QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php
/*$i_amnt = substr($amount,0,-2);
$d_amnt = substr($amount,-2,strlen($amount));
$r_amnt = $i_amnt.'.'.$d_amnt;*/
if(@$trnsCode=="0")
{
?>
<div class="container_wrap">
	<div class="container">      
		<h1 style="margin-top:20px;">Pay Online Completed</h1>
        <div class="line"></div> 
  <div class="feedback_out_bor" style="height:auto">
    <div class="feedback_outer" style="height:200px">
    <p> Your transaction has been completed. Please find the details below, <br /></p>    
    <p>Payment Status: <?php echo @$transMsg; ?></p>
    <p>Amount:<?php echo '(AUD$): '. @$paidamount;?>    </p>
  
    </div>
  </div>
<div class="clear"></div>
<!------------------------------------------------------------------------------->
        </div><div class="clear"></div>
   </div><div class="clear"></div>
<!-------------------------------------container_wrap ends and sub_container_wrap starts here--------------------------------------->

<?php
}
else
{
?>
<div class="container_wrap">
	<div class="container">      
		<h1 style="margin-top:20px;">Pay Online</h1>
        <div class="line"></div> 
  <div class="feedback_out_bor" style="height:auto" >
    <div class="feedback_outer" style="height:200px" align="center"><br>
    <p>Payment process has not been completed....!   Please try again. <br /></p>    
    <p>Payment Status: <?php echo @$transMsg; ?></p>    
    </div>
  </div>
<div class="clear"></div>
<!------------------------------------------------------------------------------->
        </div><div class="clear"></div>
   </div><div class="clear"></div>
<!-------------------------------------container_wrap ends and sub_container_wrap starts here--------------------------------------->

<?php
}

?>