<div class="mainBox subBoxborder">
      <div class="block">
      <!-- Header Block -->
      <div class="block_head">
       <h1 class="fleft"><?php __('Course Categories');?></h1>
  <div align="right"><?php echo $this->Html->link(__('New Course Category', true), array('action' => 'add')); ?></div>
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
			<th><?php echo $this->Paginator->sort('course_category_name');?></th>
			<th><?php echo $this->Paginator->sort('enable');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
				<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($courseCategories as $courseCategory):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $i; ?>&nbsp;</td>
		<td><?php echo $courseCategory['CourseCategory']['course_category_name']; ?>&nbsp;</td>
		<td><?php echo $common->chkFlagAdmin($courseCategory['CourseCategory']['enable']); ?>&nbsp;</td>
		<td><?php echo $common->dateFormat($courseCategory['CourseCategory']['created']); ?>&nbsp;</td>
			<td class="actions">
        		<?php echo $html->link($html->image('panel/btn_edit.gif',array('alt'=>"Edit",'title'=>"Edit")),array('action'=>'edit', $courseCategory['CourseCategory']['id']), array('escape'=>false), null, false); ?>	
		<?php echo $html->link($html->image('panel/btn_delete.gif',array('alt'=>"Delete",'title'=>"Delete")),array('action'=>'delete', $courseCategory['CourseCategory']['id']), array('escape'=>false), sprintf(__('Are you sure you want to delete # %s?', true), $courseCategory['CourseCategory']['course_category_name']), false); ?>		
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