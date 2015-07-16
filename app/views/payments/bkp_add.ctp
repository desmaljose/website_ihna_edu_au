<div class="payments form">
<?php echo $this->Form->create('Payment');?>
	<fieldset>
		<legend><?php __('Add Payment'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('invoice_id');
		echo $this->Form->input('payment_type_id');
		echo $this->Form->input('student_name');
		echo $this->Form->input('studentid');
		echo $this->Form->input('invoice_number');
		echo $this->Form->input('email');
		echo $this->Form->input('amount');
		echo $this->Form->input('surcharge');
		echo $this->Form->input('total');
		echo $this->Form->input('cardtype');
		echo $this->Form->input('status');
		echo $this->Form->input('anz_trans_number');
		echo $this->Form->input('applydate');
		echo $this->Form->input('paymentdate');
		echo $this->Form->input('crmentry_confirm');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('modified_by_role');
		echo $this->Form->input('ip_address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payments', true), array('action' => 'index'));?></li>
	</ul>
</div>