<div class="corporateRegistrations view">
<h2><?php  __('Corporate Registration');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $corporateRegistration['CorporateRegistration']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $corporateRegistration['CorporateRegistration']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $corporateRegistration['CorporateRegistration']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $corporateRegistration['CorporateRegistration']['company']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Trading Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $corporateRegistration['CorporateRegistration']['trading_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nurses'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $corporateRegistration['CorporateRegistration']['nurses']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $corporateRegistration['CorporateRegistration']['active']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $corporateRegistration['CorporateRegistration']['phone']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Corporate Registration', true), array('action' => 'edit', $corporateRegistration['CorporateRegistration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Corporate Registration', true), array('action' => 'delete', $corporateRegistration['CorporateRegistration']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $corporateRegistration['CorporateRegistration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Corporate Registrations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corporate Registration', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
