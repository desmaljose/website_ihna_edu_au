<div class="row">                 
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
      				<h1>Featured  Courses</h1>
                                
                                
                <?php

                    foreach($courses as $row ){

                ?>                                
                                
           
            <div class="course-icon col-xs-12 col-sm-6 col-md-4 col-lg-4">               
<!--                <a title="<?php echo $row['c']['course_name']; ?>" class="" href="<?php echo WEB_URL; ?>courses/details/<?php echo $row['c']['course_id']; ?>">-->
                
                <a title="<?php echo $row['c']['course_name']; ?>" class="" href="<?php echo $this->Common->courseURL($row['c']['course_id'], 0)?>">
                
                <img class="img-responsive"  border="0"  alt="" src="https://academic.ihna.edu.au/uploads/course_img_thumb/<?php echo $row['co']['thumb']; ?>"> 
                <h2><?php echo $row['c']['course_name']; ?></h2></a>
            </div>
                                
                <?php
                    }
                ?>                                

      
        </div>            
     </div>
