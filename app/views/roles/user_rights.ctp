<style>
input[type=checkbox] {
	float:right;
	margin:0px !important;
	padding:0 !important;
}
</style>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function checkAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = true ;
}

function uncheckAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = false ;
}
//  End -->
</script>
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
      <div class="block_head" style="background:none;">
       <h1 class="fleft">Role Rights</h1>
       <div align="right"> <?php echo $this->Html->link(__('List Role', true), array('action' => '/index'));?></div>
       </div>
       <div style="float:left;width:100%;height:25px; font-size:16px; margin-top:10px; "><?php  echo $session->flash(); ?></div>
<form action="" method="post" enctype="multipart/form-data"  name="add"> 
	<table width="100%"  >
    <tr>
    <td style="float:right;">
      <input type="button" name="CheckAll" value="Check All" onClick="checkAll(document.add.list)">
      <input type="button" name="UnCheckAll" value="Uncheck All" onClick="uncheckAll(document.add.list)">
    </td>
    </tr>
<?php 
if($modules)
{
foreach($modules as $mkey =>$mval){
?>
	<tr > 	
	<td height="20" style="font-family:Arial;font-size:12px;font-weight:bold;padding: 0px 0 0px 0px !important;" >
    
	&nbsp;&nbsp;<?php echo $mval['Module']['module_name'];?></td>

	</tr>	
	<tr>
	<td style="background:none !important;" >
	
	   <table cellpadding="0" cellspacing="0" style="background:none;border:0px !important; ">
	   <tr>
           	<input type="hidden" name="mid[]" value="<?php echo $mval['Module']['id'];?>">
<?php $mod_rights  =  $this->requestAction(array('controller' => 'users', 'action' => 'getRights'),array('pass'=>array($mval['Module']['id'],$role_id)));?>
	   <td width="15%" height="20" valign="baseline" style="padding-bottom:10px;border-bottom:0px;background:none!important;"><span style="font-family:Arial;font-size:12px;padding-bottom:10px;background:none!important;border-bottom:0px;">Add</span>
       <input type="checkbox" name="add_<?php echo $mval['Module']['id']?>" <?php if(isset($mod_rights) && $mod_rights['UserModule']['add']==1){?>checked="checked"<?php }?> style="float:none !important;" id="list" >
       </td><td width="15%" align="left" valign="baseline" style="font-family:Arial;font-size:12px;padding-bottom:10px;background:none!important;border-bottom:0px;" 
	   ><span style="padding-bottom:10px;background:none!important;border-bottom:0px;">Edit</span> 
       <input type="checkbox" name="edit_<?php echo $mval['Module']['id']?>"   <?php if(isset($mod_rights) && $mod_rights['UserModule']['edit']==1){?>checked="checked"<?php }?>  style="float:none !important;" id="list" >
       </td><td width="20%" valign="baseline"    style="padding-bottom:10px;background:none!important;border-bottom:0px;"  >Delete         
       <input type="checkbox" name="delete_<?php echo $mval['Module']['id']?>"  <?php if(isset($mod_rights) && $mod_rights['UserModule']['delete']==1){?>checked="checked"<?php }?>    style="float:none !important;" id="list" >
       </td>
       <td width="15%" valign="baseline" style="padding-bottom:10px;background:none!important;border-bottom:0px;"  >View         
       <input type="checkbox" name="view_<?php echo $mval['Module']['id']?>"  <?php if(isset($mod_rights) && $mod_rights['UserModule']['view']==1){?>checked="checked"<?php }?>  style="float:none !important;" id="list" >
       </td><td style="padding-bottom:10px;background:none!important;border-bottom:0px;" >&nbsp;</td>
	   </tr></table>
	   
	   
	</td>
	</tr>
<?php }
}
?>
  
<tr>
<td  style="padding-left:350px;"><input type="submit" name="Submit" value="Submit"></td>
</tr>
	  </table>	
     </form>
     </div>
     </div>