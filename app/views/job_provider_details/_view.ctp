<div class="jobProviderDetails view">
<h2><?php  __('Job Provider Detail');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpCompanyId'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyId']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpCompanyName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpABNNumber'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpABNNumber']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpCompanyLoc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyLoc']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpCompanyAddress'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyAddress']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpCompanyEmail'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyEmail']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpCompanyPhone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyPhone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpContactPerson'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpContactPerson']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpCompanyLogo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyLogo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpIsActive'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpIsActive']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JpAddDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobProviderDetail['JobProviderDetail']['jpAddDate']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Provider Detail', true), array('action' => 'edit', $jobProviderDetail['JobProviderDetail']['jpCompanyId'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Job Provider Detail', true), array('action' => 'delete', $jobProviderDetail['JobProviderDetail']['jpCompanyId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobProviderDetail['JobProviderDetail']['jpCompanyId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Provider Details', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Provider Detail', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
