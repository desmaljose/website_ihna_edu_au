<div class="campuses view">
<h2><?php  __('Campus');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campus['Campus']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Campus Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($campus['CampusType']['title'], array('controller' => 'campus_types', 'action' => 'view', $campus['CampusType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Campus Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campus['Campus']['campus_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Campus Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campus['Campus']['campus_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($campus['State']['name'], array('controller' => 'states', 'action' => 'view', $campus['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campus['Campus']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Time Zone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campus['Campus']['time_zone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campus['Campus']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campus['Campus']['modified_by']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ip Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $campus['Campus']['ip_address']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campus', true), array('action' => 'edit', $campus['Campus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Campus', true), array('action' => 'delete', $campus['Campus']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $campus['Campus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campus Types', true), array('controller' => 'campus_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus Type', true), array('controller' => 'campus_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States', true), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State', true), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Fees', true), array('controller' => 'course_fees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Fee', true), array('controller' => 'course_fees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Start Dates', true), array('controller' => 'course_start_dates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Start Date', true), array('controller' => 'course_start_dates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Delivery Modes', true), array('controller' => 'delivery_modes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery Mode', true), array('controller' => 'delivery_modes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Course Fees');?></h3>
	<?php if (!empty($campus['CourseFee'])):?>
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
		foreach ($campus['CourseFee'] as $courseFee):
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
	<?php if (!empty($campus['CourseStartDate'])):?>
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
		foreach ($campus['CourseStartDate'] as $courseStartDate):
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
<div class="related">
	<h3><?php __('Related Delivery Modes');?></h3>
	<?php if (!empty($campus['DeliveryMode'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Enable'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Campus Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($campus['DeliveryMode'] as $deliveryMode):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $deliveryMode['id'];?></td>
			<td><?php echo $deliveryMode['name'];?></td>
			<td><?php echo $deliveryMode['description'];?></td>
			<td><?php echo $deliveryMode['enable'];?></td>
			<td><?php echo $deliveryMode['created'];?></td>
			<td><?php echo $deliveryMode['modified'];?></td>
			<td><?php echo $deliveryMode['campus_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'delivery_modes', 'action' => 'view', $deliveryMode['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'delivery_modes', 'action' => 'edit', $deliveryMode['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'delivery_modes', 'action' => 'delete', $deliveryMode['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $deliveryMode['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Delivery Mode', true), array('controller' => 'delivery_modes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
