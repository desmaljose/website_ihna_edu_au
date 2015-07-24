<div id="breadcrumb">
        <?php
              $html->addCrumb('Site Administration',  '/roles/roledash' , array('class' => 'breadcrumblast')) ; 
              echo $html->getCrumbs('  > ', 'Home');
         ?>
</div>
<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Roles');?></h1>
         <div align="right"><?php echo $this->Html->link(__('New Role', true), array('action' => 'add'), array('title' => "Add New Role")); ?></div>

       </div>
        <div class="block_content">

<?php  echo $session->flash(); ?> 

<!--<p>
<?php
echo $paginator->counter(array(
'format' => __('', true)
));
?></p>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th><?php echo $this->Paginator->sort('role_name');?></th>
			<th><?php echo $this->Paginator->sort('Enabled', 'enable'); ?> </th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
if($roles)
{
	foreach ($roles as $role):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo (($limit*$page)-$limit+$i); ?>>
		<td><?php echo $role['Role']['id']; ?>&nbsp;</td>
		<td><?php echo $role['Role']['role_name']; ?>&nbsp;</td>
		<td><?php echo $common->chkFlagAdmin($role['Role']['enable']); ?>&nbsp;</td>
		<td class="actions">
		 <?php if($role['Role']['id'] != 1) { ?>        
          <?php echo $html->link($html->image('panel/user_rights.jpg',array('alt'=>"Rights",'title'=>"Rights")),array('action'=>'user_rights', $role['Role']['id']), array('escape'=>false), null, false); ?>	
        <?php } ?>	
		  <?php echo $html->link($html->image('panel/btn_edit.gif',array('alt'=>"Edit",'title'=>"Edit")),array('action'=>'edit', $role['Role']['id']), array('escape'=>false), null, false); ?>	
		<?php //echo $html->link($html->image('panel/btn_delete.gif',array('alt'=>"Delete",'title'=>"Delete")),array('action'=>'delete', $role['Role']['id']), array('escape'=>false), sprintf(__('Are you sure you want to delete # %s?', true), $role['Role']['role_name']), false); ?>	
		</td>
	</tr>
<?php endforeach; ?>
<?php }else { ?>
<tr>
<td colspan="6" style="color:#903;font-weight:bold;" align="center">No Record Found</td>
</tr>
<?php } ?>
	</table>
	<!--<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('', true)
	));
	?>	</p>-->

		<?php
 $pages = end ( explode ( " ", $paginator->counter () ) ); 
 if($pages>1){
?>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<?php } ?>

</div></div></div>