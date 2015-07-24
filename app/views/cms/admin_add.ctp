<?php e($javascript->link('fckeditor/fckeditor')); ?>
<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Add Content');?></h1>
       
      </div>
      <!-- Content Block -->
      <div class="block_content">
<?php  echo $session->flash(); ?> 
<?php echo $form->create('Cm');?>
    <fieldset>
        
    <?php
   

        
        echo $form->input('page_name',array('id'=>'Page_Name'));?>
        <label>Page Type</label>
        <div>
        <select id="parent_id" name="data[parent_id]">
          <option value="0">---Main Page---</option>
          <?php if($pages){
          foreach($pages as $pkey =>$pval){
            ?>
            <option value="<?php echo $pval['Cm']['id'];?>"><?php echo $pval['Cm']['page_title'];?></option>
            <?php $check_subpage_exists = $this->requestAction(array('controller' => 'cms', 'action' => 'checkSubmenuExists'),array('pass'=>array($pval['Cm']['id'])));
            //pr($check_subpage_exists);
            if($check_subpage_exists){
              foreach($check_subpage_exists as $skey =>$sval)
              {
            ?><option value="<?php echo $sval['Cm']['id'];?>">&nbsp;&nbsp;&nbsp;<?php echo $sval['Cm']['page_title'];?></option>
            <?php }?>
            <?php
              }
             }
          }?>
                   </select></div>
       
        <?php 
        // echo $form->input('parent_id',array('type'=>'select','empty'=>'--Main Page--','options'=>$pages));
         $target_options = array('Self'=>'Self','_blank'=>'_blank');
        echo $form->input('page_target',array('type'=>'select','options'=>$target_options,'empty'=>'--Select--'));
        echo $form->input('seo_url',array('id'=>'page_url'));
        echo $form->input('meta_title',array('id'=>'meta_title'));
        echo $form->input('meta_keyword',array('id'=>'meta_keyword'));
        echo $form->input('meta_desc',array('id'=>'Meta_Desc'));
        /*echo '<div class="input text star">'.$form->input('meta_desc',array('div'=>false,'label','type'=>'textarea','id'=>'Meta_Desc')).'</div>';
        echo $fck->load('Meta_Desc',$toolbar = 'Default');*/
        echo $form->input('page_title',array('id'=>'Page_Title','type'=>'text'));
        echo '<div class="input text star">'.$form->input('page_content',array('div'=>false,'label','type'=>'textarea','id'=>'Page_Content')).'</div>';     
        echo $fck->load('Page/Content',$toolbar = 'Default');
          echo $form->input('show_in_parent_menu',array('id'=>'Show in parent menu','type'=>'checkbox','style'=>'float:none;'));
         echo $form->input('show_in_right_menu',array('id'=>'show_in_right_menu','type'=>'checkbox','style'=>'float:none;'));
         echo $form->input('sort',array('id'=>'Sort','type'=>'text','style'=>'width:50px;'));
        echo $form->input('enable',array('id'=>'Enable','type'=>'checkbox','style'=>'float:none;'));
        
/*
  echo $form->input('meta_title',array('id'=>'Meta_Title'));
        echo $form->input('meta_keywords',array('id'=>'Meta_Keywords'));
        echo $form->input('meta_desc',array('label'=>'Meta Description','id'=>'Meta_Description'));     
        */
?>
    </fieldset>
<?php echo $form->end('Submit');?> 
</div>
<script type="text/javascript">
function FCKeditor_OnComplete(editorInstance)
{   
}
</script>

</div>
</div>
</div>
  <?php echo $this->element('sql_dump'); ?>