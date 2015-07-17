   <!-- HEADER -->
   <?php echo $this->element("common_header");?>
        <!-- END HEADER --> 
        
<!--BANNER-->                             
<?php echo $this->element("banner_area");?> 
<!--END BANNER-->                             
 
        
            <!-- Carousel
    ================================================== -->

<?php echo $content_for_layout;?>
        
        
        
        
          
    
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