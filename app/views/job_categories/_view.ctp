<div class="jobCategories view">
<h2><?php  __('Job Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JcCatgId'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobCategory['JobCategory']['jcCatgId']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JcCatgHeading'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobCategory['JobCategory']['jcCatgHeading']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JcIsActiveCatg'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobCategory['JobCategory']['jcIsActiveCatg']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JcAddDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobCategory['JobCategory']['jcAddDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('JcCatParent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobCategory['JobCategory']['jcCatParent']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Category', true), array('action' => 'edit', $jobCategory['JobCategory']['jcCatgId'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Job Category', true), array('action' => 'delete', $jobCategory['JobCategory']['jcCatgId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobCategory['JobCategory']['jcCatgId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Category', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
