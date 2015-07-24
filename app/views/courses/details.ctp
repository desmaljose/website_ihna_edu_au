<script src="<?php echo WEB_URL; ?>ihna-js/jquery.js" type="text/javascript"></script>

         
<div class="row">                 
<!--      				<h1 class=" wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">
                                    <?php echo $course_name; ?>
                    </h1>-->

                    <div>                     
					 <?php
					  /*if(($category == 'Health-Services') || ($vchn['Course']['_id_vchn']=='3')){  ?>
					  <p><img src="<?php echo WEB_URL; ?>ihna-images/futureskills.jpg"  style="float:right; padding-left:15px;"/>
					 <?php
					  }*/	
					  echo $course_summary; ?>
           			</div>
                    
<!-- subin-->
<?php
if($course_id==32)
 {
 ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInRight"  data-wow-delay=".1s"> 
                    	<div class="side-links col-xs-12 col-sm-12 col-md-6 col-lg-6 lab">
							<a href="<?php echo WEB_URL; ?>simulation/" title="Click here to view the details" target="_blank">
                            State of the art simulation Nursing lab</a></div>
                        <div class="side-links col-xs-12 col-sm-12 col-md-6 col-lg-6 e-learning ">
							<a href="<?php echo WEB_URL; ?>courses/elearning/" title="Click here to view the details" target="_blank">
                            Interactive E-learning program</a></div>
                        <div class="side-links col-xs-12 col-sm-12 col-md-6 col-lg-6 news">
							<a href="<?php echo WEB_URL; ?>student_testimonials/" title="Click here to view the details" target="_blank">
                            What our students says</a></div>
                        <div class="side-links col-xs-12 col-sm-12 col-md-6 col-lg-6 news">
							<a href="<?php echo WEB_URL; ?>corporate_testimonials/" title="Click here to view the details" target="_blank">
                            What our hospital partners says</a></div>                            
                    </div>
<?php } ?>
<?php
if($course_id==25)
 {
 ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInRight"  data-wow-delay=".1s"> 
                    	<div class="side-links col-xs-12 col-sm-12 col-md-6 col-lg-6 lab">
							<a href="<?php echo WEB_URL; ?>simulation/" title="Click here to view the details" target="_blank">
                            State of the art simulation Nursing lab</a></div>
                        <div class="side-links col-xs-12 col-sm-12 col-md-6 col-lg-6 e-learning ">
							<a href="<?php echo WEB_URL; ?>courses/elearning//" title="Click here to view the details" target="_blank">
                            Interactive E-learning program</a></div>
                        <div class="side-links col-xs-12 col-sm-12 col-md-6 col-lg-6 news">
							<a href="https://ihna.edu.au/reentry_student_testimonials" title="Click here to view the details" 
                            target="_blank"> What our students says</a></div>                           
                    </div>          
                    
<?php } ?>

<?php if(count($forumCategories)>0){ ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad-top pad-bot wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s"> 
                    	<p><strong>Your important questions answered here:</strong></p>
<?php } ?>
                        
      <?php foreach( $forumCategories as $key => $val){ ?>
                        <div class="is-list col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="<?php echo WEB_URL; ?>discussion_forums/index/<?php echo $course_id.'/'.$key; ?>" title="Click here to view the details" target="_blank">
                        <?php echo $val; ?></a></div>
            <?php } ?>
                        
<?php if(count($forumCategories)>0){ ?>                        
           </div>
<?php } ?>

     </div> 
     


       		
<div class="row">  
<h1>Course Overview</h1>

        
    <div class="panel-group" id="accordion">
                           
     <?php 
                                    $cnt = 1;
                    foreach ($course_overviews as $key => $row){ 
                                        //print_r($row);
                                        ?>
                                <div class="panel panel-warning wow triggerAnimation animated" data-animate="fadeInRight" data-wow-delay=".1s">
                                    <div class="panel-heading">
                                        <h4 class="panel-title panel-title-adjust">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $cnt; ?>" onclick="callme( $(this).offset().top );"><?php echo $key; ?></a>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $cnt; ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php echo str_replace("{-start-dates-}", $date_table, $row[0]); ?>
                                        </div>
                                    </div>
                                </div> 
                                    <?php $cnt++; } ?>
                                <script type="text/javascript">
                                    function callme( cur_offset ){
                                        if( cur_offset > $('#accordion .in').offset().top){
                                            $('html,body').animate({
            scrollTop: $(window).scrollTop() - $('#accordion .in').height()
        });
                                            
                                        }
                                    }
                                    </script>
                            </div>
                    
                     
    <center>
                            
                             <?php if($brochure_link!=''){ /* ?>
                             <a href="<?php echo $brochure_link;  ?>" class="blue-search-bottom msearch" target="blank"> Brochure</a>
                             <?php */} ?>
                             
                             <?php if($brochure_link!=''){ ?>
                             <a href="#" class="blue-search-bottom msearch" id="btnEnqBro" onclick="return false;"> Download&nbsp;Free&nbsp;Course&nbsp;Brochure</a>
                             <?php } ?>
                             
                             <?php if($application_link!=''){ ?>
                             <a href="<?php echo $application_link; ?>" class="blue-search-bottom msearch" id="btnEnqApp" target="_blank"> Application&nbsp;Form</a>
                             <?php } ?>                         
                             
                             
                             <?php $apply_online_link = ($old_pd_url!='' ? $old_pd_url : WEB_URL.'courses/applynow/'.$course_id.'/'.$type_id); ?>
                             <?php $apply_online_target = ($old_pd_url!='' ? '_blank' : ''); ?>
                            <a href="<?=$apply_online_link?>" class="blue-search-bottom msearch" target="<?=$apply_online_target?>"> Apply Online</a> 
                             
                            </center>
    	

    <div style="background-color: #EFF2FB; padding: 15px;">
    <!-- COMMENTS SECTION STARTS HERE -->
     
                    <div class="row"> 
                        <div style="color: #f00;"><?php  //echo $session->flash(); ?></div>
                        <h1 class="col-xs-12 col-sm-6 col-md-6 col-lg-6 wow triggerAnimation animated" data-animate="fadeInRight"  data-wow-delay=".1s">Frequently Asked Questions</h1>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <hr />
    
           <h3 style="text-align: left; letter-spacing:-1px; margin-top: 10px;">Ask A Question.</h3>
           <hr>
           
           <div style="text-align: left; letter-spacing: 3px; margin-top: 10px; color: #f00; margin-bottom: 10px;" id="resp">&nbsp;</div>
    
            
            
            <form class="form-horizontal" action="<?php echo WEB_URL; ?>discussion_forums/add" method="post" enctype="multipart/form-data" name="DiscussionForum" id="addComment">
    
                      <div class="form-group">
        <label for="topic" class="col-sm-2 control-label">Category <span>*</span></label>
        <div class="col-sm-5">
            <select name="data[DiscussionForum][discussion_forum_category_id]" class="form-control" id="discussion_forum_category_id" required>
          <?php foreach( $forumCategories as $key => $val){ ?>
                <option value="<?php echo $key; ?>"><?php echo $val; ?></option>
                <?php } ?>
        </select>
        </div>
      </div>  
          
          <div class="form-group">
        <label for="topic" class="col-sm-2 control-label">Topic <span>*</span></label>
        <div class="col-sm-5">
          <input name="data[DiscussionForum][question]" class="form-control" id="topic" size="60" required />
        </div>
      </div>      
          
          
          <div class="form-group">
        <label for="detail" class="col-sm-2 control-label">Detail <span>*</span></label>
        <div class="col-sm-5">
            <textarea name="data[DiscussionForum][description]" class="form-control" id="detail" cols="74" required></textarea>
         
        </div>
      </div>  
    
           <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name <span>*</span></label>
        <div class="col-sm-5">
          <input name="data[DiscussionForum][user_name]" class="form-control" id="name" size="60" required />
        </div>
      </div>     
                
           <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email <span>*</span></label>
        <div class="col-sm-5">
           <input name="data[DiscussionForum][user_email]" class="form-control" id="email" size="60" type="email" required />
        </div>
      </div>              
    
                
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
                
    
                
                <input type="hidden" name="data[DiscussionForum][course_id]" value="<?php echo $course_id;?>" />
                <input type="hidden" name="data[DiscussionForum][question_flag]" value="2" />
                
                
                
<!--                <input type="hidden" name="data[DiscussionForum][datetime]" value="<?php echo date('Y-m-d H:i:s');?>" />-->
                 
                
    </form>
        
        
        
            
    
           
        <script type="text/javascript">
            $(function() {
    
    
                // AJAX COMMENT SUBMISSION
                $("#addComment").submit(function(e)
                {
                    var postData = $(this).serializeArray();
                    var formURL = $(this).attr("action");
                    $.ajax(
                    {
                        url : formURL,
                        type: "POST",
                        data : postData,
                        success:function(data, textStatus, jqXHR) 
                        {
                            $("#resp").html(data);
                            $("#addComment").trigger('reset');
                            setTimeout( "$('#resp').html('');",8000 );
                        },
                        error: function(jqXHR, textStatus, errorThrown) 
                        {
                            $("#resp").html('Error occured. Please try later.');
                            $("#addComment").trigger('reset');
                            setTimeout( "$('#resp').html('');",8000 );
                        }
                    });
                    e.preventDefault(); //STOP default action
                    //e.unbind(); //unbind. to stop multiple form submit.
                });
                
                
                
            }); 
            
            </script>
                              
                      </div>
                    </div>
     
     <!-- COURSE COMMENTS ENDS HERE --> 
     </div>
 

<!-- Modal Quick Enquiry Form For Brochure Download -->
<div class="modal fade bs-example-modal-sm" id="modelEnqBro" tabindex="-1" role="dialog" aria-labelledby="modelEnqLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <br /><h4 class="modal-title quick-head wow" id="myModalLabel">Download Free Course Brochure</h4><br />
      </div>
        <div class="qck-enq wow" style="padding: 10px;">
            <form enctype="multipart/form-data" method="post" id="enquiry_bro" name="enquiry" action="<?php echo WEB_URL; ?>cms/quick_enquiry_submit" target="_blank" onsubmit="$('#modelEnqBro').modal('hide'); ">
            
            <input type="hidden" name="enquiry_type" value="Brochure Download" />
            <input type="hidden" name="brochure_link" value="<?php echo @$brochure_link;  ?>" />
            
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
                            
                            
                            
            		<div id="enquiry_message_bro" class="red" style="width:auto;font-weight:bold; margin-top: 5px;"></div>  
                        
                        <p style="text-align: center; font-weight: bold;">Please enter your details to download the course brochure.
</p>
                        <input type="text" placeholder="Name" id="contact_name_bro" name="contact_name">
                        <input type="text" placeholder="Email" id="contact_email_bro" name="contact_email"> 
                        <input type="text" placeholder="Phone Number" id="contact_phone_bro" name="contact_phone">
                        <textarea placeholder="Queries if any" name="contact_comment" id="contact_comment_bro"></textarea>                  
                        <input type="submit" value="Submit" id="submit_quickenq_bro" class="col-xs-12 col-sm-8 col-md-6 col-lg-6 mar-auto download-brochure"  name="Submit" onclick="return validate_bro();">
                    </form> 
         </div>
    </div>
  </div>
</div> 

</div>


<script type="text/javascript">

        
        $(document).ready(function() { 
     
            $( "#btnEnqBro" ).click(function() {
              $('#enquiry_bro').get(0).reset();  
              $('#modelEnqBro').modal('show');
            });          
            
            $( "#btnEnqSideBro" ).click(function() {
              $('#enquiry_bro').get(0).reset();  
              $('#modelEnqBro').modal('show');
            });            
		
	});
        
	function validate_bro(){
	      
			var submit_flage=true;
			
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			    
			$("#enquiry_message_bro").html('');

			if($('#enquiry_bro #contact_name_bro').val().length<=0)
			{
				alert('Please enter Name');
				submit_flage=false;
			}
			else if($("#enquiry_bro #contact_email_bro").val().length<=0)
			{
				alert('Please enter E-mail');
				submit_flage=false;
			}
			else if (!filter.test($("#enquiry_bro #contact_email_bro").val())) {
				alert('Please enter valid E-mail');
				submit_flage=false;
			}
			else if(($("#enquiry_bro #contact_phone_bro").val().length<=0) || (isNaN($("#enquiry_bro #contact_phone_bro").val())))
			{
				alert('Please enter a valid Telephone');
				submit_flage=false;
			}			
                            return submit_flage;
	};        
        
</script> 



 <!-- Modal Quick Enquiry Form For Brochure Download Ends here -->