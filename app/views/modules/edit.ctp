<div class="modules form">
<?php echo $this->Form->create('Module');?>
	<fieldset>
		<legend></legend>
	<?php
		echo $this->Form->input('id');
		echo $form->input('parent_id', array('type'=>'select', 'label'=>'Parent', 'options'=>$mod,'empty'=>'---Parent---','id'=>'Parent Module')); 
		echo $this->Form->input('module_name',array('label'=>'Module Name','id'=>'ModuleName'));
	    echo $this->Form->input('url');
		echo $this->Form->input('desc',array('label'=>'Description','id'=>'Desc'));
		echo $this->Form->input('priority');
		echo $form->input('enable',array('label'=>'Enable','type'=>'checkbox','style' => 'float:none !important;'));
		//echo $form->input('user_id', array('type'=>'select', 'label'=>'User', 'options'=>$users,'empty'=>'Select'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
