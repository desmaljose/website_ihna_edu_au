<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
      
        <h1><?php echo $jobDetail['JobDetail']['jpJobTitle']; ?></h1>
<?php echo $jobDetail['JobDetail']['jpJobDescription']; ?><br>
        
        <a href="<?php echo WEB_URL;?>jobApplications/apply/<?php echo $jobDetail['JobDetail']['jdDetailsId'] ;?>" class="view-more-btn">Apply for this Job</a>
    </div>  
</div>    