    <div class="leftPart left">
      <h1><?php echo $page_title;?></h1>
      <?php if($course_category['CourseCategory']['image']!=""){
		  /*if($category=='professional-development'){
		  ?>
           <img src="<?php echo WEB_URL;?>img/pd_package.png" align="right" class="imgPosition" alt=""  />
           <?php }else{*/
			   ?>
      <img src="<?php echo WEB_URL;?>uploads/category_image/<?php echo $course_category['CourseCategory']['image'];?>" align="right" class="imgPosition" alt=""  />
      <?php //} ?>
       <?php } echo $page_content; ?>       
       	<p style="background:#EEEEEE; border:1px solid #B8DCEF; border-bottom:4px solid #00AEEF; border-radius: 7px; padding: 20px 20px 10px; font-weight:bold; color:#2776BB;">
			Looking to enrol courses in bulk? Good news! IHNA now offers three course packages - basic, plus and premier - each offering 10, 15 and 20 courses respectively at reduced fees. 
<!--You can also enrol courses individually by directly adding the courses of your choice to the shopping cart.  All available courses are listed below-->
You can also enrol in individual courses by directly adding the courses of your choice to the shopping cart.  All available courses are listed below. 
		</p>       
      
       <?php if($course){?>
       <?php
	   if($category=='professional-development'){
	   ?>
       <div style="padding:20px 20px 10px 20px; border:1px solid #B8DCEF; background:#E9F7FE;-webkit-border-radius: 7px;
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
       </div><br/> <br/>
       
      
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
<div style="clear:both"></div>
</div>
       <div style="padding:20px 20px 10px 20px; border:1px solid #ccc;-webkit-border-radius: 7px;
border-radius: 7px; margin-top:10px;margin-bottom:20px; ">

<?php } ?>
<div style="clear:both"></div>
	 <form method="post" name="frmCourse" id="frmCourse" action="<?php echo WEB_URL."add_courses_cart/"?>">
	 	 <input type="hidden" name="course_id[]" value="0" id="frmCourseCourseId"> 
	 </form>
	 <form method="post" action="<?php echo WEB_URL;?>add_courses_cart" onsubmit="validatecheck();">
       <div style="padding-top:12px;"><h1>Online Professional Development Courses</h1>
       You may also choose to enrol for an individual course(s) by clicking on the preferred course(s) listed in here.
       <div>You have selected <span id="selCourseNo" style="color:#F9070B;">0</span> courses </div>
		   <ul class="courselist">
		   <?php foreach($course as $course_key =>$course_val){
		       if(!empty($_SESSION['cart']['courses'])){
		       if(!in_array($course_val['Course']['id'],$_SESSION['cart']['courses']))
		       {
		       ?>
              <li><input class="crs_lst course_ids" type="checkbox" value="<?php echo $course_val['Course']['id']; ?>" name="course_id[]" onClick="updateCourseCount()" />
              <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>"><?php echo $course_val['Course']['course_title'];?></a>
                  <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus'){?>
	      <a class="add_cart add_to_cart" title="Add to cart" name="<?php echo $course_val['Course']['id']; ?>" href="<?php echo WEB_URL."add_courses_cart/".$course_val['Course']['id'];?>" >Add to cart</a>
             <?php }?>
	      <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>" ><img src="<?php echo WEB_URL;?>img/viewmore.png" style="float:right; margin:0 10px" title="View Details" /></a>
              <div class="price">MYR <?php echo number_format($course_val['Course']['course_fee']);?></div>
              </li>
                
		   <?php }}else{?>
		          <li><input class="crs_lst course_ids" type="checkbox" value="<?php echo $course_val['Course']['id']; ?>" name="course_id[]" onClick="updateCourseCount()" />
              <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>"><?php echo $course_val['Course']['course_title'];?></a>
               <?php if($course_val['Course']['url']!='iron' && $course_val['Course']['url']!='diploma-of-nursing' &&  $course_val['Course']['url']!='basic-first-aid' && $course_val['Course']['url']!='emergency-medical-response' && $course_val['Course']['url']!='pediatric-plus'){?>
	      <a class="add_cart add_to_cart" title="Add to cart" name="<?php echo $course_val['Course']['id']; ?>" href="<?php echo WEB_URL."add_courses_cart/".$course_val['Course']['id'];?>" >Add to cart</a>
	      <?php }?>
              <a href="<?php echo WEB_URL;?>courses/<?php echo $course_val['Course']['url'];?>" ><img src="<?php echo WEB_URL;?>img/viewmore.png" style="float:right; margin:0 10px" title="View Details" /></a>
              <div class="price">MYR <?php echo number_format($course_val['Course']['course_fee']);?></div>
              </li>
		       <?php }}?>
		   </ul>
		   <div style="float:right;margin-bottom:10px;">
		       <?php if($cat['CourseCategory']['url']!='nursing'){?>
		   <input type="submit" style="color:#fff !important;" class="submit2 add_cart_btn" value="Add To Cart" id="button" name="button" >
		   <?php }?>
      	   </div>
      	  </form>
       </div>
       <?php }?><div style="clear:both"></div>
    </div></div>
    <script>
    $(document).ready(function(){
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
   
   	function updateCourseCount()
	{
		var selLen=$("input.course_ids:checked").length;
		
		$('#selCourseNo').html(selLen);
		
	}
	$("#button").click(function(){
	   // alert($('input[name=course_id\\[\\]]:checked').length);
	   var selLen=$("input.course_ids:checked").length;
    if($('input[name=course_id\\[\\]]:checked').length<=0)
    {
        alert("Please select a course to proceed");
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
	   
	 if(sel_courses >=7 && sel_courses<10)
	 {
	    var pck_cnt = 10;
	   
	    var cnt_diff = parseInt(pck_cnt) - parseInt(sel_courses);
	    var msg = "You have selected "+sel_courses+" courses. If you select "+cnt_diff+" more course(s) you will receive a package offer for these " +pck_cnt+" courses. " 
	    alert(msg);
	    return true;
	}
	else if(sel_courses >=12 && sel_courses<15)
	{
	    var pck_cnt = 15;
	   sel_courses = parseInt(selLen + cart_cnt);
	    var cnt_diff = parseInt(pck_cnt) - parseInt(sel_courses);
	    var msg = "You have selected "+sel_courses+" courses. If you select "+cnt_diff+" more course(s) you will receive a package offer for these " +pck_cnt+" courses. " 
	    alert(msg);
	    return true;
	}
	else if(sel_courses >=16 && sel_courses<20)
	{
	    var pck_cnt = 20;
	    sel_courses = parseInt(selLen + cart_cnt);
	    var cnt_diff = parseInt(pck_cnt) - parseInt(sel_courses);
	    var msg = "You have selected "+sel_courses+" courses. If you select "+cnt_diff+" more course(s) you will receive a package offer for these " +pck_cnt+" courses. " 
	    alert(msg);
	    return false;
	}
    }

});
    </script>

