<div id="contents">
  <div class="container">
    <div class="row"> 
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 ">
              <div class="row">
                  <?php echo $page_content;?>     
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
                <h1 class=" wow triggerAnimation animated" data-animate="fadeInRight"  data-wow-delay=".1s">Courses Offered</h1><br />
                    
                
                <?php
                    $tot = count($courses);
                    $rem = $tot % 3;
                    $cnt = 1;
                    foreach($courses as $row ){
                        if($rem == 1 && $cnt == $tot ){
                            break;
                        }
                        $cnt++;
                ?>
                
                        <div class="course-icon col-xs-12 col-sm-6 col-md-4 col-lg-4 wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">                       
                          <!-- <a title="<?php echo $row['c']['course_name']; ?>" class="" href="<?php echo WEB_URL; ?>courses/details/<?php echo $row['c']['course_id']; ?>/1"> -->
                            <a title="<?php echo $row['c']['course_name']; ?>" class="" href="<?php echo $this->Common->courseURL($row['c']['course_id'], 1)?>">
                            
                            <img class="img-responsive"  border="0" alt="" src="https://academic.ihna.edu.au/uploads/course_img_thumb/<?php echo $row['co']['thumb']; ?>" >
                            <h2><?php echo $row['c']['course_name']; ?></h2></a>
                        </div>

                <?php
                    }
                ?>
                
                
              </div>
                   <?php
                   if($rem == 1){
                   ?>
                    <div class="course-icon1 col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">
                      <div class="cover pull-left">
                        <a title="Initial Registration for Overseas Registered Nurses(IRON)" href="<?php echo WEB_URL; ?>courses/details/<?php echo $courses[$tot-1]['c']['course_id']; ?>/1">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">                                             
                              <img class="img-responsive"  border="0" alt="" src="https://academic.ihna.edu.au/uploads/course_img_thumb/<?php echo $courses[$tot-1]['co']['thumb']; ?>">                   
                    </div></a>
                            
                          
                          <div class="course-icon1 col-xs-12 col-sm-6 col-md-8 col-lg-8">               
                <a title="<?php echo $courses[$tot-1]['c']['course_name']; ?>" href="<?php echo WEB_URL; ?>courses/details/<?php echo $courses[$tot-1]['c']['course_id']; ?>/1">
                                <h2><?php echo $courses[$tot-1]['c']['course_name']; ?></a>                        
                    </div>
                            
                        </div>    
                     </div> 
                  <?php
                    }
                  ?>
                  
          </div>
                 
        
                <div class="row">           
              <h1 class=" wow triggerAnimation animated" data-animate="fadeInRight"  data-wow-delay=".1s">Australia</h1>
              <br />
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
                                
                   <a href="<?php echo WEB_URL; ?>why_australia">
                        <div class="is_box col-md-4 col-sm-6 wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">  
                      <div class="is_heading">Why Australia ?</div>
                        <img class="img-responsive" src="<?php echo WEB_URL; ?>img/aus.png">
                        <p>Australian society is made up of people from a rich variety of cultural, ethnic, linguistic and religious
                           backgrounds,..... </p>
                        </div>
                     </a>
                     <a href="<?php echo WEB_URL; ?>australian_education">
                        <div class="is_box col-md-4 col-sm-6 wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">  
                      <div class="is_heading">Australian Education</div>
                        <img class="img-responsive" src="<?php echo WEB_URL; ?>img/edu.png">
                        <p>There are many advantages to an Australian education. The educational experience and lifestyle offered to students here is .... </p>
                    </div></a>
                    <a href="<?php echo WEB_URL; ?>live_in_australia">
                      <div class="is_box col-md-4 col-sm-6 wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">                      
                        <div class="is_heading">Live in Australia</div>
                        <img class="img-responsive" src="<?php echo WEB_URL; ?>img/life.png">
                        <p>Australia is a melting hotpot of cultures, each of whom brings their own unique flavor and sensibilities to the Australian lifestyle...</p>
                    </div></a>
                    <a href="<?php echo WEB_URL; ?>about_us">
                  <div class="is_box col-md-4 col-sm-6 wow triggerAnimation animated" data-animate="fadeInRight"  data-wow-delay=".1s">  
                      <div class="is_heading">About IHNA</div>
                        <img class="img-responsive" src="<?php echo WEB_URL; ?>img/ihna_office.png">
                        <p>The Institute of Health and Nursing Australia (IHNA) is one of Australia's leading providers of comprehensive health and nursing..... </p>
                    </div></a>
                    
                   <a href="<?php echo WEB_URL; ?>course_list">
                      <div class="is_box col-md-4 col-sm-6  wow triggerAnimation animated" data-animate="fadeInRight"  data-wow-delay=".1s">  
                      <div class="is_heading">Courses</div>
                        <img class="img-responsive" src="<?php echo WEB_URL; ?>img/work.png">
                        <p>The Institute of Health and Nursing Australia (IHNA) is one of Australia's leading providers of comprehensive health and nursing......  </p>
                    </div></a>
                    
                    <a href="<?php echo WEB_URL; ?>homes/students">
                    <div class="is_box col-md-4 col-sm-6  wow triggerAnimation animated" data-animate="fadeInRight"  data-wow-delay=".1s">  
                      <div class="is_heading">Students</div>
                        <img class="img-responsive" src="<?php echo WEB_URL; ?>img/student.png">
                        <p>The Institute of Health and Nursing Australia (IHNA) is one of the leading providers of health and nursing education</p>
                    </div> 
                    </a>
                    
                </div>
            </div>
            <div class="row">      
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding mar-bot">
                      <div class="is_cricos col-md-4 col-sm-6  wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">  
                          <div class="is_cricos_head">
                              <h2>After Graduation</h2>
                            </div>
                            <p style="text-align:left">If you have completed your graduation from an Australian educational institute, there are several options in front of you.<br>
                            <span class="view_more"><a href="<?php echo WEB_URL; ?>after_graduation">                            View more...</a></span></p>
                           
                        </div>
                        <div class="is_cricos col-md-4 col-sm-6  wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">  
                          <div class="is_cricos_head">
                              <h2>CRICOS</h2>
                            </div>
                            <p style="text-align:left">The Commonwealth Register of Institutions and Courses for Overseas Students (CRICOS) is an Australian<br>
                            <span class="view_more"><a href="<?php echo WEB_URL; ?>cricos">                            View more...</a></span></p>
                           
                        </div>
                        <div class="is_cricos col-md-4 col-sm-6  wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">  
                          <div class="is_cricos_head">
                              <h2>Work in Australia</h2>
                            </div>
                            <p style="text-align:left">Australia offers great employment opportunities and is a wonderful place to call your home. The lifestyle is stress<br>
                            <span class="view_more"><a href="<?php echo WEB_URL; ?>work_in_australia">                            View more...</a></span></p>                           
                        </div>
                  
                  </div>
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
                    <a href="<?php echo WEB_URL; ?>fees_and_charges_cricos" title="IHNA Fees Schedule for International Students"><li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">IHNA Fees Schedule</li></a>
                    <a target="_blank" href="<?php echo WEB_URL; ?>uploads/studentprospectus/IHNA_student_prospectus.pdf"> <li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Students Prospectus</li></a>
                    <a href="<?php echo WEB_URL; ?>introduction_to_australia"><li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Pre Arrival Informations</li></a>
                </ul>
               <div class="side_head wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Life in Australia  </div>
                  <h3 class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Australia’s Sunniest City - Perth</h3>
                   <p  class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s" style="line-height:22px; font-size:14px">The Perth campus is conveniently located in the vibrant Perth CBD in Western Australia (WA), Australia’s largest state. Blessed with beautiful beaches, blue skies and great weather, ......</p>
                
                  <h3  class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Multicultural Melbourne</h3>
                   <p   class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s" style="line-height:22px; font-size:14px">Victoria offers a variety of great things to see and do such as snow skiing, bushwalking in national parks, swimming and surfing at the many golden beaches, penguin-watching, wine tastings at beautiful wineries ......</p>

          <h3  class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">Cosmopolitan Sydney</h3>
                   <p  class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s" style="line-height:22px; font-size:14px">The Sydney campus is located in Parramatta in the culturally sophisticated state of New South Wales (NSW).Unlike its other Australian sister capital cities, Sydney is the oldest. However, for its age it is a good looking city ..........</p>

                <ul class="sidelist_bottom">
                 <li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s"><a href="<?php echo WEB_URL; ?>guidelines_for_admission">Guidelines for Admission</a></li>
                 <li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s"><a href="<?php echo WEB_URL; ?>modes_of_study">Course Content and Modes of Study</a></li>
                 <li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s"><a href="<?php echo WEB_URL; ?>information_advice_support">Information, Advice and Support</a></li>
                 <li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s"><a href="<?php echo WEB_URL; ?>deferments_suspension_cancelation">Deferment, Suspension and Cancellation</a></li>
                 <li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s"><a href="<?php echo WEB_URL; ?>student_support_services">Student Support Services</a></li>
                 <li class="wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s"><a href="<?php echo WEB_URL; ?>complaints_and_appeals">Complaints and Appeals</a></li>
                </ul>
       
                
                
            </div>
    </div>
  </div>
</div>