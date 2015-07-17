<div class="corporateRegistrations form">
<?php echo $this->Form->create('CorporateRegistration');?>
	<fieldset>
		<legend><?php __('Add Corporate Registration'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('company');
		echo $this->Form->input('trading_name');
		echo $this->Form->input('nurses');
		echo $this->Form->input('active');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Corporate Registrations', true), array('action' => 'index'));?></li>
	</ul>
</div>