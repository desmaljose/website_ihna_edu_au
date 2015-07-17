<div id="breadcrumb">
        <?php
              $html->addCrumb('Site Administration',  '/roles/roledash' , array('class' => 'breadcrumblast')) ; 
			  $html->addCrumb('Role Management',  '/roles') ;
              echo $html->getCrumbs('  > ', 'Home');
         ?>
</div>
<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft">Role Management</h1>
          </div>
        <div class="block_content">
<?php echo $this->Form->create('Role');?>
    <?php  echo $session->flash(); ?> 
	<fieldset>
		<legend></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('role_name',array('id'=>'Role_Name'));
		echo $form->input('enable',array('label'=>'Enable','type'=>'checkbox','style' => 'float:none !important;'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>
</div>
