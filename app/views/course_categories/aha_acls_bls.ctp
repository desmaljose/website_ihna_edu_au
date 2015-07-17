    			<?php echo $this->element('course_leftmenu');?>
          
          <!--left-side ends here-->
          
          <div class="course-wrap">
          				<div id="Coursecontenthd">
                  		<div class="CourseHeading"><?php echo $course_cat;?></div>
                  </div>
              <div class="cart">
              		<?php echo $this->element('course_cart', array('chkoutbtn' => 'enable', 'actioncolumn' => 'show'));?>
              </div>
							
             
							<?php
									if($courses)
									{
											$_course = "";
											$onc = $ffc =0;
											foreach ($courses as $course):
												//echo $_SERVER['REQUEST_URI'];
									
											//echo $course['Course']['course_category_id'].",".$course['Course']['id'].$course['Course']['course_title']."<br>";
											if((strstr($_SERVER['REQUEST_URI'],'professional-development') && $course['Course']['id']==15) || (strstr($_SERVER['REQUEST_URI'],'introduction-agency-nursing') && $course['Course']['id']==54)){
											}else{
												$course_brochure = $course_appln = "";
																											
												if($course['Course']['featured'] == 1){ $style="listStyle";}else{$style="listStyle1";}
												
												$apply_online = '<a href="'.WEB_URL.'applyonline/'.$course['Course']['url'].'"><div class="btns">Apply Online</div></a>';
												
												if($course['Course']['brochure']!='')
														$course_brochure = '<a href="'.WEB_URL.'uploads/course_brochures/'.$course['Course']['brochure'].'" target="_blank"><div class="btns">Brochure</div></a>';
																															
												if($course['Course']['course_category_id']==2)
														$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form.pdf" target="_blank"><div class="btns">Application Form</div></a>';
												elseif($course['Course']['course_category_id']==1)
														$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form_english.pdf" target="_blank"><div class="btns">Application Form</div></a>';
																																		
												$view_details = '<a href="'.WEB_URL.'courses/'.$course['Course']['url'].'"><div class="btns">View Details</div></a>';
												$addto_cart = '';
												if($course['Course']['pay_online'] == 1){
													$addto_cart = '<a href="javascript:void(0);" onclick="addToCart(\''.$course['Course']['id'].'\');"><div class="btns" style="margin-left:44px">Add To Cart</div></a>';
												}
												if($course['Course']['course_image']!=NULL)
														$course_image = '<img src="'.WEB_URL.'img/course_images/'.$course['Course']['course_image'].'" />';
												else
														$course_image = '<img src="'.WEB_URL.'img/noimage.png" />';
												if($course['Course']['id']==27 || $course['Course']['id']==13)
												{
												$aha_image = 					'<img src="'.WEB_URL.'images/aha.png"  style="float:right;" />'; 
												$fees = '';
												}
												else
												{
												$aha_image = '';
												$fees = floor($course['Course']['course_fee']);
												}
												
														$_course.='<div class="course-detail-box">
																 <div class="imagebox">
																		 '.$course_image.' ';
																			if($fees!="")
																		 $_course.='<div class="price">Fees: &#x20B9; '.$fees.'</div>';
																		$_course.='' .$addto_cart.'
																 </div>
																 <div class="description">
																		 <div class="course-hd">'.$course['Course']['course_title'].'</div>
																		 <div class="course-txt">'.$aha_image.' 		
																			'.$course['Course']['description'].'</div>
																		 <div class="border"></div>
																		 <div class="button-box">
																				 '.$apply_online.'
																				 '.$course_brochure.'
																				 '.$course_appln.'
																				 '.$view_details.'
																		 </div>
																 </div>
														</div>';		
											
												
								?>
																					
								<?php 
											}
								endforeach; 
																								
										if($_course == "")
												$_course .= '<div class="course-detail-box empty">No courses to display</div>';
						
								}
								else{
										$_course = '<div class="course-detail-box empty">No courses to display</div>';
								} 
								
								echo $_course;
								?>
              
          </div><!--course-wrap ends here-->
 
   							<div style="clear:both"></div>