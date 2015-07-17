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
<?php echo $this->Form->create('CourseCategory',array('enctype' => 'multipart/form-data'));?>
	<fieldset>
	<?php
		echo $this->Form->input('course_category_name',array('id'=>'Course_Category_Name'));
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_keyword');
		echo $this->Form->input('url');
		echo $form->input('meta_desc',array('id'=>'Meta_Desc'));
		echo '<div class="input text star">'.$form->input('desc',array('div'=>false,'label'=>'Description','type'=>'textarea','id'=>'Description')).'</div>';		
		echo $fck->load('Description',$toolbar = 'Default');
		echo $this->Form->input('cat_img',array('type'=>'file','label'=>'Image'));
		echo $this->Form->input('featured',array('type'=>'checkbox'));
		echo $this->Form->input('enable',array('type'=>'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>
</div>
<script type="text/javascript">
function FCKeditor_OnComplete(editorInstance)
{                  }
</script>
