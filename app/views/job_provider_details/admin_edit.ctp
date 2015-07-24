<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Edit Job Provider Details');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
<?php  echo $session->flash(); ?> 
<?php echo $form->create('JobProviderDetail',array('type'=>'file'));?>
    <fieldset>
	<?php

        
                echo $form->input('jpCompanyId');
		echo $this->Form->input('jpCompanyName',array('label'=>'Comapny name'));
		echo $this->Form->input('jpABNNumber',array('label'=>'ABN Number'));
		echo $this->Form->input('jpCompanyLoc',array('label'=>'Comapny Location'));
		echo $this->Form->input('jpCompanyAddress',array('label'=>'Company Address'));
		echo $this->Form->input('jpCompanyEmail',array('label'=>'Company Email'));
		echo $this->Form->input('jpCompanyPhone',array('label'=>'Company Phone'));
		echo $this->Form->input('jpContactPerson',array('label'=>'Contact Person'));
		echo $this->Form->input('jpCompanyLogo_file',array('label'=>'Company Logo', 'type'=>'file'));
                
                //echo $this->Html->link('Current image', '/pages/home', array('target' => '_blank','style'=>'margin-left: 185px; font-weight:lighter;'));
                
                if($this->Form->data['JobProviderDetail']['jpCompanyLogo']!=''){
                echo $this->Html->image('/career/logo/'.$this->Form->data['JobProviderDetail']['jpCompanyLogo'], array('alt' => 'Logo','style'=>'margin-left: 185px; width: 100px;'));
                }
                
                echo '<br><br>';
                
		echo $this->Form->input('jpIsActive',array('label'=>'Active / Inactive','type'=>'checkbox','style'=>'float: left; margin-left: 180px;'));
                
                echo $this->Form->input('jpAddDate',array('type'=>'hidden','value' => date('Y-m-d')));

	?>        

    </fieldset>
<?php echo $form->end('Submit');?> 
</div>
</div>
</div>
</div>
