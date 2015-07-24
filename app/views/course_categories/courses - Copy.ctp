<link href="../css/style_list.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery_list1.js"></script>
<script type="text/javascript" src="../js/jquery_list2.js"></script>

 <div id="Container">
       	  		<div id="ContentBoxLeft" style="margin-right:20px; width:680px;"> 
                  <div class="course-detailcontent">
    									<?php echo $this->element('course_cart');?>
                  </div>
									<div class="course-detailcontent">
                                
                   <div class="CourseHeading" style="color:#A6288F;"><?php echo $course_cat;?> Courses</div>
                   
												                   
                   
                   
                   			<div class="bodytext" align="justify">
                										<?php echo $course_desc; ?></div>
                				 </div> 
          	          
                    <?php
					                   //pr($courses);
                       if($courses)
																							{
																										 $online_course = $face_course = "";
$onc = $ffc =0;
																											foreach ($courses as $course):
																											
																											$course_brochure = $course_appln = "";
																											
																											if($course['Course']['featured'] == 1){ $style="listStyle";}else{$style="listStyle1";}
																											if($course['Course']['brochure']!='')
																																		$course_brochure = '<a href="'.WEB_URL.'uploads/course_brochures/'.$course['Course']['brochure'].'" target="_blank"><div class="Listbtn-brochure" ></div></a>';
																															
																											if($course['Course']['course_category_id']==2)
																														$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form.pdf" target="_blank"><div class="Listbtn-application" ></div></a>';
																											elseif($course['Course']['course_category_id']==1)
																														$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form_english.pdf" target="_blank"><div class="Listbtn-application" ></div></a>';
																																		
																												if($course['Course']['online_course'] == 1)
																												{
																															$online_course .= '<li>
																																																				<a href="#" class="'.$style.'">'.$course['Course']['course_title'].'<span class="st-arrow">Open or Close</span></a>
																																																				
																																																						<div id="listdetailbox" class="st-content" style="height:auto;">
																																																															<!--<div class="listdetail-onlinecourse"></div>-->
																																																			
																																																								<div class="Listcontent" align="justify">'.$course['Course']['description'].'</div>
																																																										<div class="listdetailbox-heading">
																																																												<a href="'.WEB_URL.'applyonline/'.$course['Course']['url'].'"><div class="Listbtn-apply" ></div></a>
																																																												'.$course_brochure.'
																																																												'.$course_appln.'
																																																												<a href="'.WEB_URL.'courses/'.$course['Course']['url'].'"><div class="Listbtn-view" style="margin:0" ></div></a>
																																																												<a href="javascript:void();" onclick="addToCart('.$course['Course']['id'].');">Add to Cart</a>
																																																										</div>
																																																										</div>
																																																 </li>';
																												}
																												if($course['Course']['regular_course'] == 1)
																												{
																															$face_course .= ' <li style="min-height:30px!important;">
																																																			<a href="#" class="'.$style.'">'.$course['Course']['course_title'].'<span class="st-arrow">Open or Close</span></a>
																																																			
																																																					<div id="listdetailbox" class="st-content" style="height:auto;">
																																																														<!--<div class="listdetail-onlinecourse"></div>-->
																																																		
																																																							<div class="Listcontent" align="justify">'.$course['Course']['description'].'</div>
																																																									<div class="listdetailbox-heading">
																																																									<a href="'.WEB_URL.'applyonline/'.$course['Course']['url'].'"><div class="Listbtn-apply" ></div></a>
																																																									'.$course_brochure.'
																																																									'.$course_appln.'
																																																									<a href="'.WEB_URL.'courses/'.$course['Course']['url'].'"><div class="Listbtn-view" style="margin:0" ></div></a>
																																																									</div>
																																																									</div>
																																															    </li>';
																												}
																											?>
																					
                        <?php endforeach; 
																								
																								if($online_course == "")
																										$online_course .= '<li class="nocourse">No courses to display</li>';
																								if($face_course == "")
																											$face_course .= '<li class="nocourse">No courses to display</li>';
						
	   }
	   else{
		   				$online_course = $face_course = '<li class="nocourse">No courses to display</li>';
	   } ?>

 <?php $url_now = $this->params['url']['url'];
 	   $split_url = explode("/",$url_now);
	   
 ?>  
 <?php if(isset($split_url) && $split_url[1] == 'english'){?>
   <ul class="tabs">
	    <li><a href="#tab1">Online IELTS
 </a></li>
     <li><a href="#tab2">Blended IELTS </a></li>
      <li><a href="#tab3">English for Healthcare Professionals</a></li>
	  </ul>
  <?php if(isset($split_url) && $split_url[1] == 'nursing'){?>
   <ul class="tabs">
	    <li><a href="#tab1">Online Courses</a></li>
     <li><a href="#tab2">Face to Face Courses</a></li>
	  </ul>
   <?php }?>
<?php }else{?>
 <ul class="tabs">
	    <li><a href="#tab1">Online Courses</a></li>
     <li><a href="#tab2">Face to Face Courses</a></li>
	  </ul>
      <?php }?>
    <?php if(isset($split_url) && $split_url[1] == 'english'){?>
     <?php $online_ielts_course  = $this->requestAction(array('controller' => 'course_categories', 'action' => 'online_ielts'));?>
      <div class="tab_container">
        <div id="tab1" class="tab_content">
           <div id="st-accordion" class="st-accordion">
             <ul style="padding:0">
               <?php echo $online_ielts_course; ?>
             </ul>
           </div>
        </div>
        <?php $face_ielts_course  = $this->requestAction(array('controller' => 'course_categories', 'action' => 'ielts_blended'));?>
       <div id="tab2" class="tab_content">
        <div id="st-accordion1" class="st-accordion">
          <ul style="padding:0">
            <?php echo $face_ielts_course; ?>
          </ul>
        </div>
      </div>  
        <?php $english_health_care_course  = $this->requestAction(array('controller' => 'course_categories', 'action' => 'english_health_care_course'));?>
       <div id="tab3" class="tab_content">
        <div id="st-accordion2" class="st-accordion">
          <ul style="padding:0">
            <?php echo $english_health_care_course; ?>
          </ul>
        </div>
      </div>   
       <?php if(isset($split_url) && $split_url[1] == 'nursing'){?>
     <?php $online_ielts_course  = $this->requestAction(array('controller' => 'course_categories', 'action' => 'online_ielts'));?>
      <div class="tab_container">
        <div id="tab1" class="tab_content">
           <div id="st-accordion" class="st-accordion">
             <ul style="padding:0">
               <?php echo $online_ielts_course; ?>
             </ul>
           </div>
        </div>
        <?php $face_ielts_course  = $this->requestAction(array('controller' => 'course_categories', 'action' => 'ielts_blended'));?>
       <div id="tab2" class="tab_content">
        <div id="st-accordion1" class="st-accordion">
          <ul style="padding:0">
            <?php echo $face_ielts_course; ?>
          </ul>
        </div>
      </div>  
        <?php $english_health_care_course  = $this->requestAction(array('controller' => 'course_categories', 'action' => 'english_health_care_course'));?>
       <div id="tab3" class="tab_content">
        <div id="st-accordion2" class="st-accordion">
          <ul style="padding:0">
            <?php echo $english_health_care_course; ?>
          </ul>
        </div>
      </div>   
      <?php  }?> 
      <?php }else {?>  
       <div class="tab_container">
        <div id="tab1" class="tab_content">
           <div id="st-accordion" class="st-accordion">
             <ul style="padding:0">
               <?php echo $online_course; ?>
             </ul>
           </div>
        </div>
         
       <div id="tab2" class="tab_content">
        <div id="st-accordion1" class="st-accordion">
          <ul style="padding:0">
            <?php echo $face_course; ?>
          </ul>
        </div>
      </div>   
      <?php }?>
     </div>

   </div>
      
<script type="text/javascript">
			$(function() {
					$('#st-accordion').accordion({
						oneOpenedItem	: true
					});
			});
			$(function() {
					$('#st-accordion1').accordion({
						oneOpenedItem	: true
					});
			});
				$(function() {
					$('#st-accordion2').accordion({
						oneOpenedItem	: true
					});
			});
</script>
		<script>
			var ADPACKSSTYLE = "lightVertical";
		</script>
  
  <script>
$(document).ready(function() {

 //When page loads...
 $(".tab_content").hide(); //Hide all content
 $("ul.tabs li:first").addClass("active").show(); //Activate first tab
 $(".tab_content:first").show(); //Show first tab content

 //On Click Event
 $("ul.tabs li").click(function() {

  $("ul.tabs li").removeClass("active"); //Remove any "active" class
  $(this).addClass("active"); //Add "active" class to selected tab
  $(".tab_content").hide(); //Hide all tab content

  var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
  $(activeTab).fadeIn(); //Fade in the active ID content
  return false;
 });

});
</script>
