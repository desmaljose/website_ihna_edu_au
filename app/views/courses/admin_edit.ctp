<div class="courses form">
<?php echo $this->Form->create('Course');?>
	<fieldset>
		<legend><?php __('Admin Edit Course'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course_category_id');
		echo $this->Form->input('course_name');
		echo $this->Form->input('course_code');
		echo $this->Form->input('url');
		echo $this->Form->input('course_img');
		echo $this->Form->input('crm_course_id');
		echo $this->Form->input('short_description');
		echo $this->Form->input('course_duration');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_keyword');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('application_path');
		echo $this->Form->input('course_brochure');
		echo $this->Form->input('sort');
		echo $this->Form->input('pay_anz');
		echo $this->Form->input('pay_campus');
		echo $this->Form->input('pay_coupon');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('show_course_demo');
		echo $this->Form->input('moodle_course_id');
		echo $this->Form->input('academic_course_id');
		echo $this->Form->input('moodle_enrolment');
		echo $this->Form->input('cne_points');
		echo $this->Form->input('crm_staff_general');
		echo $this->Form->input('crm_staff_mel');
		echo $this->Form->input('crm_staff_per');
		echo $this->Form->input('crm_staff_online');
		echo $this->Form->input('enable');
		echo $this->Form->input('featured');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Course.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Course.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Course Categories', true), array('controller' => 'course_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Category', true), array('controller' => 'course_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Accreditations', true), array('controller' => 'course_accreditations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Accreditation', true), array('controller' => 'course_accreditations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Details', true), array('controller' => 'course_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Detail', true), array('controller' => 'course_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Fees', true), array('controller' => 'course_fees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Fee', true), array('controller' => 'course_fees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Start Dates', true), array('controller' => 'course_start_dates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Start Date', true), array('controller' => 'course_start_dates', 'action' => 'add')); ?> </li>
	</ul>
</div>