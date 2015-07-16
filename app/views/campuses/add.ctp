<div class="campuses form">
<?php echo $this->Form->create('Campus');?>
	<fieldset>
		<legend><?php __('Add Campus'); ?></legend>
	<?php
		echo $this->Form->input('campus_type_id');
		echo $this->Form->input('campus_name');
		echo $this->Form->input('campus_code');
		echo $this->Form->input('state_id');
		echo $this->Form->input('address');
		echo $this->Form->input('time_zone');
		echo $this->Form->input('status');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('ip_address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Campuses', true), array('action' => 'index'));?></li>
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