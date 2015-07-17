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
       <h1 class="fleft">Module Management</h1>
       <div align="right"><?php //echo $this->Html->link(__('New Module', true), array('action' => 'add')); ?></div>

       </div>
        <div class="block_content">

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th><?php echo $this->Paginator->sort('module_name');?></th>
			<th><?php echo $this->Paginator->sort('Enabled', 'enable'); ?> </th>
			<!--<th class="actions"><?php __('Actions');?></th>-->
	</tr>
	<?php
	$i = 0;
if($modules)
{
	foreach ($modules as $module):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		//echo $this->paginate->limit;
	?>
	<tr<?php echo $class;?>>
    <?php   if(isset($this->params['named']['page']))
	$page = $this->params['named']['page'];
	else
	$page = 1;
	?>
		<td><?php echo (($limit*$page)-$limit+$i); ?>&nbsp;</td>
		<td><?php echo $module['Module']['module_name']; ?>&nbsp;</td>
		<td><?php echo $common->chkFlagAdmin($module['Module']['enable']); ?>&nbsp;</td>
		<!--<td class="actions">
        
			 <?php echo $html->link($html->image('panel/btn_edit.gif',array('alt'=>"Edit",'title'=>"Edit")),array('action'=>'edit', $module['Module']['id']), array('escape'=>false), null, false); ?>	
		<?php echo $html->link($html->image('panel/btn_delete.gif',array('alt'=>"Delete",'title'=>"Delete")),array('action'=>'delete', $module['Module']['id']), array('escape'=>false), sprintf(__('Are you sure you want to delete # %s?', true), $module['Module']['module_name']), false); ?>	
		</td>-->
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