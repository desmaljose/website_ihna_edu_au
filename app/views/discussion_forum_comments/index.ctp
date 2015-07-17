<script src="<?php echo WEB_URL; ?>ihna-js/jquery.js" type="text/javascript"></script>
<?php

//echo '<pre>';
//print_r($forumQuestion);

?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="row">
        
    <div class="faq-contant">
    <div class="aswer-head">
     <h1><?php echo $forumQuestion['DiscussionForum']['question']; ?></h1>
     <a href="<?php echo WEB_URL; ?>discussion_forums/index/<?php echo @$forumQuestion['DiscussionForumCategory']['course_id']; ?>/<?php echo @$forumQuestion['DiscussionForumCategory']['id']; ?>">Back</a>
    <div class="clear"></div> 
    </div>
            <span class="says"><?php echo $forumQuestion['DiscussionForum']['user_name']; ?> Says :</span>
    <p><?php echo $forumQuestion['DiscussionForum']['description']; ?></p>
    
    <div class="clear"></div>
    <div class="faq-bottom">
        <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6">
        <label class="mail-icon"><?php echo $forumQuestion['DiscussionForum']['user_email']; ?></label>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6">
        <label class="clock" style="float:right;"><?php echo $forumQuestion['DiscussionForum']['created']; ?></label>
        </div>
        <div class="clear"></div>
        </div>
    </div>
    
    <hr style="border-bootom:1px solid #DDD;">
    
    
    <?php foreach($forumAnswers as $forumAnswer){ ?>
    
        <div class="sub-faq-contant">
            <section id="demo">
            <article>
             <h1>&nbsp;</h1>
            
                    <span class="person"><?php echo  $forumAnswer['DiscussionForumComment']['user_name']; ?> Says :</span>
            <p><?php echo  $forumAnswer['DiscussionForumComment']['comment']; ?></p>
            
            </article>
            </section>
            <div class="clear"></div>
            <div class="faq-bottom">
            <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-4">
            <label class="mail-icon"><?php echo  $forumAnswer['DiscussionForumComment']['user_email']; ?></label>
            </div>
            
            <div class="col-lg-4 col-sm-12 col-md-4">
            <label class="clock"><?php echo  $forumAnswer['DiscussionForumComment']['created']; ?></label>
            </div>
            
                <!--
            <div class="col-lg-4 col-sm-12 col-md-4">
            <a href="answer-comment.html" class="more-a">View/Answer/Comment</a>
            </div>
            -->
            
            <div class="clear"></div>
            </div>
            </div>
        </div>
    <?php } ?>

    
    
    

    </div>
    
        
    
    <div class="add-answer">
    <div class="row appl-form">
    <h1>Add Answer</h1>
    
    <div style="text-align: left; letter-spacing: 3px; margin-top: 10px; color: #f00; margin-bottom: 10px;" id="resp">&nbsp;</div>
    
     <form class="form-horizontal" action="<?php echo WEB_URL; ?>discussion_forum_comments/add" method="post" enctype="multipart/form-data" name="DiscussionForumComment" id="addAnswer">
         
        <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
            <label>Name <span>*</span></label>
        </div>
        
        <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
        <input name="data[DiscussionForumComment][user_name]" class="form-control" id="user_name" required />
        </div>
    
        <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
        <label>Email <span>*</span></label>
        </div>
        
        <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
         <input name="data[DiscussionForumComment][user_email]" class="form-control" id="user_email" type="email" required />
        </div>

    
        <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
        <label>Answer <span>*</span></label>
        </div>
        
        <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
        <textarea name="data[DiscussionForumComment][comment]" class="form-control" id="comment" required></textarea>
        </div>
        
    
        <div class="col-lg-4 col-sm-4 col-md-4 appl-padding">
        &nbsp;
        </div>
        
        <div class="col-lg-8 col-sm-8 col-md-8 appl-padding">
        <input name="" class="blue-search" type="submit" style="display:inline-block; padding:0px; width:auto;" value="Submit">
        <input name="" class="blue-search" type="reset" style="display:inline-block; padding:0px; width:auto;" value="Reset">
        </div>
         
        <input type="hidden" name="data[DiscussionForumComment][discussion_forum_id]" value="<?php echo $forumQuestion['DiscussionForum']['id']; ?>" />
<!--        <input type="hidden" name="data[DiscussionForumComment][created]" value="<?php echo date('Y-m-d H:i:s');?>" />         -->
         
     </form>
    
    <script type="text/javascript">
        $(function() {


            // AJAX COMMENT SUBMISSION
            $("#addAnswer").submit(function(e)
            {
                var postData = $(this).serializeArray();
                var formURL = $(this).attr("action");
                $.ajax(
                {
                    url : formURL,
                    type: "POST",
                    data : postData,
                    success:function(data, textStatus, jqXHR) 
                    {
                        $("#resp").html(data);
                        $("#addAnswer").trigger('reset');
                        setTimeout( "$('#resp').html('');",8000 );
                    },
                    error: function(jqXHR, textStatus, errorThrown) 
                    {
                        $("#resp").html('Error occured. Please try later.');
                        $("#addAnswer").trigger('reset');
                        setTimeout( "$('#resp').html('');",8000 );
                    }
                });
                e.preventDefault(); //STOP default action
                //e.unbind(); //unbind. to stop multiple form submit.
            });
            
            
            
        }); 
        
        </script>    
    
    
    <div class="clear"></div>
    </div>
    </div>
    

 
</div>       
</div> 