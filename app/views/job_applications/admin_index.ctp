<div class="mainBox subBoxborder">
      <div class="block">
          
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Job Applications');?></h1>
    <div align="right">
        
        <?php echo $this->Html->link(__('Providers', true), array('controller'=>'JobProviderDetails','action' => 'index')); ?> | 
        
        <?php echo $this->Html->link(__('Categories', true), array('controller'=>'JobCategories','action' => 'index')); ?> | 
    
        <?php echo $this->Html->link(__('Jobs', true), array('controller'=>'JobDetails','action' => 'index')); ?>
    
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
	<th><?php echo $paginator->sort('First Name','jaFirstName');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
if(sizeof($jobApplications)==0)
{ 
?>
<tr><td colspan="9"> No records Found</td></tr>
<?php
}
$i = 0;

foreach ($jobApplications as $jobApplication):
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
		<?php echo $jobApplication['JobApplication']['jaFirstName']; ?>
		</td>	
		<td class="actions">
	<!--	<?php echo $html->link($html->image('panel/btn_view.gif',array('alt'=>"View",'title'=>"View")),array('action'=>'view', $jobApplication['JobApplication']['jaJobAppId']), array('escape'=>false), null, false); ?>	-->
		<?php echo $html->link($html->image('panel/btn_edit.gif',array('alt'=>"Edit",'title'=>"Edit")),array('action'=>'edit', $jobApplication['JobApplication']['jaJobAppId']), array('escape'=>false), null, false); ?>	
		<?php echo $html->link($html->image('panel/btn_delete.gif',array('alt'=>"Delete",'title'=>"Delete")),array('action'=>'delete', $jobApplication['JobApplication']['jaJobAppId']), array('escape'=>false), sprintf(__('Are you sure you want to delete # %s?', true), $jobApplication['JobApplication']['jaFirstName']), false); ?>		

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