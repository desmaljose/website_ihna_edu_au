<script src="<?php echo WEB_URL; ?>ihna-js/jquery.js" type="text/javascript"></script>     

<?php if(count($links)==0 and count($links1)==0){ ?>
<p>
    
    No courses found under this category.
    
</p>
<?php } ?>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">        		
        
                        <div class="panel-group" id="accordion">
                            
                            
                            <?php
                                $cnt = 0;
                            foreach($links as $key => $val){
                                
                            ?>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse"  data-parent="#accordion" href="#collapse<?php echo $cnt;  ?>">
                                            <?php //echo $key; ?>
                                            Courses For Domestic Students
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $cnt;  ?>" class="">
                                    <div class="panel-body">
                                         <?php foreach($val as $row){ ?>
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                
                                            <a href="<?php echo $this->Common->courseURL($row['course_id'], $type_id)?>" title="<?php echo $row['course_name']; ?>">
                                                
                                            
                                            <div class="list-course col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php echo $row['course_name']; ?></div></a>
                                        </div>

                                         <?php } ?>
                                      
                                       
                                    </div>
                                </div>
                            </div>
                                
                            <?php 
                            
                                    $cnt++; 
                                
                                } 
                                         
                            ?>

                        </div>
                     </div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">        		
        
                        <div class="panel-group" id="accordion1">
                            
                            
                            <?php
                                $cnt = 0;
                            foreach($links1 as $key => $val){
                                
                            ?>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse"  data-parent="#accordion1" href="#collapse<?php echo 'lnk'.$cnt;  ?>">
                                            <?php //echo $key; ?>
                                            Courses For International Students
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo 'lnk'.$cnt;  ?>" class="">
                                    <div class="panel-body">
                                         <?php foreach($val as $row){ ?>
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                
                                            <a href="<?php echo $this->Common->courseURL($row['course_id'], $type_id1)?>" title="<?php echo $row['course_name']; ?>">
                                                
                                            
                                            <div class="list-course col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php echo $row['course_name']; ?></div></a>
                                        </div>

                                         <?php } ?>
                                      
                                       
                                    </div>
                                </div>
                            </div>
                                
                            <?php 
                            
                                    $cnt++; 
                                
                                } 
                                         
                            ?>

                        </div>
                     </div>