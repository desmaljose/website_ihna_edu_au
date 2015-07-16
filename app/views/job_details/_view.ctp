<div class="jobDetails view">
<h2><?php  __('Job Detail');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JdDetailsId'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jdDetailsId']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($jobDetail['category']['jcCatgHeading'], array('controller' => 'job_categories', 'action' => 'view', $jobDetail['category']['jcCatgId'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Provider'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($jobDetail['provider']['jpCompanyName'], array('controller' => 'job_provider_details', 'action' => 'view', $jobDetail['provider']['jpCompanyId'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpJobTitle'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jpJobTitle']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpWorkType'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jpWorkType']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpJobLocation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jpJobLocation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JdSalary'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jdSalary']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpJobDescription'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jpJobDescription']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpJobAdvtName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jpJobAdvtName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpJobExpiryDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jpJobExpiryDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpIsActive'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jpIsActive']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpIsFeatureJob'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jpIsFeatureJob']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpJobAddDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobDetail['JobDetail']['jpJobAddDate']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Detail', true), array('action' => 'edit', $jobDetail['JobDetail']['jdDetailsId'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Job Detail', true), array('action' => 'delete', $jobDetail['JobDetail']['jdDetailsId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobDetail['JobDetail']['jdDetailsId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Details', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Detail', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Provider Details', true), array('controller' => 'job_provider_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider', true), array('controller' => 'job_provider_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Categories', true), array('controller' => 'job_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'job_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
