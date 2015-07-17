<div class="row appl-form">
<form action="<?php echo WEB_URL;?>jobApplications/apply/<?php echo $jdDetailsId;  ?>" method="post" enctype="multipart/form-data" name="frmapplyjob" id="frmapplyjob" >
    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>First Name<sup>*</sup></label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <input name="jaFirstName" type="text" id="jaFirstName" />
    </div>

    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>Last Name<sup>*</sup></label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <input name="jaLastName" type="text" id="jaLastName" />
    </div>

    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>Phone (mobile preferred)<sup>*</sup></label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <input name="jaPhoneNo" type="text" id="jaPhoneNo" />
    </div>
    
    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>Email Address<sup>*</sup></label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <input name="jaEmail" type="text" id="jaEmail" />
    </div>

    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>Company Name</label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <input name="jaCompanyName" type="text" id="jaCompanyName" />
    </div>

    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>Job Title</label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <input name="jaTitle" type="text" id="jaTitle" />
    </div>
    
    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>Time in Role</label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
                <select name="jaTimeInYears">
                <option value="0">0 years</option>
                <option value="1">1 year</option>
                <option value="2">2 years</option>
                <option value="3">3 years</option>
                <option value="4">4 years</option>
                <option value="5">5 years</option>
                <option value="6">6 years</option>
                <option value="7">7 years</option>
                <option value="8">8 years</option>
                <option value="9">9 years</option>
                <option value="10">10 years</option>
                <option value="11">11 years</option>
                <option value="12">12 years</option>
                <option value="13">13 years</option>
                <option value="14">14 years</option>
                <option value="15">15 years</option>
                <option value="16">16 years</option>
                <option value="17">17 years</option>
                <option value="18">18 years</option>
                <option value="19">19 years</option>
                <option value="20">20 years</option>
                <option value="21">21+ years</option>                
                </select>
        
                <select class="timerole-right" name="jaTimeInMonth">
                <option value="0">0 months</option>
                <option value="1">1 month</option>
                <option value="2">2 months</option>
                <option value="3">3 months</option>
                <option value="4">4 months</option>
                <option value="5">5 months</option>
                <option value="6">6 months</option>
                <option value="7">7 months</option>
                <option value="8">8 months</option>
                <option value="9">9 months</option>
                <option value="10">10 months</option>
                <option value="11">11 months</option>                
                </select>
        
                <div class="clear"></div>
                <div class="check-with">
                <input name="jaIsNewToWork" type="checkbox"><small>Current or most recent</small>
                <div class="clear"></div>
                </div>
    <div class="clear"></div>
    </div>

    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>Cover Letter</label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <textarea name="jaCoverLetterDesc"></textarea>
    </div>

    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>Cover Letter as Attachment</label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <input name="jaCoverLetter_file" type="file" id="jaCoverLetter_file" class="file-choose" />
    </div>

    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    <label>Resume</label>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <input name="jaResume_file" type="file" id="jaResume_file" class="file-choose" />
    </div>

    <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
    &nbsp;
    <input name="jaJobId" type="hidden" id="jaJobId" value="<?php echo $jdDetailsId;  ?>" />
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
    <input name="button" type="submit" class="blue-search" id="button" value="Submit"  onclick="return validateform()"/>
    </div>
</form> 
<div class="clear"></div>
</div> 

<script language="javascript" type="text/javascript">
function validateform()
{		
	
	if(document.frmapplyjob.jaFirstName.value=='')
	{
		alert("Please Enter First Name");
	    document.frmapplyjob.jaFirstName.focus();		
		return false;
	}
	else if(document.frmapplyjob.jaLastName.value=='')
	{
		alert("Please Enter Last Name");
	    document.frmapplyjob.jaLastName.focus();		
		return false;
	}	
	else if(document.frmapplyjob.jaPhoneNo.value=='')
	{
		alert("Please Enter Phone Number");
		document.frmapplyjob.jaPhoneNo.focus();		
		return false;
	}
	else if(document.frmapplyjob.jaEmail.value=='')
	{
		alert("Please Enter Email Id");
	    document.frmapplyjob.jaEmail.focus();		
		return false;
	}	
	else if(!(validateemail(document.frmapplyjob.jaEmail.value)))
	{
		alert('Invalid Email Address');
		document.frmapplyjob.jaEmail.focus();
		return false;		
	}
	else if(document.frmapplyjob.jaCoverLetter_file.value != '' ) 
	{
		var fname = document.frmapplyjob.jaCoverLetter_file.value; 
		var coverLetterFile = document.frmapplyjob.jaCoverLetter_file.files[0]; 
		
		var re = /(\.doc|\.docx|\.pdf)$/i;
		if(!re.exec(fname))
		{
			alert("File extension not supported!.(Doc,docx and pdf are allowed)");
			return false;
		}
		else if(coverLetterFile.size > 5000000) {
			alert("File size could not exceed 5 mb.");
			return false;
		}
	}
	else if(document.frmapplyjob.jaResume_file.value != '' ) 
	{
		var fname = document.frmapplyjob.jaResume_file.value;
		var resumeFile = document.frmapplyjob.jaResume_file.files[0]; 
		var re = /(\.doc|\.docx|\.pdf)$/i;
		if(!re.exec(fname))
		{
			alert("File extension not supported!.(Doc,docx and pdf are allowed)");
			return false;
		}
		else if(resumeFile.size > 5000000) {
			alert("File size could not exceed 5 mb.");
			return false;
		}
	}
	
	return true;
}

 function validateemail(email)
{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	// var address = document.forms[form_id].elements[email].value;
	var address = document.frmapplyjob.jaEmail.value;
	if(reg.test(address) == false)
	{
		//alert('Invalid Email Address');
		//document.frmapplyjob.txtEmail.focus();
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
</script>