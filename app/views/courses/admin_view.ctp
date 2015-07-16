<div class="courses view">
<h2><?php  __('Course');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($course['CourseCategory']['course_category_name'], array('controller' => 'course_categories', 'action' => 'view', $course['CourseCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['course_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['course_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Img'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['course_img']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Crm Course Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['crm_course_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['short_description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['course_duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['meta_title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Keyword'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['meta_keyword']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Meta Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['meta_description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Application Path'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['application_path']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Brochure'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['course_brochure']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sort'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['sort']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pay Anz'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['pay_anz']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pay Campus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['pay_campus']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pay Coupon'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['pay_coupon']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['created_by']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['modified_by']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Show Course Demo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['show_course_demo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Moodle Course Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['moodle_course_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Academic Course Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['academic_course_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Moodle Enrolment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['moodle_enrolment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cne Points'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['cne_points']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Crm Staff General'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['crm_staff_general']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Crm Staff Mel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['crm_staff_mel']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Crm Staff Per'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['crm_staff_per']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Crm Staff Online'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['crm_staff_online']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enable'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['enable']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Featured'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $course['Course']['featured']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course', true), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Course', true), array('action' => 'delete', $course['Course']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Course Accreditations');?></h3>
	<?php if (!empty($course['CourseAccreditation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Course Id'); ?></th>
		<th><?php __('Accreditation Name'); ?></th>
		<th><?php __('Accreditation Logo'); ?></th>
		<th><?php __('Enable'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['CourseAccreditation'] as $courseAccreditation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $courseAccreditation['id'];?></td>
			<td><?php echo $courseAccreditation['course_id'];?></td>
			<td><?php echo $courseAccreditation['accreditation_name'];?></td>
			<td><?php echo $courseAccreditation['accreditation_logo'];?></td>
			<td><?php echo $courseAccreditation['enable'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'course_accreditations', 'action' => 'view', $courseAccreditation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'course_accreditations', 'action' => 'edit', $courseAccreditation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'course_accreditations', 'action' => 'delete', $courseAccreditation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $courseAccreditation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course Accreditation', true), array('controller' => 'course_accreditations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Course Details');?></h3>
	<?php if (!empty($course['CourseDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Course Id'); ?></th>
		<th><?php __('Tabname'); ?></th>
		<th><?php __('Tab Flag'); ?></th>
		<th><?php __('Course Type Flag'); ?></th>
		<th><?php __('Microsites Content Details Enabled'); ?></th>
		<th><?php __('Microsites Content Sort Order'); ?></th>
		<th><?php __('Landing Page Content Details Enabled'); ?></th>
		<th><?php __('Landing Page Content Sort Order'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Enable'); ?></th>
		<th><?php __('Sort Order'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['CourseDetail'] as $courseDetail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $courseDetail['id'];?></td>
			<td><?php echo $courseDetail['course_id'];?></td>
			<td><?php echo $courseDetail['tabname'];?></td>
			<td><?php echo $courseDetail['tab_flag'];?></td>
			<td><?php echo $courseDetail['course_type_flag'];?></td>
			<td><?php echo $courseDetail['microsites_content_details_enabled'];?></td>
			<td><?php echo $courseDetail['microsites_content_sort_order'];?></td>
			<td><?php echo $courseDetail['landing_page_content_details_enabled'];?></td>
			<td><?php echo $courseDetail['landing_page_content_sort_order'];?></td>
			<td><?php echo $courseDetail['content'];?></td>
			<td><?php echo $courseDetail['enable'];?></td>
			<td><?php echo $courseDetail['sort_order'];?></td>
			<td><?php echo $courseDetail['created'];?></td>
			<td><?php echo $courseDetail['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'course_details', 'action' => 'view', $courseDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'course_details', 'action' => 'edit', $courseDetail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'course_details', 'action' => 'delete', $courseDetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $courseDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course Detail', true), array('controller' => 'course_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Course Fees');?></h3>
	<?php if (!empty($course['CourseFee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Course Id'); ?></th>
		<th><?php __('Campus Id'); ?></th>
		<th><?php __('Fee Type Id'); ?></th>
		<th><?php __('Fee Amount'); ?></th>
		<th><?php __('Enable'); ?></th>
		<th><?php __('Sort'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['CourseFee'] as $courseFee):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $courseFee['id'];?></td>
			<td><?php echo $courseFee['course_id'];?></td>
			<td><?php echo $courseFee['campus_id'];?></td>
			<td><?php echo $courseFee['fee_type_id'];?></td>
			<td><?php echo $courseFee['fee_amount'];?></td>
			<td><?php echo $courseFee['enable'];?></td>
			<td><?php echo $courseFee['sort'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'course_fees', 'action' => 'view', $courseFee['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'course_fees', 'action' => 'edit', $courseFee['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'course_fees', 'action' => 'delete', $courseFee['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $courseFee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course Fee', true), array('controller' => 'course_fees', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Course Start Dates');?></h3>
	<?php if (!empty($course['CourseStartDate'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Course Id'); ?></th>
		<th><?php __('Campus Id'); ?></th>
		<th><?php __('Start Date'); ?></th>
		<th><?php __('Seats Available'); ?></th>
		<th><?php __('Seats Filled'); ?></th>
		<th><?php __('Total Seats'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['CourseStartDate'] as $courseStartDate):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $courseStartDate['id'];?></td>
			<td><?php echo $courseStartDate['course_id'];?></td>
			<td><?php echo $courseStartDate['campus_id'];?></td>
			<td><?php echo $courseStartDate['start_date'];?></td>
			<td><?php echo $courseStartDate['seats_available'];?></td>
			<td><?php echo $courseStartDate['seats_filled'];?></td>
			<td><?php echo $courseStartDate['total_seats'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'course_start_dates', 'action' => 'view', $courseStartDate['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'course_start_dates', 'action' => 'edit', $courseStartDate['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'course_start_dates', 'action' => 'delete', $courseStartDate['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $courseStartDate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course Start Date', true), array('controller' => 'course_start_dates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
