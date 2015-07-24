<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Edit Job Category');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
<?php  echo $session->flash(); ?> 
<?php echo $form->create('JobCategory');?>
    <fieldset>
	<?php
                echo $form->input('jcCatgId');
		echo $this->Form->input('jcCatParent',array('label'=>'Category','options'=>$categories));
		
		echo $this->Form->input('jcCatgHeading',array('label'=>'Title','required'=>'required'));
		
		echo $this->Form->input('jcIsActiveCatg',array('label'=>'Active / Inactive','style'=>'float: left; margin-left: 180px;'));
                
                echo $this->Form->input('jcAddDate',array('type'=>'hidden','value' => date('Y-m-d')));

	?>        

    </fieldset>
<?php echo $form->end('Submit');?> 
</div>
</div>
</div>
</div>
