   <!-- HEADER -->
   <?php echo $this->element("common_header");?>
        <!-- END HEADER --> 
        
<!--BANNER-->                             
<?php echo $this->element("banner_area");?> 
<!--END BANNER-->                             
 
        
            <!-- Carousel
    ================================================== -->

            
 <div id="contents">
  <div class="container">
    <div class="row"> 
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 ">
              <div class="row">
                <?php echo $content_for_layout;?>             
          </div>

                            
      </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 ">
                
                                  <!----------------------------language bar--------------------->          
	<div class="language_bar">
            <div class="website_view">View website in<div id="google_translate_element" style="float: right;"></div> </div>
           
      <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: 
google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: 
false}, 'google_translate_element');
}
</script><script type="text/javascript" 
src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
    </div>
   <!----------------------------language bar---------------------> 
   
              <div class="quick-head wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Quick Enquiry</div>
                <div class="qck-enq wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">
                  <form action="" enctype="multipart/form-data" method="post" id="enquiry" name="enquiry">
                <div id="enquiry_message" class="red" style="width:auto;font-weight:bold"></div>                
                        <input type="text" placeholder="Name" id="contact_name" name="contact_name">
                        <input type="text" placeholder="Email" id="contact_email" name="contact_email"> 
                        <input type="text" placeholder="Phone Number" id="contact_phone" name="contact_phone">
                        <textarea placeholder="Comments" name="contact_comment" id="contact_comment"></textarea>
               
<!--                    <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 mar-auto blue-search" style="cursor: pointer;" 
                    onClick=" return enquirysubmit();">Submit</div>-->                    
                    <input type="submit" value="Submit" id="submitbtn" class="col-xs-12 col-sm-8 col-md-6 col-lg-6 mar-auto blue-search"  name="Submit">
                    </form>
               </div>
                <a href="<?php echo WEB_URL; ?>enquiry">
              <div class="side-links col-xs-12 col-sm-12 col-md-12 col-lg-12 enq  wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s" style="cursor: pointer;">Student Enquiry</div>
                </a>
                <div class="side-links col-xs-12 col-sm-12 col-md-12 col-lg-12 view-all  wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s" onclick="window.location='<?php echo WEB_URL; ?>courses'" style="cursor: pointer;">View All Courses</div>
<!--                <div class="side-links col-xs-12 col-sm-12 col-md-12 col-lg-12 hand  wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s" onclick="window.open('<?php echo WEB_URL; ?>pdf/ihna_student_handbook.pdf');" style="cursor: pointer;">Student Handbook</div>-->
                <a href="<?php echo WEB_URL; ?>student_handbook">
                <div class="side-links col-xs-12 col-sm-12 col-md-12 col-lg-12 hand  wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s" style="cursor: pointer;">Student Handbook</div>
                </a>
                <a href="<?php echo WEB_URL; ?>courses/calendar/1">
                    <div class="side-links col-xs-12 col-sm-12 col-md-12 col-lg-12 cal  wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Course Calendar</div>                </a>
               
                <div class="clear"></div>
                <ul class="sidelist">
                    <a href="<?php echo WEB_URL; ?>esos_framework"><li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">ESOS</li></a>
                    <a href="<?php echo WEB_URL; ?>course_fee"><li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">IHNA Fees Schedule</li></a>
                    <a target="_blank" href="<?php echo WEB_URL; ?>uploads/studentprospectus/IHNA_student_prospectus.pdf"> <li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Students Prospectus</li></a>
                    <a href="<?php echo WEB_URL; ?>introduction_to_australia"><li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Pre Arrival Informations</li></a>
                </ul>
                
                

                
<div class="toll-free col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">
                    <a href="javascript:$zopim.livechat.window.show()" title="Click Here to Chat with Our Support Staff">
                    <img class="img-responsive mar-auto" src="<?php echo WEB_URL; ?>ihna-images/live-chat.png"></a>
                </div>
                <div class="toll-free col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">
                    <img class="img-responsive mar-auto" src="<?php echo WEB_URL; ?>ihna-images/tollfree.png">
                </div>
                
                
              
            </div>
    </div>
  </div>
</div>       
      
            
            
          
    
    <!-- CONTENT WRAPPER
    ============================================= -->
    
    <div id="content_wrapper">
     
      <!-- FOOTER
      ============================================= -->
     <?php echo $this->element("common_footer");?>
    </div>  <!-- END CONTENT WRAPPER -->      

<!-----------------------menu---------------------------->

    <?php echo $this->element("menu");?>   

<!--------------------------menu----------------------->

  
    <!-- EXTERNAL SCRIPTS
    ============================================= -->               
    
    <script src="<?php echo WEB_URL; ?>ihna-js/jquery-2.js" type="text/javascript"></script>
    <script src="<?php echo WEB_URL; ?>ihna-js/main.js"></script> 
    <script src="<?php echo WEB_URL; ?>ihna-js/bootstrap.js" type="text/javascript"></script> 
    <script src="<?php echo WEB_URL; ?>ihna-js/modernizr.js" type="text/javascript"></script>
    <script src="<?php echo WEB_URL; ?>ihna-js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo WEB_URL; ?>ihna-js/retina.js" type="text/javascript"></script>  
    <script src="<?php echo WEB_URL; ?>ihna-js/jquery_002.js" type="text/javascript"></script>
    <script defer src="<?php echo WEB_URL; ?>ihna-js/jquery_003.js" type="text/javascript"></script>  
    <script defer src="<?php echo WEB_URL; ?>ihna-js/jquery_005.js" type="text/javascript"></script>  
    <script src="<?php echo WEB_URL; ?>ihna-js/jquery_004.js" type="text/javascript"></script>
    <script src="<?php echo WEB_URL; ?>ihna-js/owl.js" type="text/javascript"></script> 
    <script src="<?php echo WEB_URL; ?>ihna-js/waypoints.js" type="text/javascript"></script>     
    <script src="<?php echo WEB_URL; ?>ihna-js/custom.js" type="text/javascript"></script>
     <script src="<?php echo WEB_URL; ?>ihna-js/wow.js"></script> 
         
        <script>
 //new WOW().init();
</script>
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    
    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
    <!--
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXX-X']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>-->  
  
<a style="display: none; position: fixed; z-index: 2147483647;" title="" href="#top" id="scrollUp"></a></body></html>

<script type="text/javascript">
    $(document).ready(function() {  
  $("#enquiry").submit(function(e){
        
            e.preventDefault();
      var submit_flage=true;
      
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          
      $("#enquiry_message").html('');

      if($('#enquiry #contact_name').val().length<=0)
      {
        alert('Please Enter Name');
        submit_flage=false;
      }
      else if($("#enquiry #contact_email").val().length<=0)
      {
        alert('Please Enter E-mail');
        submit_flage=false;
      }
      else if (!filter.test($("#enquiry #contact_email").val())) {
        alert('Please Enter Valid E-mail');
        submit_flage=false;
      }
      else if(($("#enquiry #contact_phone").val().length<=0) || (isNaN($("#enquiry #contact_phone").val())))
      {
        alert('Please Enter a Valid Telephone');
        submit_flage=false;
      }     
/*      else if($("#enquiry #contact_location").val().length<=0)
      {
        alert('Please enter Location');
        submit_flage=false;
      }*/
      
      else if($("#enquiry #contact_comment").val().length<=0)
      {
        alert('Please Enter Message');
        submit_flage=false;
      }
      if(submit_flage)
      {       
        $.ajax({
          type: "POST",
          url: "<?php echo WEB_URL; ?>miscs/quick_enquiry_submit",
          data: $( this ).serialize(),
          dataType:"json",
          beforeSend: function(){       
            $("#enquiry_message").html('<img src="<?php echo WEB_URL; ?>ihna-images/rewamp/716.gif"/>');
            $('#submit_quickenq').attr('disabled', 'disabled');
            },      
          success: function(msg){
            if(msg.flage=='true')
            {
              $("#enquiry #contact_email").val(''); 
              $("#enquiry #contact_name").val('');              
              $("#enquiry #contact_phone").val('');           
              $("#enquiry #contact_comment").val('');
              $("#contact_message").html('');           
              //$("#enquiry #contact_location").val('');
              $("#enquiry_message").html('Thank you, we will contact you soon.');
              $('#submit_quickenq').removeAttr('disabled');
              ///22042015 Event tracking code
              //ga('send', 'event', 'button', 'click', 'Quick Enquiry - IHNA International',1);
              ga('send', 'event', 'Quick Enquiry', 'click', 'IHNA International',1);
            }
            else
            {
              $("#enquiry #contact_email").val(''); 
              $("#enquiry #contact_name").val('');              
              $("#enquiry #contact_phone").val('');           
              $("#enquiry #contact_comment").val('');
              $("#contact_message").html('');           
              //$("#enquiry #contact_location").val('');
              $("#enquiry_message").html(msg.message);
              $('#submit_quickenq').removeAttr('disabled');
            }
          }       
          });
      }
  });
  
/*  $('#closeEnq , #quickEnq').click(function(){
      $('#mrova-img-control').click();
  })*/

      
  });
</script>