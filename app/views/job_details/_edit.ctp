<div class="jobDetails form">
<?php echo $this->Form->create('JobDetail');?>
	<fieldset>
		<legend><?php __('Edit Job Detail'); ?></legend>
	<?php
		echo $this->Form->input('jdDetailsId');
		echo $this->Form->input('jdJobCategoryId');
		echo $this->Form->input('jdJobProviderId');
		echo $this->Form->input('jpJobTitle');
		echo $this->Form->input('jpWorkType');
		echo $this->Form->input('jpJobLocation');
		echo $this->Form->input('jdSalary');
		echo $this->Form->input('jpJobDescription');
		echo $this->Form->input('jpJobAdvtName');
		echo $this->Form->input('jpJobExpiryDate');
		echo $this->Form->input('jpIsActive');
		echo $this->Form->input('jpIsFeatureJob');
		echo $this->Form->input('jpJobAddDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('JobDetail.jdDetailsId')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('JobDetail.jdDetailsId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Details', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Job Provider Details', true), array('controller' => 'job_provider_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider', true), array('controller' => 'job_provider_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Categories', true), array('controller' => 'job_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'job_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>