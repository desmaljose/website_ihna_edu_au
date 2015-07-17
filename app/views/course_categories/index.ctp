<div class="courseCategories index">
	<h2><?php __('Course Categories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('course_category_name');?></th>
			<th><?php echo $this->Paginator->sort('enable');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
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
		<td><?php echo $courseCategory['CourseCategory']['id']; ?>&nbsp;</td>
		<td><?php echo $courseCategory['CourseCategory']['course_category_name']; ?>&nbsp;</td>
		<td><?php echo $courseCategory['CourseCategory']['enable']; ?>&nbsp;</td>
		<td><?php echo $courseCategory['CourseCategory']['created']; ?>&nbsp;</td>
		<td><?php echo $courseCategory['CourseCategory']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $courseCategory['CourseCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $courseCategory['CourseCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $courseCategory['CourseCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $courseCategory['CourseCategory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Course Category', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>