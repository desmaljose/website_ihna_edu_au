<div class="courseCategories form">
<?php echo $this->Form->create('CourseCategory');?>
	<fieldset>
		<legend><?php __('Add Course Category'); ?></legend>
	<?php
		echo $this->Form->input('course_category_name');
		echo $this->Form->input('enable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Course Categories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>