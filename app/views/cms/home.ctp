<link rel="stylesheet" type="text/css" href="<?php echo WEB_URL;?>css/popup_contact.css">
<link href="<?php echo WEB_URL;?>css/ekko-lightbox.css" rel="stylesheet">
<!-- VIDEO SECTION -->
    <aside class="video modalBorder" id="video-view"><!-- Video modal -->
        <div class="exit" id="exit">
            <div class="exitHolder">
                <img class="close-x" src="images/close-x-black.svg">
            </div>
        </div>
        <div id="video-content"></div>
        <div class="share">
            <a href="#"><i class="fa fa-twitter fa-2x dark twitter-share"></i></a>
            <a href="#"><i class="fa fa-facebook fa-2x dark facebook-share"></i></a>
            <a href="#"><i class="fa fa-envelope-o fa-2x dark email-share"></i></a>
        </div>
    </aside>
	<div class="video vidModal"></div>

	<!-- HERO SECTION -->
    <section id="hero" class="hero">
    	<header class="heroText">
			<?php echo $form->create('Search',array('name'=>'courseSearch','url'=>'/courses/search'));?>
			<div class="course_search" >
<input type="text" name="data[Search][search_text]" id="course" placeholder="Please enter search keyword" style="width:312px; height:40px; padding-left:6px" />
<input type="button"  class="btn_search" onclick="searchCourse();"/>
<div id="log" style="width: 300px; overflow: auto;"></div>


</div>

<div class="course_search" >
<a href="<?php echo WEB_URL;?>applyonline/course_offer"><div class="free_course_btn"></div></a>

<div class="clear"></div>
</div>
		<?php echo $form->end(); ?>
		</header>
        <div id="hero-slider" class="backslider">
        <div style="display: block;" class="bs-controls"><a style="opacity: 1; background-position: 0px -40px;" class="bs-timer" href="#bs"></a></div>
        <div class="bs-overlay"></div>
            <ul class="bs-slides">
            	<li class="slider-img slide2"><h2>Get PD courses<br> worth 20 CPD points <br>for RM 200 !</h2></li>
                <li class="slider-img slide3"><h2>Study Professional<br> Development Course<br>  Online !</h2></li>
                <li class="slider-img slide1"><h2 style="margin-top:110px">Building <br>Health Careers</h2></li>
                
              <!--  <li style="display: block; width: 100%; height: 100%; opacity: 1; left: 0px; top: 0px; z-index: 20;" class="slider-img slide3"></li>-->
                
               <!-- <li class="slider-img slide4"><h2>The gold standard <br><span style="font-weight:bold">for nursing professional development.</span></h2></li>-->
            </ul>
        </div>
    </section>   

	<!-- FEATURES SECTION -->
    <section class="features round">
       <!-- <h3>Features</h3>-->
        <ul><!-- top row -->
            <li>
                <a class="circle" id="img-1" href="<?php echo WEB_URL;?>users/onlinelogin" onclick="mixpanel.track('Clicked Feature', {type: 'Simple Setup'});">
                    <h4 class="white"></h4>
                    <div class="copy">
                        <p>Learn more</p>
                    </div>
                    <h2>Student <br>Login</h2>
                </a>
            </li>
            <li>
                <a class="circle" id="img-2" href="<?php echo WEB_URL;?>course/professional-development" onclick="mixpanel.track('Clicked Feature', {type: 'Self-Fixing'});">
                    <h4 class="white"></h4>
                    <div class="copy">
                        <p>Learn more</p>
                    </div>
                    <h2>Professional Development<br> Courses</h2>
                </a>
            </li>
            <li>
                <a class="circle-2" id="img-3" href="<?php echo WEB_URL;?>corporate_registrations" onclick="mixpanel.track('Clicked Feature', {type: 'One-Tap'});">
                    <h4 class="white"></h4>
                    <div class="copy">
                        <p>Learn more</p>
                    </div>
                    <h2>Corporate <br>Registration</h2>
                    
                </a>
            </li>           
        </ul>
    </section>
<section id="home-with-eero" class="your-home-eero">    
        <header>
        <div class="wrap">

            <h3>What our students say</h3>
            <img src="images/testi.png">
              <p>"My name is Najwa Hariz and I did my fire and safety course from Health Careers Malaysia. The course indeed provides a meaningful insight into the various aspects of fire and safety which are going to be helpful from a career point of view........"</p>
                        
</div>
<div class="wrap">  
    
            <ul>
                <a href="<?php echo WEB_URL;?>student_enquiry"><li class="student_enq" data-home="twostory" id="two-story" onclick="mixpanel.track('Clicked Two-Story Button');">Student Enquiry</li></a>
                <a href="<?php echo WEB_URL;?>applyonline/course_offer"><li class="free_course" data-home="twostory" id="two-story" onclick="mixpanel.track('Clicked Two-Story Button');">
					Get Your Free Course</li></a>
                <!--<a href="<?php echo WEB_URL;?>video-gallery"><li class="gallery" data-home="twostory" id="two-story" onclick="mixpanel.track('Clicked Two-Story Button');">
					Video Gallery</li></a>-->
				   <a href="https://www.youtube.com/watch?v=ki04L1oEn-4&feature=youtu.be " data-toggle="lightbox" data-gallery="youtubevideos" class=""><li class="gallery" data-home="twostory" id="two-story" onclick="mixpanel.track('Clicked Two-Story Button');">
					Video Demo</li></a>
                  
                   <!---------------------------pop up---------------------------------> 
                    
                 <!--  <div id="popup1" class="modal-box">
                      <header> <a href="#" class="js-modal-close close">×</a>
                        <h3>Pop Up One</h3>
                      </header>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo at felis vitae facilisis. Cras volutpat fringilla nunc vitae hendrerit. Donec porta id augue quis sodales. Sed sit amet metus ornare, mattis sem at, dignissim arcu. Cras rhoncus ornare mollis. Ut tempor augue mi, sed luctus neque luctus non. Vestibulum mollis tristique blandit. Aenean condimentum in leo ac feugiat. Sed posuere, est at eleifend suscipit, erat ante pretium turpis, eget semper ex risus nec dolor. Etiam pellentesque nulla neque, ut ullamcorper purus facilisis at. Nam imperdiet arcu felis, eu placerat risus dapibus sit amet. Praesent at justo at lectus scelerisque mollis. Mauris molestie mattis tellus ut facilisis. Sed vel ligula ornare, posuere velit ornare, consectetur erat.</p>
                      </div>
                      <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
                    </div> -->
                    
 <!---------------------------pop up--------------------------------->                    
                    
                    
                    
                    
                    
                    
                 <!--<a href="<?php echo WEB_URL;?>general_enquiries/general_enquiry"><li class="gallery" data-home="twostory" id="two-story" onclick="mixpanel.track('Clicked Two-Story Button');">
					Quick Enquiry</li></a>-->
                <a href="<?php echo WEB_URL;?>latestnews"><li class="news" data-home="twostory" id="two-story" onclick="mixpanel.track('Clicked Two-Story Button');">
					News</li></a>
                <li class="feedback" data-home="twostory" id="contact" onclick="mixpanel.track('Clicked Two-Story Button');">
					Send Feedback</li>
            </ul>
            </div>
        </header>
     
    </section>
    <div id="contact_popup_main" class="pop_main_window">
                        <div class="contact_popup_window">
                          <div class="popup_window_head"><img src="<?php echo WEB_URL;?>img/feedbackIcon.png" alt="" style="margin-right:5px;" />Send Feedback</div>
                          <span id="contact_close" class="contact_close" title="Close"><img src="<?php echo WEB_URL;?>img/close.png" /></span>
                          <form action="" method="post" id="contactus">
                            <label>Name<span class="red">*</span></label>
                            <input type="text" name="contact_name" id="contact_name" value="" title="Name" class="hint"/>
                            <br/>
                            <label>E-mail<span class="red">*</span></label>
                            <input type="text" name="contact_email" id="contact_email" value="" title="Email" class="hint"/>
                            <br/>
                            <label>Mobile<span class="red">*</span></label>
                            </label>
                            <input type="text" name="contact_phone" id="contact_phone" value="" title="Phone" class="hint"/>
                            <br/>
                            <label>Feedback<span class="red">*</span></label>
                            <textarea name="contact_comment" id="contact_comment" style="height:100px;" title="Comment" class="hint"></textarea>
                            <br/>
                            <span id="contact_message" class="red">&nbsp;</span><br/>
                            <label>&nbsp;</label>
                            <input type="submit" class="submit" value="Submit" id="submit" name="submit" style="margin-top:7px;" >
                            <br/>
                          </form>
                        </div>
                      </div>
        <div id="success_popup_main" class="pop_main_window">
                        <div class="contact_popup_window"> <span id="success_close" class="contact_close" title="Close"><img src="<?php echo WEB_URL;?>img/close.png" /></span>
                          <div class="popup_window_head">Successfully Submitted</div>
                          <div id="contact_success_message">Thank you for your interest in IHNA. Our representative will answer your queries shortly.</div>
                        </div>
                      </div>
<script type="text/javascript">
		function searchCourse(){
			if(document.courseSearch.course.value==''){
				alert("Please enter course name");
			}else{
				document.courseSearch.submit();
			}
		}
	</script>
<script>
	$(document).ready(function(){
		
		$("#contact_popup_main").hide();
		$("#success_popup_main").hide();
		$("#contact_close").click(function(){
			$("#contact_popup_main").hide();
		});
		$("#contact_popup_main,#contact").click(function(e){
			e.stopPropagation();
		});
		$(document).click(function(){
			$(".pop_main_window").hide();
		});
		$("#success_close").click(function(){
			$("#success_popup_main").hide();
		});
		$("#contact").click(function(){
			$("#contact_popup_main").show();
		});
		$("#contactus").submit(function(e){
			e.preventDefault();
			var submit_flage=true;
			
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			    
			$("#contact_message").html('');
			if($("#contact_name").val().length<=0)
			{
				$("#contact_message").html('Please enter Name');
				submit_flage=false;
			}
			else if($("#contact_email").val().length<=0)
			{
				$("#contact_message").html('Please enter E-mail');
				submit_flage=false;
			}
			else if (!filter.test($("#contact_email").val())) {
				$("#contact_message").html('Please enter valid E-mail');
				submit_flage=false;
			}
			else if($("#contact_phone").val().length<=0)
			{
				$("#contact_phone").html('Please enter Telephone');
				submit_flage=false;
			}			
			
			else if($("#contact_comment").val().length<=0)
			{
				$("#contact_message").html('Please enter Message');
				submit_flage=false;
			}
			if(submit_flage)
			{				
				$.ajax({
					type: "POST",
					url: "<?php echo WEB_URL;?>contact_feedback.php",
					data: $( this ).serialize(),
					dataType:"json",
					beforeSend: function(){				
						$("#contact_message").html('Loading...');
						},			
					success: function(msg){	
						//alert(msg);					
						if(msg==true)
						{
							//alert("dfdd");
							$("#contact_popup_main").hide();
							$("#contact_email").val('');	
							$("#contact_name").val('');							
							$("#contact_phone").val('');						
							$("#contact_comment").val('');
							$("#contact_message").html('');						
							$("#contact_success_message").html('Thank you, we will contact you soon');
							
							$("#success_popup_main").show();
						}
						else
						{
							$("#contact_message").html(msg.message);
						}
					}				
					});
			}
		});
	});
</script>
<!-----------------------------pop up--------------------------------->

	<script src="<?php echo WEB_URL;?>js/jquery.js"></script>
		<script src="<?php echo WEB_URL;?>js/ekko-lightbox.js"></script>
		<script type="text/javascript">
			$(document).ready(function ($) {

				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							if (window.console) {
								return console.log('Checking our the events huh?');
							}
						},
						onNavigate: function(direction, itemIndex) {
							if (window.console) {
								return console.log('Navigating '+direction+'. Current item: '+itemIndex);
							}
						}
					});
				});

				//Programatically call
				$('#open-image').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});
				$('#open-youtube').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});

				$(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							var a = this.modal_content.find('.modal-footer a');
							if(a.length > 0) {
								a.click(function(e) {
									e.preventDefault();
									this.navigateTo(2);
								}.bind(this));
							}
						}
					});
				});

			});
		</script>
		<script src="<?php echo WEB_URL;?>js/bootstrap.js"></script>

<!-----------------------------pop up--------------------------------->


<!-- For auto suggest -->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
<style>
.ui-autocomplete-loading {
  background: white url("<?php echo WEB_URL;?>images/ui-anim_basic_16x16.gif") right center no-repeat;
}
</style>

  <script>
  $(function() {
    function log( message ) {
      //$( "<div>" ).text( message ).prependTo( "#log" );
      $( "#log" ).scrollTop( 0 );
    }
 
    $( "#course" ).autocomplete({
      source: "<?php echo WEB_URL;?>autosuggest/homesearch",
      minLength: 2,
      select: function( event, ui ) {
        log( ui.item ?
          "Selected: " + ui.item.value + " aka " + ui.item.id :
          "Nothing selected, input was " + this.value );
      }
    });
  });
  </script>
  
<!-- Auto suggest ends -->