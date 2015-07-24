<div class="jobApplications form">
<?php echo $this->Form->create('JobApplication');?>
	<fieldset>
		<legend><?php __('Edit Job Application'); ?></legend>
	<?php
		echo $this->Form->input('jaJobAppId');
		echo $this->Form->input('jaJobId');
		echo $this->Form->input('jaFirstName');
		echo $this->Form->input('jaLastName');
		echo $this->Form->input('jaPhoneNo');
		echo $this->Form->input('jaEmail');
		echo $this->Form->input('jaCompanyName');
		echo $this->Form->input('jaTitle');
		echo $this->Form->input('jaTimeInYears');
		echo $this->Form->input('jaTimeInMonth');
		echo $this->Form->input('jaIsNewToWork');
		echo $this->Form->input('jaCoverLetterDesc');
		echo $this->Form->input('jaCoverLetter');
		echo $this->Form->input('jaResume');
		echo $this->Form->input('jaApplyDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('JobApplication.jaJobAppId')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('JobApplication.jaJobAppId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Applications', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Job Details', true), array('controller' => 'job_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'job_details', 'action' => 'add')); ?> </li>
	</ul>
</div>