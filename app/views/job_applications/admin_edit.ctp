<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Edit/View Job Application Details');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
<?php  echo $session->flash(); ?> 
<?php echo $form->create('JobApplication',array('type'=>'file'));?>
    <fieldset>
      
        <?php
        
        	echo $this->Form->input('jaJobAppId');
		echo $this->Form->input('jaJobId',array('label'=>'Job','options'=>$jobs));
		echo $this->Form->input('jaFirstName',array('label'=>'First Name'));
		echo $this->Form->input('jaLastName',array('label'=>'Last Name'));
		echo $this->Form->input('jaPhoneNo',array('label'=>'Phone number'));
		echo $this->Form->input('jaEmail',array('label'=>'Email'));
		echo $this->Form->input('jaCompanyName',array('label'=>'Comapny name'));
		echo $this->Form->input('jaTitle',array('label'=>'Title'));
                echo $this->Form->label('Duration in this role');
		?>
        <div style="padding: 0px;">
                <?php
                echo $this->Form->input('jaTimeInYears',array('label'=>'Year','style'=>'width: 50px; float:left; margin-left: -70px;')); ?>
                <?php
		echo $this->Form->input('jaTimeInMonth',array('label'=>'Month','style'=>'width: 50px; float:left; margin-left: -70px;'));
                ?>
                </div>
                
                <?php
                echo $this->Form->input('jaIsNewToWork',array('label'=>'New to work','style'=>'float: left; margin-left: 180px;'));
		echo $this->Form->input('jaCoverLetterDesc',array('label'=>'Cover Letter Description'));
                
                
                
		echo $this->Form->input('jaCoverLetter_file',array('label'=>'Cover Letter', 'type'=>'file'));
                if($this->Form->data['JobApplication']['jaCoverLetter']!=''){
                echo $this->Html->link('Current Cover Letter', '/career/cover_letters/'.$this->Form->data['JobApplication']['jaCoverLetter'], array('target' => '_blank','style'=>'margin-left: 185px; font-weight:lighter;'));
                }
                
		echo $this->Form->input('jaResume_file',array('label'=>'Resume', 'type'=>'file'));
                if($this->Form->data['JobApplication']['jaResume']!=''){
                echo $this->Html->link('Current Resume', '/career/resumes/'.$this->Form->data['JobApplication']['jaResume'], array('target' => '_blank','style'=>'margin-left: 185px; font-weight:lighter;'));
                }
                
                
             ?>   
                
        
        

    </fieldset>
<?php echo $form->end('Submit');?> 
</div>
</div>
</div>
</div>
