<?php e($javascript->link('fckeditor/fckeditor')); ?>
<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Add Course Category');?></h1>
       <div align="right"> <?php echo $this->Html->link(__('List Course Categories', true), array('action' => 'index'));?></div>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
      	<?php  echo $session->flash(); ?> 
<?php echo $this->Form->create('Course',array('enctype' => 'multipart/form-data'));?>
	<fieldset>
		
	<?php
		echo $this->Form->input('course_category_id',array('type'=>'select','empty'=>'--select--'));
		echo $this->Form->input('course_name');
		echo $this->Form->input('course_code');
		echo $this->Form->input('url');
		echo $this->Form->input('course_img',array('type'=>'file'));
		echo $this->Form->input('crm_course_id',array('type'=>'text','label'=>'CRM Course ID'));
		echo $this->Form->input('short_description');
		echo $this->Form->input('course_duration');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_keyword');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('application_path',array('type'=>'file'));
		echo $this->Form->input('course_brochure');
		echo $this->Form->input('sort');
		echo $this->Form->input('pay_anz',array('type'=>'checkbox',"style" => "float:none !important;"));
		echo $this->Form->input('pay_campus',array('type'=>'checkbox',"style" => "float:none !important;"));
		echo $this->Form->input('pay_coupon',array('type'=>'checkbox',"style" => "float:none !important;"));
		//echo $this->Form->input('created_by');
		//echo $this->Form->input('modified_by');
		echo $this->Form->input('show_course_demo',array('type'=>'checkbox',"style" => "float:none !important;"));
		echo $this->Form->input('moodle_course_id',array('type'=>'text','label'=>'Moodle Course'));
		echo $this->Form->input('academic_course_id',array('type'=>'text','label'=>'Academic Course'));
		echo $this->Form->input('moodle_enrolment');
		echo $this->Form->input('cne_points');
		echo $this->Form->input('crm_staff_general');
		echo $this->Form->input('crm_staff_mel');
		echo $this->Form->input('crm_staff_per');
		echo $this->Form->input('crm_staff_online');
		echo $this->Form->input('featured',array('type'=>'checkbox',"style" => "float:none !important;"));
		echo $this->Form->input('enable',array('type'=>'checkbox',"style" => "float:none !important;"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>
</div>
</div>
<script type="text/javascript">
function FCKeditor_OnComplete(editorInstance)
{                  }
</script>