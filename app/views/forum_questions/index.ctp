<?php

//echo '<pre>';
//print_r($this->params[pass][0]);
//print_r($forumQuestions);

?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
<div class="row">
    	<div class="faq-search">
            
         <form class="form-horizontal" action="<?php echo WEB_URL; ?>forum_questions/index/<?php echo @$this->params[pass][0]; ?>/<?php echo @$this->params[pass][1]; ?>" method="post" enctype="multipart/form-data" name="ForumQuestion" id="search">   
             <input name="data[ForumQuestion][search]" placeholder="Search Topic" type="text" value="<?php echo @$search; ?>">
        <input name="data[ForumQuestion][submit]" type="submit" class="search-menu" value="">
         </form>
        
        </div>
 
    
    
 <?php
 
 foreach ($forumQuestions as $forumQuestion){
 
 ?>
<div class="faq-contant">
<section id="demo">
<article>
 <h1><?php echo $forumQuestion['ForumQuestion']['topic']; ?></h1>

		<span class="says"><?php echo $forumQuestion['ForumQuestion']['name']; ?> Says :</span>
<p><?php echo $forumQuestion['ForumQuestion']['detail']; ?></p>

<div class="clear"></div>
</article>
<div class="faq-bottom">
<div class="row">
<div class="col-lg-4 col-sm-12 col-md-4">
<label class="mail-icon"><?php echo $forumQuestion['ForumQuestion']['email']; ?></label>
</div>

<div class="col-lg-4 col-sm-12 col-md-4">
<label class="clock"><?php echo $forumQuestion['ForumQuestion']['datetime']; ?></label>
</div>

<div class="col-lg-4 col-sm-12 col-md-4">
<a href="<?php echo WEB_URL; ?>forum_answers/index/<?php echo $forumQuestion['ForumQuestion']['id']; ?>" class="more-a">View/Answer/Comment</a>
</div>

<div class="clear"></div>
</div>
</div>
</section>    
</div>
    
 <?php } ?>
    
    
    
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
        
        
        


</div> 
</div>