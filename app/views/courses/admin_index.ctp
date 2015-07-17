<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Course Management');?></h1>
  <div align="right"><?php echo $this->Html->link(__('New Course', true), array('action' => 'add')); ?></div>
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
			<th><?php echo $this->Paginator->sort('course_category_id');?></th>
			<th><?php echo $this->Paginator->sort('course_title');?></th>
			<th><?php echo $this->Paginator->sort('enable');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($courses as $course):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $i; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($course['CourseCategory']['course_category_name'], array('controller' => 'course_categories', 'action' => 'view', $course['CourseCategory']['id'])); ?>
		</td>
		<td><?php echo $course['Course']['course_name']; ?>&nbsp;</td>
		<td align="center"><?php echo $common->chkFlagAdmin($course['Course']['enable']); ?>&nbsp;</td>
		
		<td class="actions">
        <?php echo $html->link($html->image('panel/calendar.png',array('alt'=>"Course details",'title'=>"Course details")),array('action'=>'../course_details/add', $course['Course']['id']), array('escape'=>false), null, false); ?>
        <?php echo $html->link($html->image('panel/calendar.png',array('alt'=>"Course dates",'title'=>"Course dates")),array('action'=>'../course_start_dates/add', $course['Course']['id']), array('escape'=>false), null, false); ?>
                	<?php echo $html->link($html->image('panel/btn_view.gif',array('alt'=>"Preview",'title'=>"Preview")),array('action'=>'view', $course['Course']['id']), array('escape'=>false), null, false); ?>	
        	<?php echo $html->link($html->image('panel/btn_edit.gif',array('alt'=>"Edit",'title'=>"Edit")),array('action'=>'edit', $course['Course']['id']), array('escape'=>false), null, false); ?>	
		<?php echo $html->link($html->image('panel/btn_delete.gif',array('alt'=>"Delete",'title'=>"Delete")),array('action'=>'delete', $course['Course']['id']), array('escape'=>false), sprintf(__('Are you sure you want to delete # %s?', true), $course['Course']['course_title']), false); ?>	        
			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
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