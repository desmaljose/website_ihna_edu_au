<style>
.close {
    height: auto;
    position: static;
    right:0;
    top: 0;
    width:auto;
}


</style>

<?php
if(@$_SESSION['cart']['cpdpoint']){
   
   $cpd_point = $_SESSION['cart']['cpdpoint'];
}else{
   $cpd_point = '0';
}
if(@$_SESSION['cart']['courses']){
   
   $chk_courses = count($_SESSION['cart']['courses']);
}else{
   $chk_courses = '0';
}
?>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	<h1><?php echo $page_title;?></h1>
		<?php if($course_category['CourseCategory']['image']!=""){
		  /*if($category=='professional-development'){
		  ?>
           <img src="<?php echo WEB_URL;?>img/pd_package.png" align="right" class="imgPosition" alt=""  />
           <?php }else{*/
		?>
    <div style="float:right">
	  <img class="img-responsive" style="margin:7px 0 10px 15px;" src="<?php echo WEB_URL;?>uploads/category_image/<?php echo $course_category['CourseCategory']['image'];?>" align="right" class="imgPosition"  alt=""  />
	  <div style="clear:both"></div>
<!--	  <div style="float:right; margin-right:68px">
      	<a href="<?php echo WEB_URL;?>demo_course_registration"><div class="demo_btn" style="margin-right:-39px;">Demo Course</div></a>
      </div>
       <div style="clear:both"></div>-->
	  <div style="float:right; margin-right:28px">
      	<a href="<?php echo WEB_URL;?>uploads/course_brochures/HCM_Online_PD_Course_Brochure.pdf" target="_blank"><div class="new_btns_brochure">Brochure</div></a>
      </div> 
      <div style="clear:both"></div>
	  <div style="float:right; margin-right:28px">
      	 <a href="https://www.youtube.com/watch?v=ki04L1oEn-4&feature=youtu.be " data-toggle="lightbox" data-gallery="youtubevideos" class=""><div class="demo_video">Video Demo</div></a>
      </div> 
      </div>
      <?php //} ?>
       <?php } echo $page_content; ?>
       
       <?php if($category=='professional-development'){?>   
       	<div style="background:#EEEEEE; border:1px solid #B8DCEF; float:left; border-bottom:4px solid #00AEEF; border-radius: 7px; margin-bottom:10px; padding: 20px 20px 10px; margin-top:30px; font-weight:500; color:#2776BB;">	
			<!--Looking to enrol courses in bulk? Good news! IHNA now offers three course packages - basic, plus and premier - each offering 10, 15 and 20 courses respectively at reduced fees. -->
<!--You can also enrol courses individually by directly adding the courses of your choice to the shopping cart.  All available courses are listed below-->

<!--Looking to enrol courses in bulk? Good news! HCM now offers to earn 20 CPD points for MYR 200.
You can also enrol in individual courses by directly adding the courses of your choice to the shopping cart.  All available courses are listed below. -->

<span style="font-weight:500; font-size:18px;">Looking to enrol for courses in bulk? Good News!</span> <br />
<!--CPD points for our Professional Development courses are given by the Nursing Board of Malaysia. Additionally, HCM now offers  20 CPD points for RM 200.<br />
Please note that we are registered with HRDF, and you may be eligible to claim your training expenses from them.
You can also enrol in individual courses by directly adding the courses of your choice to the shopping cart. All available courses are listed below.-->
    <ul style="margin-left:30px; float:left;">
    <li>At HCM you can avail the benefit of 20 CPD points Combo Pack for RM 200.</li>
    <li>You can also enrol in individual courses by directly adding the courses of your choice to the shopping cart. All available courses are listed below.</li>
    <li>Please note that we are registered with HRDF and you may be eligible to claim your training expenses from them.</li>
    <li>CPD points for our Professional Development Courses are given by the Nursing Board of Malaysia.</li>
    </ul>
    
</div><div style="clear:both"></div>
<a href="<?php echo WEB_URL; ?>applyonline/course_offer" title=""><img class="img-responsive" style="margin:0 auto 10px" src="<?php echo WEB_URL; ?>images/free_course_banner.png" border="0" /></a><a name="hcmcourses"></a>
<div style="clear:both"></div>
        
        <!--<a href="<?php echo WEB_URL; ?>applyonline/course_offer" title="">
        <p style="background:#E4F8E8; border:1px solid #72BE44; border-bottom:4px solid #72BE44; border-radius: 7px; padding: 20px 20px 10px; margin-top:20px; font-weight:bold; color:#2776BB;">
			Now complete the ECG Course free from HCM! Limited period offer - just register with HCM and avail this amazing discount at the earliest!&nbsp; Please click here to register.
		</p>-->
             
      <?php }?>
       <?php if($course){?>
       <?php
	   if($category=='professional-development'){
	   ?>
       <!--<div style="padding:20px 20px 10px 20px; border:1px solid #B8DCEF; background:#E9F7FE;-webkit-border-radius: 7px;
border-radius: 7px;">
       <h1>Online Professional Development Course Packages</h1>
  
       <div class="round_cart_cover">
         <a href="<?php echo WEB_URL;?>applyonline/coursepackagelist/<?php echo $course_package[0]['CoursePackages']['package_id']?>"> 
         	<div class="round_cart orange">
            	<span style="font-size:26px; color:#222;"> <?php echo $course_package[0]['CoursePackages']['package_name']?></span><br/>
                <br/><?php echo $course_package[0]['CoursePackages']['number_of_courses']?> Programs<br/> for RM <?php echo $course_package[0]['CoursePackages']['fee']?></div></a>
         <div style="clear:both"></div>
         <a href="<?php echo WEB_URL;?>applyonline/coursepackagelist/<?php echo $course_package[0]['CoursePackages']['package_id']?>"><div class="enq_btn"></div></a>
       </div>
       
       <div class="round_cart_cover" style="margin:0 51px">
           <a href="<?php echo WEB_URL;?>applyonline/coursepackagelist/<?php echo $course_package[1]['CoursePackages']['package_id']?>">
           		<div class="round_cart grey"><span style="font-size:26px; color:#222;"> <?php echo $course_package[1]['CoursePackages']['package_name']?></span><br/>
                <br/> <?php echo $course_package[1]['CoursePackages']['number_of_courses']?> Programs<br/> for RM <?php echo $course_package[1]['CoursePackages']['fee']?></div></a>
         <div style="clear:both"></div>
          <a href="<?php echo WEB_URL;?>applyonline/coursepackagelist/<?php echo $course_package[1]['CoursePackages']['package_id']?>"><div class="enq_btn"></div></a>
       </div>
       <div class="round_cart_cover" style=" border-right:none;">
         <a href="<?php echo WEB_URL;?>applyonline/coursepackagelist/<?php echo $course_package[2]['CoursePackages']['package_id']?>">
         	<div class="round_cart blue"><span style="font-size:26px; color:#222;"> <?php echo $course_package[2]['CoursePackages']['package_name']?></span><br/> <br/> <?php echo $course_package[2]['CoursePackages']['number_of_courses']?> Programs<br/> for RM <?php echo $course_package[2]['CoursePackages']['fee']?></div>
         <div style="clear:both"></div>
          <a href="<?php echo WEB_URL;?>applyonline/coursepackagelist/<?php echo $course_package[2]['CoursePackages']['package_id']?>"><div class="enq_btn"></div></a>
       </div><br/> <br/>-->
       
      
    <?php
	/*foreach($course_package as $keyP => $valP){

	?>
       <div class="cart_wrap">

       <h2><?php echo $valP['CoursePackages']['package_name']?></h2>
       	<div class="cart_wrap_content">
	
	<p>Due to the constantly changing and evolving healthcare system, the nurses should be able to recognize and respond to all the advancements in professional standards and regulations. Higher levels of clinical competency, proficiency and skills are required from healthcare professionals.</p>
    </div>

    <div style="float:left">
    <h2 style="text-align:center"><?php echo $valP['CoursePackages']['number_of_courses']?> programs for</h2>

    <h2 style="text-align:center">RM <?php echo $valP['CoursePackages']['fee']?></h2>
    <a href="<?php echo WEB_URL;?>applyonline/coursepackagelist/<?php echo $valP['CoursePackages']['package_id']?>"><div class="enq_btn">Buy Now</div></a>
     <div style="clear:both"></div><br />
    </div>
    <div style="clear:both"></div>

<!--Membership Details:

a.       10 Courses – RM500

b.      15 Courses – RM750

c.       20 Courses – RM1,000
-->
</div>
<?php
	}*/
?>
<!--<div class="cart_wrap">
       <h2>Basic</h2>
       	<div class="cart_wrap_content">
	
	<p>Due to the constantly changing and evolving healthcare system, the nurses should be able to recognize and respond to all the advancements in professional standards and regulations. Higher levels of clinical competency, proficiency and skills are required from healthcare professionals. </p>
    </div>
    <div style="float:left">
    <h2 style="text-align:center">RM 500</h2>
    <a href=""><div class="enq_btn">Buy Now</div></a>
     <div style="clear:both"></div><br />
    </div>
    <div style="clear:both"></div>-->
<!--Membership Details:

a.       10 Courses – RM500

b.      15 Courses – RM750

c.       20 Courses – RM1,000
-->
<!--</div>
<div class="cart_wrap">
       <h2>Plus</h2>
      	<div class="cart_wrap_content">
	
	<p>Due to the constantly changing and evolving healthcare system, the nurses should be able to recognize and respond to all the advancements in professional standards and regulations. Higher levels of clinical competency, proficiency and skills are required from healthcare professionals. </p>
    </div>
    <div style="float:left">
    <h2 style="text-align:center">RM 750</h2>
    <a href=""><div class="enq_btn">Buy Now</div></a>
     <div style="clear:both"></div><br />
    </div>
    <div style="clear:both"></div>-->
<!--Membership Details:

a.       10 Courses – RM500

b.      15 Courses – RM750

c.       20 Courses – RM1,000
-->
<!--</div>



<div class="cart_wrap">
       <h2>Premier</h2>
       	<div class="cart_wrap_content">
	
	<p>Due to the constantly changing and evolving healthcare system, the nurses should be able to recognize and respond to all the advancements in professional standards and regulations. Higher levels of clinical competency, proficiency and skills are required from healthcare professionals. </p>
    </div>
    <div style="float:left">
    <h2 style="text-align:center">RM 1000</h2>
    <a href=""><div class="enq_btn">Buy Now</div></a>
     <div style="clear:both"></div><br />
    </div>
    <div style="clear:both"></div>

</div>--><?php /*?><?php */?>
<!--<div style="clear:both"></div>
</div>
       <!--<div style="padding:20px 20px 10px 20px; border:1px solid #ccc;-webkit-border-radius: 7px;
border-radius: 7px; margin-top:10px;margin-bottom:20px; ">--->

<?php } ?>
<div style="clear:both"></div>
	 <form method="post" name="frmCourse" id="frmCourse" action="<?php echo WEB_URL."add_courses_cart/"?>">
	 	 <input type="hidden" name="course_id[]" value="0" id="frmCourseCourseId"> 
	 </form>
	 <form method="post" action="<?php echo WEB_URL;?>add_courses_cart" onsubmit="validatecheck();">
     <!----------------------------------------mob version----------------------------------->
     <div class="cart-mob"> 
	   
	   <!--<h1>Online Professional Development Courses</h1>-->
      <!-- You may also choose to enrol for an individual course(s) by clicking on the preferred course(s) listed in here.-->
      <?php if($category=='professional-development'){?>   
       <div style="padding:5px;">You have selected <span id="selCourseNo" style="color:#F9070B;"><?php echo $chk_courses; ?></span> courses (Total CPD Points : <span id="Totalcpd" style="color:#F9070B;"><?php echo $cpd_point; ?></span>) </div>
      
       <?php }?>
		   <ul class="mob-courselist">
		   <?php foreach($course as $course_key =>$course_val){
		       if(!empty($_SESSION['cart']['courses'])){
		       if(in_array($course_val['Course']['id'],$_SESSION['cart']['courses']))
		       {
					$chk = "checked";
				    }
				    else
				    {
					$chk = "";	
			   }
		       ?>
		
              <li>
              <div class="col-xs-12 col-sm-12 nopadding mar-bot10 ">
		  <?php if($category=='professional-development'){?>
		  <input class="crs_lst course_ids" type="checkbox" value="<?php echo $course_val['Course']['id']; ?>" name="course_id[]" <?php echo $chk;?>  />
		  <input class="crs_lst cpds" id="cpdcount" type="hidden" name="cpd[]" value="<?php echo $course_val['Course']['cpd_point']; ?>" />
       
              <?php }?>
	      <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>"><div class="crse-name-mob"><?php echo $course_val['Course']['course_title'];?></div></a>
                  <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus' && $category=='professional-development'){?>
                   <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>" ><img src="<?php echo WEB_URL;?>img/viewmore.png" style="float:right; margin:0 10px" title="View Details" /></a>
	      </div>
               <div class="col-xs-12 col-sm-12 nopadding ">
               <a class="add_cart add_to_cart" title="Add to cart" name="<?php echo $course_val['Course']['id']; ?>" href="<?php echo WEB_URL."add_courses_cart/".$course_val['Course']['id'];?>" >Add to cart</a>
                <?php }?>
	     
	      <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus' && $category=='professional-development'){?>
	      <div class="price">MYR <?php echo number_format($course_val['Course']['course_fee']);?></div>
	      <?php } ?>
          </div>
              </li>
                
		   <?php /*}*/}else{?>
		   
		          <li><div class="col-xs-12 col-sm-12  nopadding mar-bot10 ">
		<?php if($category=='professional-development'){?>
			      <input class="crs_lst course_ids" type="checkbox" value="<?php echo $course_val['Course']['id']; ?>" name="course_id[]"  />
			      <input class="crs_lst cpds" id="cpdcount" type="hidden" name="cpd[]" value="<?php echo $course_val['Course']['cpd_point']; ?>" />
              <?php }?>
          
	      <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>"><div class="crse-name-mob"><?php echo $course_val['Course']['course_title'];?></div></a>
               <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus' && $category=='professional-development'){?>
	      <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>" ><img src="<?php echo WEB_URL;?>img/viewmore.png" style="float:right; margin:0 10px" title="View Details" /></a>
          </div>
               <div class="col-xs-12 col-sm-12 nopadding ">
               <a class="add_cart add_to_cart" title="Add to cart" name="<?php echo $course_val['Course']['id']; ?>" href="<?php echo WEB_URL."add_courses_cart/".$course_val['Course']['id'];?>" >Add to cart</a>
	      <?php }?>
              
               <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus' && $category=='professional-development'){?>
		  <div class="price">CPD Point <?php echo $course_val['Course']['cpd_point'];?></div>
	      <div class="price">RM <?php echo number_format($course_val['Course']['course_fee']);?></div>
	      <?php }?></div>
              </li>
		       <?php }}?>
		   </ul>
		   <div style="float:right;margin-bottom:10px;">
		       <?php if($cat['CourseCategory']['url']!='nursing' && $category=='professional-development'){?>
		   <input id="finalcount" type="hidden" name="finalcount" value="<?php echo $cpd_point; ?>" />
		   <input type="hidden" value="add" name="course_list" id="course_list" />
		   <input type="submit" style="color:#fff !important;" class="submit2 add_cart_btn" value="Add To Cart" id="button" name="button" >
		   <?php }?>
      	   </div>
      	  
       </div>
     <!----------------------------------------mob version----------------------------------->
     
     <div style="clear:both"></div>
       <div class="cart-tab" style="padding-top:12px;"> 
	   
	   <!--<h1>Online Professional Development Courses</h1>-->
      <!-- You may also choose to enrol for an individual course(s) by clicking on the preferred course(s) listed in here.-->
      <?php if($category=='professional-development'){?>   
       <div  style="padding:5px;">You have selected <span id="selCourseNo" style="color:#F9070B;"><?php echo $chk_courses; ?></span> courses (Total CPD Points : <span id="Totalcpd" style="color:#F9070B;"><?php echo $cpd_point; ?></span>) </div>
      
       <?php }?>
		   <ul class="courselist">
		   <?php foreach($course as $course_key =>$course_val){
		       if(!empty($_SESSION['cart']['courses'])){
		       if(in_array($course_val['Course']['id'],$_SESSION['cart']['courses']))
		       {
					$chk = "checked";
				    }
				    else
				    {
					$chk = "";	
			   }
		       ?>
		
              <li>
		  <?php if($category=='professional-development'){?>
		  <input class="crs_lst course_ids" type="checkbox" value="<?php echo $course_val['Course']['id']; ?>" name="course_id[]" <?php echo $chk;?>  />
		  <input class="crs_lst cpds" id="cpdcount" type="hidden" name="cpd[]" value="<?php echo $course_val['Course']['cpd_point']; ?>" />
              <?php }?>
	      <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>"><div class="crse-name"><?php echo $course_val['Course']['course_title'];?></div></a>
                  <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus' && $category=='professional-development'){?>
	      <a class="add_cart add_to_cart" title="Add to cart" name="<?php echo $course_val['Course']['id']; ?>" href="<?php echo WEB_URL."add_courses_cart/".$course_val['Course']['id'];?>" >Add to cart</a>
             <?php }?>
	      <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>" ><img src="<?php echo WEB_URL;?>img/viewmore.png" style="float:right; margin:0 10px" title="View Details" /></a>
	      <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus' && $category=='professional-development'){?>
	      <div class="price">MYR <?php echo number_format($course_val['Course']['course_fee']);?></div>
	      <?php } ?>
              </li>
                
		   <?php /*}*/}else{?>
		   
		          <li>
		<?php if($category=='professional-development'){?>
			      <input class="crs_lst course_ids" type="checkbox" value="<?php echo $course_val['Course']['id']; ?>" name="course_id[]"  />
			      <input class="crs_lst cpds" id="cpdcount" type="hidden" name="cpd[]" value="<?php echo $course_val['Course']['cpd_point']; ?>" />
              <?php }?>
          
	      <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>"><div class="crse-name" ><?php echo $course_val['Course']['course_title'];?></div></a>
               <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus' && $category=='professional-development'){?>
	      <a class="add_cart add_to_cart" title="Add to cart" name="<?php echo $course_val['Course']['id']; ?>" href="<?php echo WEB_URL."add_courses_cart/".$course_val['Course']['id'];?>" >Add to cart</a>
	      <?php }?>
              <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>" ><img src="<?php echo WEB_URL;?>img/viewmore.png" style="float:right; margin:0 10px" title="View Details" /></a>
               <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus' && $category=='professional-development'){?>
		  <div class="price">CPD Point <?php echo $course_val['Course']['cpd_point'];?></div>
	      <div class="price">RM <?php echo number_format($course_val['Course']['course_fee']);?></div>
	      <?php }?>
              </li>
		       <?php }}?>
		   </ul>
		   <div style="float:right;margin-bottom:10px;">
		       <?php if($cat['CourseCategory']['url']!='nursing' && $category=='professional-development'){?>
		   <input id="finalcount" type="hidden" name="finalcount" value="<?php echo $cpd_point; ?>" />
		   <input type="hidden" value="add" name="course_list" id="course_list" />
		   <input type="submit" style="color:#fff !important;" class="submit2 add_cart_btn" value="Add To Cart" id="button" name="button" >
		   <?php }?>
      	   </div>
      	  
       </div></form>
       <?php }?><div style="clear:both"></div>
    </div>
  
   <?php /*if($category=='professional-development'){?> 
    </div>
    <?php }*/?>
    <script>
    $(document).ready(function(){
	var test = 0;
    	 $('a.add_to_cart').click(function(event){
    		event.preventDefault();
	
	if($('input[name=course_id\\[\\]]:checked').length>1)
	{
	    alert("You have selected multiple courses. To add all the selected courses to cart, please click on 'Add to cart' button at the bottom.");
	    return false;
        }
			$('#frmCourseCourseId').val($(this).attr('name'));
    		$('#frmCourse').submit();
    	});
    	
    	
    });
   
   	function updateCourseCount1()
	{
		var selLen=$("input.course_ids:checked").length;
		
		$('#selCourseNo').html(selLen);
		
	}
	$("input[name=course_id\\[\\]]").click(function(){
		var selLen=$("input.course_ids:checked").length;
		var last_count = parseFloat($('#finalcount').val());
		var test = $(this).parent();
		var count = parseFloat($(this).parent().find('#cpdcount').val());
		if ($(this).prop('checked')==true){
			var last_count = last_count + count;	
		}else{
			var last_count = last_count - count;	
		}
		
		$('#finalcount').val(last_count);
		$('#Totalcpd').text(last_count);
		$('#selCourseNo').html(selLen);
	});
	$("#button").click(function(){
	   // alert($('input[name=course_id\\[\\]]:checked').length);
	   var selLen=$("input.course_ids:checked").length;
    if($('input[name=course_id\\[\\]]:checked').length<=0)
    {
        alert("Please select the courses to add to the cart.");
	return false;
	
    }
    else
    {
	<?php if(!empty($_SESSION['cart']['courses'])){?>
	    var cart_cnt = '<?php echo count($_SESSION['cart']['courses']);?>';
	<?php }else{?>
	    var cart_cnt = 0;
	    <?php }?>
	    sel_courses = parseInt(selLen) + parseInt(cart_cnt);
	    //alert(sel_courses);
	    var msg = "You have selected "+parseInt(sel_courses)+" courses."; 
	    //alert(msg);
	    var final_count = parseFloat($('#finalcount').val());
	    
	   
	 if(final_count >=17 && final_count<20)
	 {
	    var pck_cnt = 20;
	     //alert(sel_courses);
	    var cnt_diff = parseInt(pck_cnt) - parseInt(final_count);
	    var msg = "You have selected "+parseInt(final_count)+" CPD Points. If you select "+cnt_diff+" more CPD Point you will receive a package offer for these " +pck_cnt+" CPD Points. ";
	    alert(msg);
	    return true;
	}
	/*else if(sel_courses >=12 && sel_courses<15)
	{
	     alert(sel_courses);
	    var pck_cnt = 15;
	   sel_courses = parseInt(selLen + cart_cnt);
	    var cnt_diff = parseInt(pck_cnt) - parseInt(sel_courses);
	    //var msg = "You have selected "+parseInt(sel_courses)+" courses. If you select "+cnt_diff+" more course(s) you will receive a package offer for these " +pck_cnt+" courses. "
	    var msg = "You have selected "+parseInt(sel_courses)+" courses."; 
	    alert(msg);
	    return true;
	}
	else if(sel_courses >=16 && sel_courses<20)
	{
	    var pck_cnt = 20;
	    sel_courses = parseInt(selLen + cart_cnt);
	    var cnt_diff = parseInt(pck_cnt) - parseInt(sel_courses);
	    //var msg = "You have selected "+sel_courses+" courses. If you select "+cnt_diff+" more course(s) you will receive a package offer for these " +pck_cnt+" courses. "
	    var msg = "You have selected "+sel_courses+" courses."; 
	    alert(msg);
	    return false;
	}*/
    }

});
    </script>

<!-----------------------------pop up--------------------------------->

	<script src="<?php echo WEB_URL;?>js/jquery.js"></script>
		<script src="<?php echo WEB_URL;?>js/ekko-lightbox.js"></script>
		<script type="text/javascript">
			$(document).ready(function ($) {
				
				$(".add_to_cart").on( "click", function() {
					var n = $( "input:checked" ).length;
					if(n > 1){
						alert('To add multiple courses at once, please click on the "Add to cart" button on the bottom of this page.');
						return false;
					}
				});

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
