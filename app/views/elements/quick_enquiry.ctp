<script src="<?php echo WEB_URL; ?>ihna-js/jquery-2.js" type="text/javascript"></script>            	
<div class="quick-head wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Quick Enquiry</div>
                <div class="qck-enq wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">
                    <form enctype="multipart/form-data" method="post" id="enquiry" name="enquiry" action="<?php echo WEB_URL; ?>cms/quick_enquiry_submit">
                            <?php if(@$course_id!=''){ ?>
                                <input type="hidden" name="course_id" value="<?php echo $course_id; ?>" />
                            <?php } ?>                            
                            <?php if(@$course_name!=''){ ?>
                                <input type="hidden" name="course_intrested" value="<?php echo $course_name; ?>" />
                            <?php } ?>
                            
                            
                            <?php if(@$lead_src!=''){ ?>
                                <input type="hidden" name="lead_src" value="<?php echo $lead_src; ?>" />
                            <?php } ?> 
                            <?php if(@$lead_desc!=''){ ?>
                                <input type="hidden" name="lead_desc" value="<?php echo $lead_desc; ?>" />
                            <?php } ?>  
                            
                            
                            
            		<div id="enquiry_message" class="red" style="width:auto;font-weight:bold; margin-top: 5px;"></div>                
                        <input type="text" placeholder="Name" id="contact_name" name="contact_name">
                        <input type="text" placeholder="Email" id="contact_email" name="contact_email"> 
                        <input type="text" placeholder="Phone Number" id="contact_phone" name="contact_phone">
                        
                        <select name="campus" id="campus" style="border-radius: 3px;
                                outline: none; box-shadow: none; border: 1px solid #B7B7B7; height: 40px; padding: 5px 12px; background: #fff; width: 100%; margin: 7px 0;" placeholder="select your beverage"  >
                            <option value="" >Campus</option>
                            <option value="Melbourne">Melbourne</option>
                            <option value="Sydney">Sydney</option>
                            <option value="Perth">Perth</option>
                            <option value="Online">Online</option>
                            <option value="Any Campus">Any Campus</option>
                        </select>

                        <textarea placeholder="Comments" name="contact_comment" id="contact_comment"></textarea> 
                        <input type="submit" value="Submit" id="submit_quickenq" class="col-xs-12 col-sm-8 col-md-6 col-lg-6 mar-auto blue-search" onclick="return validate();"  name="Submit">
                    </form>
               </div>
                
<script type="text/javascript">


	
function validate(){
			var submit_flage=true;
			
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			    
			$("#enquiry_message").html('');

			if($('#enquiry #contact_name').val().length<=0)
			{
				alert('Please enter Name');
				submit_flage=false;
			}
			else if($("#enquiry #contact_email").val().length<=0)
			{
				alert('Please enter E-mail');
				submit_flage=false;
			}
			else if (!filter.test($("#enquiry #contact_email").val())) {
				alert('Please enter valid E-mail');
				submit_flage=false;
			}
			else if(($("#enquiry #contact_phone").val().length<=0) || (isNaN($("#enquiry #contact_phone").val())))
			{
				alert('Please enter a valid Telephone');
				submit_flage=false;
			}
                        else if($("#enquiry #campus").val().length<=0){
				alert('Please choose a campus option');
				submit_flage=false;                            
                        }
			else if($("#enquiry #contact_comment").val().length<=0)
			{
				alert('Please enter Message');
				submit_flage=false;
			}
                        
                        return submit_flage;
}



        
 
</script>                