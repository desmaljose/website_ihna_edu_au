<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Edit Settings');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
<?php  echo $session->flash(); ?> 
<?php echo $this->Form->create('Setting');?>
	<fieldset> 
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('site_name');
		echo $this->Form->input('system_email');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keywords');
		echo $this->Form->input('google_analytics');
		/*
  $options = array('TEST'=>'TEST','LIVE'=>'LIVE');
	 echo $form->input('paypal_mode',array('type'=>'select','options'=>$options,'label'=>'PayPal Mode','id'=>'PayPal_Mode'));
		echo $this->Form->input('paypal_account');*/
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>
</div>
</div>