<div class="jobApplications index">
	<h2><?php __('Job Applications');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('jaJobAppId');?></th>
			<th><?php echo $this->Paginator->sort('jaJobId');?></th>
			<th><?php echo $this->Paginator->sort('jaFirstName');?></th>
			<th><?php echo $this->Paginator->sort('jaLastName');?></th>
			<th><?php echo $this->Paginator->sort('jaPhoneNo');?></th>
			<th><?php echo $this->Paginator->sort('jaEmail');?></th>
			<th><?php echo $this->Paginator->sort('jaCompanyName');?></th>
			<th><?php echo $this->Paginator->sort('jaTitle');?></th>
			<th><?php echo $this->Paginator->sort('jaTimeInYears');?></th>
			<th><?php echo $this->Paginator->sort('jaTimeInMonth');?></th>
			<th><?php echo $this->Paginator->sort('jaIsNewToWork');?></th>
			<th><?php echo $this->Paginator->sort('jaCoverLetterDesc');?></th>
			<th><?php echo $this->Paginator->sort('jaCoverLetter');?></th>
			<th><?php echo $this->Paginator->sort('jaResume');?></th>
			<th><?php echo $this->Paginator->sort('jaApplyDate');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($jobApplications as $jobApplication):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $jobApplication['JobApplication']['jaJobAppId']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobApplication['job']['jpJobTitle'], array('controller' => 'job_details', 'action' => 'view', $jobApplication['job']['jdDetailsId'])); ?>
		</td>
		<td><?php echo $jobApplication['JobApplication']['jaFirstName']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaLastName']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaPhoneNo']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaEmail']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaCompanyName']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaTitle']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaTimeInYears']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaTimeInMonth']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaIsNewToWork']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaCoverLetterDesc']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaCoverLetter']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaResume']; ?>&nbsp;</td>
		<td><?php echo $jobApplication['JobApplication']['jaApplyDate']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $jobApplication['JobApplication']['jaJobAppId'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $jobApplication['JobApplication']['jaJobAppId'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $jobApplication['JobApplication']['jaJobAppId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobApplication['JobApplication']['jaJobAppId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Application', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Job Details', true), array('controller' => 'job_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'job_details', 'action' => 'add')); ?> </li>
	</ul>
</div>