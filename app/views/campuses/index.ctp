<div class="campuses index">
	<h2><?php __('Campuses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('campus_type_id');?></th>
			<th><?php echo $this->Paginator->sort('campus_name');?></th>
			<th><?php echo $this->Paginator->sort('campus_code');?></th>
			<th><?php echo $this->Paginator->sort('state_id');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('time_zone');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th><?php echo $this->Paginator->sort('ip_address');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($campuses as $campus):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $campus['Campus']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($campus['CampusType']['title'], array('controller' => 'campus_types', 'action' => 'view', $campus['CampusType']['id'])); ?>
		</td>
		<td><?php echo $campus['Campus']['campus_name']; ?>&nbsp;</td>
		<td><?php echo $campus['Campus']['campus_code']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($campus['State']['name'], array('controller' => 'states', 'action' => 'view', $campus['State']['id'])); ?>
		</td>
		<td><?php echo $campus['Campus']['address']; ?>&nbsp;</td>
		<td><?php echo $campus['Campus']['time_zone']; ?>&nbsp;</td>
		<td><?php echo $campus['Campus']['status']; ?>&nbsp;</td>
		<td><?php echo $campus['Campus']['modified_by']; ?>&nbsp;</td>
		<td><?php echo $campus['Campus']['ip_address']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $campus['Campus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $campus['Campus']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $campus['Campus']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $campus['Campus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Campus', true), array('action' => 'add')); ?></li>
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