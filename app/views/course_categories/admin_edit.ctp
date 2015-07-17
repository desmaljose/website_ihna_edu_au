<?php e($javascript->link('fckeditor/fckeditor')); ?>
<?php e($javascript->link('imgEnlarge.js')) ?>
<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Edit Course Category');?></h1>
       <div align="right"> <?php echo $this->Html->link(__('List Course Categories', true), array('action' => 'index'));?></div>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
<?php echo $this->Form->create('CourseCategory',array('enctype' => 'multipart/form-data'));?>
	<fieldset>		
	<?php
	//pr($this->data);
		echo $this->Form->input('id');
		echo $this->Form->input('course_category_name',array('id'=>'Course_Category_Name'));
		echo $this->Form->input('meta_title');
		echo $this->Form->input('url');
		echo $this->Form->input('meta_keyword');
		echo $form->input('meta_desc',array('id'=>'Meta_Desc'));
		echo '<div class="input text star">'.$form->input('desc',array('div'=>false,'label'=>'Description','type'=>'textarea','id'=>'Description')).'</div>';		
		echo $fck->load('Description',$toolbar = 'Default');
		$fileStatus1 = '';
		if(!empty($this->data['CourseCategory']['image'])){
			$fileStatus1 = 'disabled';}
	    echo $this->Form->input('cat_img',array('type'=>'file','label'=>'Image','disabled'=>$fileStatus1));
		if(!empty($this->data['CourseCategory']['image'])){
			echo '<div style="width:50px" align="left">';
?>
       <a href="javascript:;" onmouseover="doTooltip(event,'<?php echo WEB_URL;?>uploads/category_image/<?php echo $this->data['CourseCategory']['image']?>','#6A0509','')" onmouseout="hideTip()"><img src="<?php echo WEB_URL?>img/view1.png" /></a>&nbsp;
       <a onclick="return confirm('Are You Sure, You want to delete this image ?');" href="<?php echo WEB_URL?>admin/course_categories/image_delete/<?php echo $this->data['CourseCategory']['id'];?>">
<img border="0" alt="" title="Delete Image" src="<?php echo WEB_URL?>img/b_drop.png"></a></div>
<?php	}
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
