<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Edit Job Details');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
<?php  echo $session->flash(); ?> 
<?php echo $form->create('JobDetail');?>
    <fieldset>
	<?php
                echo $form->input('jdDetailsId');
		echo $this->Form->input('jdJobCategoryId',array('label'=>'Category','options'=>$categories));
		echo $this->Form->input('jdJobProviderId',array('label'=>'Provider','options'=>$providers));
		echo $this->Form->input('jpJobTitle',array('label'=>'Title','required'=>'required'));
		echo $this->Form->input('jpWorkType',array('label'=>'Work Type', 'options'=>array('Full Time'=>'Full Time','Part Time' => 'Part Time', 'Casual' => 'Casual', 'Fixed Contract' => 'Fixed Contract')));
		echo $this->Form->input('jpJobLocation',array('label'=>'Location'));
		echo $this->Form->input('jdSalary',array('label'=>'Salary'));
		echo $this->Form->input('jpJobDescription',array('label'=>'Description'));
		echo $this->Form->input('jpJobAdvtName',array('label'=>'Advt. name'));
		echo $this->Form->input('jpJobExpiryDate',array('label'=>'Expiry date'));
		echo $this->Form->input('jpIsActive',array('label'=>'Active / Inactive','style'=>'float: left; margin-left: 180px;'));
		echo $this->Form->input('jpIsFeatureJob',array('label'=>'Featured','style'=>'float: left; margin-left: 180px;'));
                
                echo $this->Form->input('jpJobAddDate',array('type'=>'hidden','value' => date('Y-m-d')));

	?>        

    </fieldset>
<?php echo $form->end('Submit');?> 
</div>
</div>
</div>
</div>
