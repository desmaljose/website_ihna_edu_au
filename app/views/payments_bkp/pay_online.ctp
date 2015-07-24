
<div class="row"> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1 style="margin-top:20px;">Pay Online</h1>


 <br />
   		<p>IHNA Pay Online offers convenient and secured payments for our students. Students are required to enter "Student ID", Invoice Number and Amount for valid transaction. 
        Once the payment is successful, we will send you a payment receipt. Your payment status will be also available through your student login within 24 hours.</p>
                <br />
        <p><b>Please make sure that you enter valid Student ID, Invoice Number and the exact Amount to be transferred</b></p>
        <br />

        <form action="<?php echo WEB_URL; ?>payments/payonlinesubmit" method="post" name="onlinepayment" id="onlinepayment" onsubmit="return fsubmit();" class="form-horizontal">
            
            
              <div class="form-group">
    <label for="course_name" class="col-sm-3 control-label">Student Name</label>
    <div class="col-sm-7">
        <input name="cname" type="text" class="form-control" id="cname" value="<?php echo @$cname; ?>" size="45"  maxlength="80"/>
    </div>
  </div>
          
            <div class="form-group">
    <label for="course_name" class="col-sm-3 control-label">Student ID</label>
    <div class="col-sm-7">
        <input name="cnumber" type="text" class="form-control" id="cnumber" value="<?php echo @$cnumber; ?>" size="45"  maxlength="80"/>
    </div>
  </div>
            
            
            <div class="form-group">
    <label for="course_name" class="col-sm-3 control-label">Invoice Number</label>
    <div class="col-sm-7">
        <input name="inumber" type="text" class="form-control" id="inumber" value="<?php echo @$inumber; ?>" size="45"  maxlength="80"/>
    </div>
  </div>
            
            
            <div class="form-group">
    <label for="course_name" class="col-sm-3 control-label">Email ID</label>
    <div class="col-sm-7">
        <input name="emailid" type="text" class="form-control" id="emailid" value="<?php echo @$emailid; ?>" size="45"  maxlength="80"/>
    </div>
  </div>
            
            <div class="form-group">
    <label for="course_name" class="col-sm-3 control-label">Amount (AUD$)</label>
    <div class="col-sm-7">
        <input name="amount" type="text" class="form-control" id="amount" value="<?php echo @$amount; ?>" size="45"  maxlength="80" onblur="cleartax()"/> <br /> [ eg: X.XX ]
  <input type="hidden" name="txtTax" value="1.5" />  <!--Creditcard fees is 1.5%-->
  
    </div>
  </div>
            

            
                        <div class="form-group">
    <label for="course_name" class="col-sm-3 control-label">Card Type</label>
    <div class="col-sm-7">
        
        <div class="radio">
            <label><input type="radio" name="rdCardType" value="credit" onclick="calculatefees(this)">Credit Card</label> &nbsp;&nbsp;&nbsp;
            <label><input type="radio" name="rdCardType" value="debit" onclick="calculatefees(this)">Debit Card</label>
        </div>
        <br />[ An additional 1.5% of the amount will be charged from Creditcard users. ]  
    </div>
  </div>
            
            
 <div class="form-group">
    <label for="course_name" class="col-sm-3 control-label">Total amount ( Amount + Tax)</label>
    <div class="col-sm-7">
 <input name="txtFinalAmount" type="text" class="form-control" id="txtFinalAmount" value="" size="45"  maxlength="20" readonly="readonly"/>  
    </div>
  </div>
            

 <input type="hidden" name="vpc_Amount" value="" />
 
<!--  <input type="hidden" name="Title" value="PHP VPC 3-Party" />
  <input type="hidden" name="virtualPaymentClientURL" value="https://migs.mastercard.com.au/vpcpay" />
  <input type="hidden" name="vpc_Version" value="1" />
  <input type="hidden" name="vpc_Command" value="pay" />
  <input type="hidden" name="vpc_AccessCode" value="01DC3E0C" />
  <input type="hidden" name="vpc_MerchTxnRef" value="4309929" />
  <input type="hidden" name="vpc_Merchant" value="ANZIHNA" />
  <input type="hidden" name="vpc_OrderInfo" value="" />
  <input type="hidden" name="vpc_Amount" value="" />
  <input type="hidden" name="vpc_Locale" value="en" />
  <input type="hidden" name="vpc_ReturnURL" value="<?php echo WEB_URL; ?>courses/payonline-success/" />  -->

 
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-7">
        <button name="button" type="submit" class="btn btn-default">Proceed To Payment</button>
    </div>
  </div>

</form>
    
<div class="clear"></div>
</div>

</div>

<script>
function fsubmit()
{

	if(document.onlinepayment.cname.value=='')
	{
		alert("Pleas enter student name.");
		document.onlinepayment.cname.focus();
		return false;
	}
	
	if(document.onlinepayment.cnumber.value=='')
	{
		alert("Please enter student ID.");
		document.onlinepayment.cnumber.focus();
		return false;
	}
	
	
	if(document.onlinepayment.inumber.value=='')
	{
		alert("Please enter invoice number.");
		document.onlinepayment.inumber.focus();
		return false;
	}	
	
	if(document.onlinepayment.emailid.value=='')
	{
		alert("Please enter email ID.");
		document.onlinepayment.emailid.focus();
		return false;
	}	
	
	
/*	if(!isValidEmail(document.onlinepayment.emailid.value))
	{
		alert("Please enter valid Email ID.");
		document.onlinepayment.emailid.focus();
		return false;
	}*/
	 if(!(validateemail(document.onlinepayment.emailid.value)))
	{
		alert('Invalid email address');
		document.onlinepayment.emailid.focus();
		return false;		
	}	
	
	if(document.onlinepayment.amount.value=='')
	{
		alert("Please enter amount.");
		document.onlinepayment.amount.focus();
		return false;
	}	
	
	//moneyFormat(document.onlinepayment.amount);
		
	if(parseInt(document.onlinepayment.amount.value)==0)
	{
		alert("Please enter valid amount.");
		document.onlinepayment.amount.focus();
		return false;
	}
		
	if(!checkNum(document.onlinepayment.amount))
	{
		alert("Please enter valid amount.");
		document.onlinepayment.amount.focus();
		return false;
	}
	if((document.onlinepayment.rdCardType[0].checked==false) && (document.onlinepayment.rdCardType[1].checked==false))
	{
		alert("Please select your card type.");
		return false;	
	}
	
// section to calculate tax
   if(document.onlinepayment.rdCardType[0].checked==true)
   {
	var finalfee=parseFloat(document.onlinepayment.amount.value)+(parseFloat(document.onlinepayment.amount.value) * parseFloat(document.onlinepayment.txtTax.value)/ 100);
	document.onlinepayment.txtFinalAmount.value=roundNumber(finalfee,2);
   }
   else
   {
	   var finalfee=parseFloat(document.onlinepayment.amount.value);
	   document.onlinepayment.txtFinalAmount.value=roundNumber(finalfee,2);
   }
   moneyFormat(document.onlinepayment.txtFinalAmount);
   ///alert(document.onlinepayment.txtFinalAmount.value);
   //return false;		
    //document.applyonline_diploma.finalAmount.value=finalfee.toFixed(2);		
	
	//document.onlinepayment.vpc_Amount.value    = document.onlinepayment.amount.value;	
	//document.onlinepayment.vpc_OrderInfo.value = document.onlinepayment.inumber.value+'_'+document.onlinepayment.cnumber.value+'_'+document.onlinepayment.cname.value;	
		
}




/*function isValidEmail(str) 
{
   return (str.indexOf(".") > 2) && (str.indexOf("@") > 0);
}*/
function validateemail(email)
{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	// var address = document.forms[form_id].elements[email].value;
	//var address = document.applyonline_diploma.txtEmail.value;
	if(reg.test(email) == false)
	{
		//alert('Invalid Email Address');
		//document.applyonline_diploma.txtEmail.focus();
		return false;	
	}
	else
	{
		return true;
	}
}

function checkNum(x)
{
 
  var s_len=x.value.length ;
  var s_charcode = 0;
    for (var s_i=0;s_i<s_len;s_i++)
    {
    s_charcode = x.value.charCodeAt(s_i); 
     if(!(s_charcode>=48 && s_charcode<=57) && (s_charcode!=46))
      {        
          x.value='';
         x.focus();
        return false;
      }
    }
    return true;
}


function moneyFormat(textObj) {
   var newValue = textObj.value;
   var decAmount = "";
   var dolAmount = "";
   var decFlag = false;
   var aChar = "";
   
   // ignore all but digits and decimal points.
   for(i=0; i < newValue.length; i++) {
      aChar = newValue.substring(i,i+1);
      if(aChar >= "0" && aChar <= "9") {
         if(decFlag) {
            decAmount = "" + decAmount + aChar;
         }
         else {
            dolAmount = "" + dolAmount + aChar;
         }
      }
      if(aChar == ".") {
         if(decFlag) {
            dolAmount = "";
            break;
         }
         decFlag=true;
      }
   }
   
   // Ensure that at least a zero appears for the dollar amount.

   if(dolAmount == "") {
      dolAmount = "0";
   }
   // Strip leading zeros.
   if(dolAmount.length > 1) {
      while(dolAmount.length > 1 && dolAmount.substring(0,1) == "0") {
         dolAmount = dolAmount.substring(1,dolAmount.length);
      }
   }
   
   // Round the decimal amount.
   if(decAmount.length > 2) {
      if(decAmount.substring(2,3) > "4") {
         decAmount = parseInt(decAmount.substring(0,2)) + 1;
         if(decAmount < 10) {
            decAmount = "0" + decAmount;
         }
         else {
            decAmount = "" + decAmount;
         }
      }
      else {
         decAmount = decAmount.substring(0,2);
      }
      if (decAmount == 100) {
         decAmount = "00";
         dolAmount = parseInt(dolAmount) + 1;
      }
   }
   
   // Pad right side of decAmount
   if(decAmount.length == 1) {
      decAmount = decAmount + "0";
   }
   if(decAmount.length == 0) {
      decAmount = decAmount + "00";
   }
   
   // Check for negative values and reset textObj
   if(newValue.substring(0,1) != '-' ||
         (dolAmount == "0" && decAmount == "00")) {
      document.onlinepayment.vpc_Amount.value = dolAmount + "" + decAmount;

   }
   else{
      document.onlinepayment.vpc_Amount.value = '-' + dolAmount + "" + decAmount;
   }
}
// end script-->
function calculatefees(ob)
{
	//alert(ob.checked);
	if((document.onlinepayment.amount.value=='')||(parseInt(document.onlinepayment.amount.value)==0)|| (!checkNum(document.onlinepayment.amount)))
	{
		alert("Please enter amount.");
		ob.checked=false;
		document.onlinepayment.amount.focus();
		return false;
	}
	else
	{
	   if(document.onlinepayment.rdCardType[0].checked==true)
	   {
		  var finalfee=parseFloat(document.onlinepayment.amount.value)+(parseFloat(document.onlinepayment.amount.value) * parseFloat(document.onlinepayment.txtTax.value)/ 100);
		  //alert(finalfee);
		  document.onlinepayment.txtFinalAmount.value=roundNumber(finalfee,2);
	   }
	   else
	   {
		   //alert(document.onlinepayment.amount.value);
		   var finalfee=parseFloat(document.onlinepayment.amount.value);
		   document.onlinepayment.txtFinalAmount.value=roundNumber(finalfee,2);
	   }		
		
	}
	
}

function roundNumber(number, decimals) {      
    var d = parseInt(decimals,10),
        dx = Math.pow(10,d),
        n = parseFloat(number),
        f = Math.round(Math.round(n * dx * 10) / 10) / dx;
    return f.toFixed(d);
}

function cleartax()
{
	document.onlinepayment.rdCardType[0].checked=false;
    document.onlinepayment.rdCardType[1].checked=false;		
	document.onlinepayment.txtFinalAmount.value='';	
}
</script>