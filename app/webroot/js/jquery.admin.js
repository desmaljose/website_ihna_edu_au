$(document).ready(function() {
	 	
 $("#MoveRight,#MoveLeft").click(function(event) {

  var id = $(event.target).attr("id");
  var selectFrom = id == "MoveRight" ? "#SelectLeft" : "#SelectRight";
  var moveTo = id == "MoveRight" ? "#SelectRight" : "#SelectLeft";
  
  var selectedItems = $(selectFrom + "option:selected");
  alert(selectedItems);
  var output = [];               
  $.each(selectedItems, function(key, e) {                   
  output.push('<option value="' + e.value + '">' + e.text + '</option>');
  });
  
  $(moveTo).append(output.join(""));               
  selectedItems.remove();
 });
            
		/* admin edit  */
	$("#AdminEditForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			 
				return true;
			 }		    
			return false; 	
 	}); 
 	
 	
 	
 	
		/* user edit  */
	$("#UserAdminEditForm").submit(function () {		 
			if($(this).validation()==true)
			{			 			 
  			if(document.getElementById('s_flag').value==0)
     {   checkUserEditExists();	
         return false; 
     }
  		 else
  		 {			 return true;			 		 }
			}		    
			return false; 	
 	}); 
 	
 	
 	
 	


//Check username already exists or not 
function checkUserEditExists(){ 
   uname = $("#UserEmail").val();   
   uid   = $("#UserId").val();     
   $.get(baseurl+"users/checkUserEditExists/"+ uname+"/"+ uid, function(data){	
   if(data=="1")	  
	  {	   
	   $("#UserEmail").addClass("error-highlight");
	   $("#UserEmail").focus();
	   alert('User Email already exists.');
	   }
	  else
	  {			      
	    document.getElementById("s_flag").value = 1;	   
	    $('#UserAdminEditForm').submit();  
	  }	  
		});		
}



 	
  			/* admin side add/edit validations */
	$("#BadgeAdminAddForm").add("#BadgeAdminEditForm").add("#BadgeCategoryAdminAddForm").add("#BadgeCategoryAdminEditForm").add("#OfferCategoryAdminAddForm").add("#OfferCategoryAdminEditForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			 
				return true;
			 }		    
			return false; 	
 	});
 	
	
 	
 	
 	$("#AdminChangePasswordForm").submit(function () {		 
			if($(this).validation()==true)
			{	
			 if($('#New_Password').val()!=$('#Confirm_Password').val())
				{
					$('#New_Password').addClass("error-highlight");
					alert("New password and confirm password do not match.");
					return false;
				}
			return true;			 }		    
			return false; 	
 	}); 
 	 	
 	

 	
 	
 		/* admin edit  */
	$("#SettingAdminEditForm").submit(function () {		 
			if($(this).validation()==true)
			{	
				if(!checkEmail($('#System_Email').val()))
				{
					$('#System_Email').addClass("error-highlight");
					return false;
				}
											
				return true;
			 }		    
			return false; 	
 	}); 


 	 	
		/* CMS edit  */
	$("#CmAdminEditForm").add("#CmAdminEditForm").submit(function () {		 
			if($(this).validation()==true)
			{	
				if(FCKeditorAPI){
				var oEditor = FCKeditorAPI.GetInstance('Meta_Desc');
				var contents = oEditor.GetXHTML(true);
				if(contents=="")
				{
					alert('Meta Description is a required field.');
					oEditor.Focus();
					return false;
				}
				var oEditor = FCKeditorAPI.GetInstance('Page_Content');
				var contents = oEditor.GetXHTML(true);
				if(contents=="")
				{
					alert('Page Content is a required field.');
					oEditor.Focus();
					return false;
				}
				
				}
				return true; 
			}		    
			return false; 	
 	}); 	
	
 		
 	
	          
		/* Category Admin add  */
	$("#CourseCategoryAdminAddForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			 
				return true;
			 }		    
			return false; 	
 	}); 
 	
 	$("#ImageCategoryAdminAddForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			 
				return true;
			 }		    
			return false; 	
 	}); 
 	
 			/* Category Admin edit  */
	$("#CourseCategoryAdminEditForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			 
				return true;
			 }		    
			return false; 	
 	}); 
 	
 	  
	  $("#ImageGalleryAdminAddForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			 
				return true;
			 }		    
			return false; 	
 	}); 
	  
	  
 			/* Course Admin edit  */
	$("#CourseAdminAddForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			    if(FCKeditorAPI){
				var oEditor = FCKeditorAPI.GetInstance('description');
				var contents = oEditor.GetXHTML(true);
				if(contents=="")
				{
					alert('Summary is a required field.');
					oEditor.Focus();
					return false;
				}
				}
				
				if(FCKeditorAPI){
				var oEditor = FCKeditorAPI.GetInstance('features');
				var contents = oEditor.GetXHTML(true);
				if(contents=="")
				{
					alert('Features is a required field.');
					oEditor.Focus();
					return false;
				}
				}
				return true;
			 }		    
			return false; 	
 	}); 
 	
 	
	
	
	
 			/* Course Admin edit  */
	$("#CourseAdminEditForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			    if(FCKeditorAPI){
				var oEditor = FCKeditorAPI.GetInstance('description');
				var contents = oEditor.GetXHTML(true);
				if(contents=="")
				{
					alert('Summary is a required field.');
					oEditor.Focus();
					return false;
				}
				}
				
				if(FCKeditorAPI){
				var oEditor = FCKeditorAPI.GetInstance('features');
				var contents = oEditor.GetXHTML(true);
				if(contents=="")
				{
					alert('Features is a required field.');
					oEditor.Focus();
					return false;
				}
				}
				
				return true;
			 }		    
			return false; 	
 	}); 
 	
	
	
	
 			/* User Add - admin  */
	$("#UserAdminAddForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			 
				return true;
			 }		    
			return false; 	
 	});
	
	
	
 			/* User Edit - admin  */
	$("#UserAdminEditForm").submit(function () {		 
			if($(this).validation()==true)
			{			 
			 
				return true;
			 }		    
			return false; 	
 	});
	
	
	
	
});




//Check username already exists or not 
function checkTherapistExists(){ 
   uname = $("#TherapistUsername").val();     
   $.get(baseurl+"therapists/checkTherapistExists/" + uname, function(data){	
    
   if(data=="1")	  
	  {	   
	   $("#TherapistUsername").addClass("error-highlight");
	   $("#TherapistUsername").focus();
	   alert('Username already exists.');
	   }
	  else
	  {	
	   document.getElementById("s_flag").value = 1;	   
	   $('#TherapistAdminAddForm').submit();   
	  }	  
		});		
}
	


//Check username already exists or not 
function checkTherapistExistsedit(){ 
   uname = $("#TherapistUsername").val();  
   userid = $("#TherapistId").val();
      
   $.get(baseurl+"therapists/checkTherapistEditExists/" + uname+"/"+userid, function(data){	
    
   if(data=="1")	  
	  {	   
	   $("#TherapistUsername").addClass("error-highlight");
	   $("#TherapistUsername").focus();
	   alert('Username already exists.');
	   }
	  else
	  {	
	   document.getElementById("s_flag").value = 1;	   
	   $('#TherapistEditForm').submit();   
	  }	  
		});		
}
	



function get_url()
{
var your_url=''
var is_protocol_ok=your_url.indexOf('http://');
if (is_protocol_ok==-1)
 { 
  alert('Error: Your url should begin with http://');  
 }
}



//used in add contact, to check availability of a specific email
function checkAvailability(email, url){

	 $.get(url+"users/checkEmailAvailability/" + email, function(data){			  
	  var val = data.split("<");				
	  if(val[0]=="")	  
	  {	  
	   checkCap(document.getElementById("Verification_Code").value,url);	       
	  }
	  else
	  { alert('E-mail Address already exists.'); }
		});		
}




//used in add contact, to check availability of a specific email
function checkCap(cap, url){

	 $.get(url+"users/checkCap/" + cap, function(data){		
	  var val = data.split("<");				
	  if(val[0]=="")	  
	  {	
	     document.getElementById("a_falg").value=1;	  
	     $("form:UserAddForm").submit();	       
	  }
	  else
	  {
	   $('#Verification_Code').addClass("error-highlight");
	   alert('Verification Code doesn\'t match.'); 
	  }
		});		
}



//used in add contact, to check availability of a specific email
function refreshCap() {
	 $.get(baseurl+"/users/captchas/", function(data){		
	    $('#imagecaptch').src = data;
	    //$('#img_captcha').html(data);
		});		
}







/* Global Functions */

(function($) {

$.fn.validation = function() {		

    var error = 0;
		
	$('.required', this).each(function() {				
		var input = $(':input', this).val();		
		var display_name = $(':input', this).attr("id");		
		input = jQuery.trim(input);
		
		if (input == "") {		
		 
			//$('span.error-message', this).remove();
			//$(this).append('<span class="error-message"><span class="error"></span></span>');
		 //$('span.error', this).html(' mandatory field.');
		
			$(':input', this).addClass("error-highlight");
			display_name = ((display_name.replace('_','')).replace('_','')).replace('_','');
   display_ch ='';
			var the_length=display_name.length;
			for(k=0;k<the_length;k++)
			{			
    ch = display_name.charAt(k); 
    if (ch == ch.toUpperCase()) 
    {     ch=' '+ch;   }    
    display_ch = display_ch+ch;
			}				
			error++;
			$(':input', this).val('');
			$(':input', this).focus();
			alert(display_ch+' is a required field');			
		 return false;		
		} 	
		else if(display_name.indexOf('Email')!=(-1))
	 {
 	  if(!JcheckEmail(input))
 	  {
  	  $(':input', this).addClass("error-highlight");
  			display_name = ((display_name.replace('_','')).replace('_','')).replace('_','');
     display_ch ='';
  			var the_length=display_name.length;
  			for(k=0;k<the_length;k++)
  			{			
      ch = display_name.charAt(k); 
      if (ch == ch.toUpperCase()) 
      {     ch=' '+ch;   }    
      display_ch = display_ch+ch;
  			}				
  			error++;		
  			$(':input', this).focus();
  			alert('Enter valid email address for'+display_ch);			
  		 return false;	
 	  }	
 	  else 
  		{
  			$('span.error-message', this).remove();
  			$(':input', this).removeClass("error-highlight");
  		}
	 }	
		else 
		{
			$('span.error-message', this).remove();
			$(':input', this).removeClass("error-highlight");
		}
	});
	
	if (error == 0) {
		return true;
	} else {
		return false;
	}
};

})(jQuery);




/* email address validation */
function JcheckEmail(emailString)
{
 if(emailString.indexOf(' ')>-1)
 {  
		return false;
 }
 
	splitVal = emailString.split('@');
	
	if(splitVal.length <= 1) 
	{
		return false;
	}
	if(splitVal[0].length <= 0 || splitVal[1].length <= 0) 
	{
		return false;
	}
	
	splitDomain = splitVal[1].split('.');
	if(splitDomain.length <= 1) 
	{
		return false;
	}
	
	if(splitDomain[0].length <= 0 || splitDomain[1].length <= 1) 
	{
		return false;
	}
	
		return true;
}




/* email address validation */
function checkEmail(emailString)
{
 if(emailString.indexOf(' ')>-1)
 {
  alert("Please enter a valid email address ");
		return false;
 }
 
	splitVal = emailString.split('@');
	
	if(splitVal.length <= 1) 
	{
		alert("Please enter a valid email address ");
		return false;
	}
	if(splitVal[0].length <= 0 || splitVal[1].length <= 0) 
	{
		alert("Please enter a valid email address");
		return false;
	}
	
	splitDomain = splitVal[1].split('.');
	if(splitDomain.length <= 1) 
	{
		alert("Please enter a valid email address");
		return false;
	}
	
	if(splitDomain[0].length <= 0 || splitDomain[1].length <= 1) 
	{
		alert("Please enter a valid email address");
		return false;
	}
	
	
	
	return true;
}




// Function To Check Whether The Value Entered Is A Non Negative Integer 

function check_number(sText)
{   
   var ValidChars = "0123456789";
   var IsNumber=true;
   var Char;
 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i);       
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;        
         }
      }
   return IsNumber;
}





// Function To Check Whether The Value Entered Is A Non Negative Float 

function check_numeric(sText)
{   
   var ValidChars = "0123456789.";
   var IsNumber=true;
   var Char;
 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i);       
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;        
         }
      }
   return IsNumber;
}



  function specialCharCheck(strng)
		{
		  var iChars = "\\";
		  var a1 = new Array();
		  a1 = strng.split("\\");		  
    a_count = (a1.length)-1;    
    strng = a1[a_count];

					 var iChars = "!@#$%^&*()+=-[]\'';,/{}|\":<>?~`";
						var iCharsspace = " ";
						for (var i = 0; i < strng.length; i++) 
						{
								if (iChars.indexOf(strng.charAt(i)) != -1) 
								{								    
												alert("Filename contains special characters. \n These are not allowed.\n Please remove them and try again.");
												return false;
								} 	
								if (iCharsspace.indexOf(strng.charAt(i)) != -1) 
								{
												alert("Filename contains special characters. \n These are not allowed.\n Please remove them and try again.");
												return false;
								} 	
						}	
					return true;
					
	 }
	 
	 
	 	function listbox_moveacross(sourceID, destID) {
			var src = document.getElementById(sourceID);
			var dest = document.getElementById(destID);

			for(var count=0; count < src.options.length; count++) {

				if(src.options[count].selected == true) {
						var option = src.options[count];

        if(sourceID=="p1")
        {
         var pval = document.getElementById('problem').value;
         pval = pval+','+option.value+',';
         document.getElementById('problem').value=pval;        
        }
        if(sourceID=="p2")
        {
         var pval = document.getElementById('problem').value;
         pval = pval.replace(','+option.value+',','');
         document.getElementById('problem').value=pval; 
        }
        
        if(sourceID=="c1")
        {
         var cval = document.getElementById('cost').value;
         cval = cval+','+option.value+',';
         document.getElementById('cost').value=cval; 
        }
        if(sourceID=="c2")
        {
         var cval = document.getElementById('cost').value;
         cval = cval.replace(','+option.value+',','');
         document.getElementById('cost').value=cval;
        }

						var newOption = document.createElement("option");
						newOption.value = option.value;
						newOption.text = option.text;
						newOption.selected = true;
						try {
								 dest.add(newOption, null); //Standard
								 src.remove(count, null);
						 }catch(error) {
								 dest.add(newOption); // IE only
								 src.remove(count);
						 }
						count--;

				}

			}

		}
	 
	 
	 
/**
 * DHTML date validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */
// Declaring valid date character, minimum year and maximum year
var dtdq = new Date();
var dtCh= "-";
var minYear = dtdq.getFullYear();
var maxYear=2100;

function isInteger(s){
	var i;
    for (i = 0; i < s.length; i++){   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function stripCharsInBag(s, bag){
	var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++){   
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function daysInFebruary (year){
	// February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
}
function DaysArray(n) {
	for (var i = 1; i <= n; i++) {
		this[i] = 31
		if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}
		if (i==2) {this[i] = 29}
   } 
   return this
}

function isDate(dtStr){
	var daysInMonth = DaysArray(12)
	var pos1=dtStr.indexOf(dtCh)
	var pos2=dtStr.indexOf(dtCh,pos1+1)
	var strMonth=dtStr.substring(0,pos1)
	var strDay=dtStr.substring(pos1+1,pos2)
	var strYear=dtStr.substring(pos2+1)
	strYr=strYear
	
		if (pos1==-1 || pos2==-1){
		alert("The date format should be : mm-dd-yyyy")
		return false
	}
	
	if (strMonth.length<2)
	{
	 alert("The month format should be : mm")
		return false
	}
	
	if (strDay.length<2)
	{
	 alert("The day format should be : dd")
		return false
	}
	
	
	if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
	if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
	for (var i = 1; i <= 3; i++) {
		if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
	}
	month=parseInt(strMonth)
	day=parseInt(strDay)
	year=parseInt(strYr)
	
	

	if (strMonth.length<1 || month<1 || month>12){
		alert("Please enter a valid month")
		return false
	}
	if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
		alert("Please enter a valid day")
		return false
	}
	if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
		alert("Please enter a valid 4 digit year between "+minYear+" and "+maxYear)
		return false
	}
	if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){
		alert("Please enter a valid date")
		return false
	}
return true
}
