<div class="courseCategories view">
<h2><?php  __('Course Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $courseCategory['CourseCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Category Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $courseCategory['CourseCategory']['course_category_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enable'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $courseCategory['CourseCategory']['enable']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $courseCategory['CourseCategory']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $courseCategory['CourseCategory']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Category', true), array('action' => 'edit', $courseCategory['CourseCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Course Category', true), array('action' => 'delete', $courseCategory['CourseCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $courseCategory['CourseCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Category', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Courses');?></h3>
	<?php if (!empty($courseCategory['Course'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Course Category Id'); ?></th>
		<th><?php __('Course Title'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Features'); ?></th>
		<th><?php __('Course Fee'); ?></th>
		<th><?php __('Staff Email'); ?></th>
		<th><?php __('Admin Id'); ?></th>
		<th><?php __('Enable'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($courseCategory['Course'] as $course):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $course['id'];?></td>
			<td><?php echo $course['course_category_id'];?></td>
			<td><?php echo $course['course_title'];?></td>
			<td><?php echo $course['description'];?></td>
			<td><?php echo $course['features'];?></td>
			<td><?php echo $course['course_fee'];?></td>
			<td><?php echo $course['staff_email'];?></td>
			<td><?php echo $course['admin_id'];?></td>
			<td><?php echo $course['enable'];?></td>
			<td><?php echo $course['created'];?></td>
			<td><?php echo $course['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'courses', 'action' => 'delete', $course['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
