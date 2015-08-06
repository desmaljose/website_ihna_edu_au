<?php

//print_r($this->params['form']);

?>
<div class="job-search-top">
        <div class="row"> 
            
<!--            <form action="<?php echo WEB_URL;?>jobDetails/available" method="post" enctype="multipart/form-data" name="frmjobsearch" id="frmjobsearch">-->
                
                <form action="<?php echo WEB_URL;?>careers" method="post" enctype="multipart/form-data" name="frmjobsearch" id="frmjobsearch">
                
        	<div class="col-lg-4 col-sm-4 col-md-4 search-col">
            <label>Keywords</label>
            <input type="text" placeholder="Enter Keyword(s)" name="keyword" value="<?php echo @$this->params['form']['keyword'] ; ?>">
            </div>
            
        	<div class="col-lg-4 col-sm-4 col-md-4 search-col">
            <label>Classification</label>
            
            
            <select name="category" id="category">
                <option value="">Select</option>
                <?php foreach($categories as $row){ ?>
                <option value="<?php echo $row['JobCategories'] ['jcCatgId'] ?>" <?php if(@$this->params['form']['category']==$row['JobCategories'] ['jcCatgId']){ echo ' selected';} ?>> <?php echo $row['JobCategories'] ['jcCatgHeading'] ?> </option>
                <?php } ?>
   			</select>
            
            
            
            
            </div>
            
        	<div class="col-lg-4 col-sm-4 col-md-4 search-col">
            <label>Location</label>
            <select name="location">
                <option value="">Select</option>
                <?php foreach($locations as $key=>$val){ ?>
                <option value="<?php echo $key; ?>" <?php if(@$this->params['form']['location']==$key){ echo ' selected';} ?>> <?php echo $val; ?> </option>
                <?php } ?>
             </select>
            </div>
            
        	<div class="col-lg-4 col-sm-4 col-md-4 search-col">
            <label>Salary</label>
            <select name="salary_from" class="sa-select">
                	<option value=""  <?php if(@$this->params['form']['salary_from']==''){ echo ' selected';} ?>> Select </option>
                	<option value="0" <?php if(@$this->params['form']['salary_from']=='0'){ echo ' selected';} ?>> $0 </option>
                	<option value="1000" <?php if(@$this->params['form']['salary_from']=='1000'){ echo ' selected';} ?>> $1000 </option>
                    <option value="10000" <?php if(@$this->params['form']['salary_from']=='10000'){ echo ' selected';} ?>> $10000 </option>
                </select>
            <span>to</span>
            <select name="salary_to" class="sa-select">
                	<option value=""> Select </option>
                	<option value="1000" <?php if(@$this->params['form']['salary_to']=='1000'){ echo ' selected';} ?>> $1000 </option>
                	<option value="10000" <?php if(@$this->params['form']['salary_to']=='10000'){ echo ' selected';} ?>> $10000 </option>
                	<option value="35000" <?php if(@$this->params['form']['salary_to']=='35000'){ echo ' selected';} ?>> $35000 </option>
                	
                </select>    
            </div>
            
        	<div class="col-lg-4 col-sm-4 col-md-4 search-col">
            <label>Sub-classification</label>
            <select name="sub_category" id="sub_category">
                <option value=""> Select </option>
            </select>
            </div>
            
        	<div class="col-lg-4 col-sm-4 col-md-4 search-col">
                    <input name="search" id="search" class="blue-search" type="submit" style="margin-top:31px; padding:10px 31px !important; width:150px !important;" value="Find Jobs">
            </div> 
            
            </form> 
            
            
        <div class="clear"></div>
        </div>
    </div>
    
    
<div class="row">
    <div style="padding-left: 15px; padding-top: 15px; color: #DA1217;"><?php echo $session->flash(); ?></div>
<h1>Job Lists</h1>
	<div class="job-lists">
    <div class="row">
        <div class="col-lg-9 col-sm-12 col-md-9">
        <h2>Arcare</h2>
        <p>We support our graduates with career opportunities from Arcare</p>
        <a href="<?php echo WEB_URL; ?>career/ARC0033_@Home_Poster.pdf" class="view-more-btn" target="_blank">View Details</a>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3 job-list-logo">
        <img src="<?php echo WEB_URL; ?>ihna-images/arcare.png" alt="arcare"/>
		</div>        
    <div class="clear"></div>
    </div>
    </div>  
    
	<div class="job-lists">
    <div class="row">
        <div class="col-lg-9 col-sm-12 col-md-9">
        <h2>Care Choice</h2>
        <p>We support our graduates with career opportunities from Care Choice</p>
        <a href="<?php echo WEB_URL; ?>career/carechoice_posting.pdf" class="view-more-btn" target="_blank">View Details</a>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3 job-list-logo">
        <img src="<?php echo WEB_URL; ?>ihna-images/carechoice.jpg" alt="arcare"/>
		</div>        
    <div class="clear"></div>
    </div>
    </div>  

            <?php 
            if(!empty($jobDetails)) {
            	foreach($jobDetails as $jobdetail) {
                    //echo '<pre>';
                    //print_r($jobdetail);
            ?>
    
	<div class="job-lists">
    <div class="row">
        <div class="col-lg-9 col-sm-12 col-md-9">
        <h2><?php echo $jobdetail['JobDetail']['jpJobTitle'];?></h2>
        <h3><?php echo $jobdetail['provider']['jpCompanyName'];?></h3>
        <p><?php echo substr($jobdetail['JobDetail']['jpJobDescription'], 0, 160); ?></p>
        <a href="<?php echo WEB_URL;?>jobDetails/description/<?php echo $jobdetail['JobDetail']['jdDetailsId'] ;?>" class="view-more-btn">View Details</a>
        <a href="<?php echo WEB_URL;?>jobApplications/apply/<?php echo $jobdetail['JobDetail']['jdDetailsId'] ;?>" class="view-more-btn">Apply Job</a>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-3 job-list-logo">
        <p><span><?php echo date('d M Y',strtotime($jobdetail['JobDetail']['jpJobExpiryDate'])); ?></span><br>
        <?php 
            if($jobdetail['JobDetail']['jdSalary'] > 0) {
                    echo "<b> Salary : </b>".$jobdetail['JobDetail']['jdSalary']."<br>";
            }
        ?>
        <b>Work Type:</b> <?php echo $jobdetail['JobDetail']['jpWorkType']; ?><br>
        <b>Location :</b> <?php if($jobdetail['JobDetail']['jpJobLocation']==1)
					echo "VIC";
					else if($jobdetail['JobDetail']['jpJobLocation']==2)
					echo "WA";
					else if($jobdetail['JobDetail']['jpJobLocation']==2)
					echo "NSW"; ?><br>
        <b>Posted Date :</b> <?php echo date('d F Y',strtotime($jobdetail['JobDetail']['jpJobAddDate'])); ?></p>
         <?php 
                    if($jobdetail['provider']['jpCompanyLogo'] != "") {
                    ?>
        <img src="<?php echo WEB_URL;?>career/logo/<?php echo $jobdetail['provider']['jpCompanyLogo'] ; ?>" alt="IHNA"/>
                        	<?php 
                    }
                	?>
		</div>        
    <div class="clear"></div>
    </div>
    </div>  
    
 <?php
            	}
             }
             else {
             ?>
             <div class="joblist">
                 <div class="row">
                    <div class="col-lg-9 col-sm-12 col-md-9">
            	<p style="color:#DA1217"><strong>No Jobs founded</strong> </p>
                <p>No results found for searched 'Keyword'.</p>
                    </div></div>
              
                
            </div>
             <?php }?>
 
    
      	
        
</div>

<script src="<?php echo WEB_URL; ?>ihna-js/jquery-2.js" type="text/javascript"></script>
<script type="text/javascript">
    
// CHANGE SUB CATEGORY SELECTBOX WHEN CATEGORY IS CHANGED  

function cat_change_action(){
    $.getJSON( "<?php echo WEB_URL; ?>jobCategories/ajax_first_level_categories/"+$( "#category" ).val(), function( data ) {
        $('#sub_category').empty();
        $('#sub_category')
            .append($("<option></option>")
            .attr("value",'')
            .text('Select'));        
        $.each(data, function(key, val) { 

            if(val.jcCatgId=='<?php echo @$this->params['form']['sub_category']; ?>'){
                $('#sub_category')
                    .append($("<option></option>")
                    .attr("value",val.jcCatgId)
                    .attr("selected",'selected')
                    .text(val.jcCatgHeading));                
            }else{
                $('#sub_category')
                    .append($("<option></option>")
                    .attr("value",val.jcCatgId)
                    .text(val.jcCatgHeading));                
            }
        }); 
    });    
}


$( "#category" ).change(function() {
    cat_change_action();
});




//  VALIDATE SUB CATEGORY ON FORM SUBMIT
$( "#search" ).click(function() {
    if($( "#category" ).val()!=''){
        if($( "#sub_category" ).val()===''){
            alert('Since you selected a category, please select a sub category.');
            return false;
        }
    }
    return true;
});



// ON PAGE LOAD, POPULATE SUB CATEGORY BASED ON CATEGORY AND HIGHLIGHT IF NECESSARY
$( document ).ready(function() {
    cat_change_action();  
});

</script>