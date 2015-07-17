<div class="row"> 
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">                             
                                
                                    <div id="content_wrapper">
            <div class="mobicon col-sm-12 col-md-12 col-xs-12">                                

                <?php echo $form->create('Search',array('name'=>'courseSearch','url'=>'/courses/search_result'));?>
                    <div class="search-box">
                        <span id="err" style="color: #FF0000 !important; padding: 20px; width: 100px;">&nbsp;</span>
                        <div class="course-search" style="width: 100%;">
                            <input type="text" name="data[Search][search_text]" id="course" placeholder="Search course here" value="<?php echo @$search_key; ?>" />
                            <img src="<?php echo WEB_URL; ?>ihna-images/search-btn.png" style="cursor: pointer;" onclick="searchCourse();" />
                        </div>
                        <div id="log" style="width: 800px; overflow: auto;"></div>
                    </div>
                
              <?php echo $form->end(); ?>  

            </div></div>
                                </div>
</div>





<div class="row">                 
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      				<h1>Search Results</h1>
                                
                                
                <?php
                
                if(count($courses)==0){
                    ?>
                                <div class="col-lg-12 col-sm-6 col-mg-6">
                                    <p>Sorry, No courses that match your search keyword were found. Please try searching with a different keyword. Alternatively, you can find the course of your choice from our course listing at the bottom of this page.
</p>
                                </div>    
                                <?php
                }

                    foreach($courses as $row ){

                ?>                                
                                
           
                                <div class="col-lg-12 col-sm-12 col-mg-12 panel-primary panel-title no-padding" style="margin: 0 0 10px 0;">               

                
                <a title="<?php echo $row['c']['course_name']; ?>" class="" href="<?php echo $this->Common->courseURL($row['c']['course_id'], $row['co']['student_type_id'])?>">

                <?php echo $row['c']['course_name']; ?> (&nbsp;<?php if($row['co']['student_type_id']==0){ echo 'Domestic'; }elseif($row['co']['student_type_id']==1){ echo 'International'; } ?>&nbsp;) 
                </a>
                
            </div>
                                
                <?php
                    }
                ?>                                

      
        </div>            
     </div>
