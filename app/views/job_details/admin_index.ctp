<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Job Details');?></h1>
    <div align="right">
        
        <?php echo $this->Html->link(__('New Job', true), array('action' => 'add')); ?> | 
    
        <?php echo $this->Html->link(__('Applications', true), array('controller'=>'JobApplications','action' => 'index')); ?> | 
        
        <?php echo $this->Html->link(__('Providers', true), array('controller'=>'JobProviderDetails','action' => 'index')); ?> | 
    
        <?php echo $this->Html->link(__('Categories', true), array('controller'=>'JobCategories','action' => 'index')); ?>  
    
    </div>
      </div>
      <!-- Content Block -->
      <div class="block_content">

<?php  echo $session->flash(); ?> 

<!--<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>-->
<table cellpadding="0" cellspacing="0">
<tr>
	<th>#</th>
	<th><?php echo $paginator->sort('Job Title','jpJobTitle');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
if(sizeof($jobDetails)==0)
{ 
?>
<tr><td colspan="9"> No records Found</td></tr>
<?php
}
$i = 0;

foreach ($jobDetails as $jobDetail):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
		<?php echo $i; ?>
		</td>
		<td>
		<?php echo $jobDetail['JobDetail']['jpJobTitle']; ?>
		</td>	
		<td class="actions">
	<!--	<?php echo $html->link($html->image('panel/btn_view.gif',array('alt'=>"View",'title'=>"View")),array('action'=>'view', $jobDetail['JobDetail']['jdDetailsId']), array('escape'=>false), null, false); ?>	-->
		<?php echo $html->link($html->image('panel/btn_edit.gif',array('alt'=>"Edit",'title'=>"Edit")),array('action'=>'edit', $jobDetail['JobDetail']['jdDetailsId']), array('escape'=>false), null, false); ?>	
		<?php echo $html->link($html->image('panel/btn_delete.gif',array('alt'=>"Delete",'title'=>"Delete")),array('action'=>'delete', $jobDetail['JobDetail']['jdDetailsId']), array('escape'=>false), sprintf(__('Are you sure you want to delete # %s?', true), $jobDetail['JobDetail']['jpJobTitle']), false); ?>		

		 </td>
	</tr>
<?php endforeach; ?>
</table>
</div>
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

</div></div>