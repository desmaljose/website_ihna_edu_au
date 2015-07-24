    			<?php echo $this->element('course_leftmenu');?>
          
          <!--left-side ends here-->
          
          <div class="course-wrap">
          				<div id="Coursecontenthd">
                  		<div class="CourseHeading">Course Coming Soon</div>
                  </div>
              <div class="cart">
              		<?php //echo $this->element('course_cart');?>
              </div>
							
             
							<?php
					                   //pr($courses);
									if($courses)
									{
											$_course = "";
											$onc = $ffc =0;
											foreach ($courses as $course):
												
												$course_brochure = $course_appln = "";
																											
												if($course['Course']['featured'] == 1){ $style="listStyle";}else{$style="listStyle1";}
												
												$apply_online = '<a href="'.WEB_URL.'applyonline/'.$course['Course']['url'].'"><div class="btns">apply online</div></a>';
												
												if($course['Course']['brochure']!='')
														$course_brochure = '<a href="'.WEB_URL.'uploads/course_brochures/'.$course['Course']['brochure'].'" target="_blank"><div class="btns">brochure</div></a>';
																															
												if($course['Course']['course_category_id']==2)
														$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form.pdf" target="_blank"><div class="btns">application form</div></a>';
												elseif($course['Course']['course_category_id']==1)
														$course_appln = '<a href="'.WEB_URL.'uploads/mwt_application_form_english.pdf" target="_blank"><div class="btns">application form</div></a>';
																																		
												$view_details = '<a href="'.WEB_URL.'courses/'.$course['Course']['url'].'"><div class="btns">view details</div></a>';
												
												$addto_cart = '<a href="javascript:void(0);" onclick="addToCart(\''.$course['Course']['id'].'\');"><div class="btns" style="margin-left:44px">add to cart</div></a>';
												if($course['Course']['course_image']!=NULL)
														$course_image = '<img src="'.WEB_URL.'img/course_images/'.$course['Course']['course_image'].'" />';
												else
														$course_image = '<img src="'.WEB_URL.'img/noimage.png" />';
																
														$_course.='
														<div class="course-detail-box">
																 <div class="imagebox">
																		 '.$course_image.'
																 </div>
																 <div class="description">
																		 <div class="course-hd">'.$course['Course']['course_title'].'</div>
																		 <div class="course-txt">'.$course['Course']['description'].'</div>
																 </div>
														</div>';		
											
												
								?>
																					
								<?php endforeach; 
																								
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