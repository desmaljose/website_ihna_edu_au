<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft">Module Management</h1>
          </div>
        <div class="block_content">
<?php echo $this->Form->create('Module');?>
	<fieldset>
		<legend></legend>
	<?php
		echo $form->input('parent_id', array('type'=>'select', 'label'=>'Parent', 'options'=>$mod,'empty'=>'---Parent---','id'=>'Parent Module')); 
		echo $this->Form->input('module_name',array('label'=>'Module Name','id'=>'ModuleName'));
		echo $this->Form->input('url');
		echo $this->Form->input('desc',array('label'=>'Description','id'=>'Desc'));
		echo $this->Form->input('priority');
		echo $form->input('enable',array('label'=>'Enable','type'=>'checkbox','style' => 'float:none !important;'));
		//echo $form->input('user_id', array('type'=>'select', 'label'=>'User', 'options'=>$users,'empty'=>'Select'));

		//echo $this->Form->input('User' array('type'=>'select','empty'=>'Select');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>
</div>