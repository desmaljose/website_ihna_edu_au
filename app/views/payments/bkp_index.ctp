<div class="payments index">
	<h2><?php __('Payments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('invoice_id');?></th>
			<th><?php echo $this->Paginator->sort('payment_type_id');?></th>
			<th><?php echo $this->Paginator->sort('student_name');?></th>
			<th><?php echo $this->Paginator->sort('studentid');?></th>
			<th><?php echo $this->Paginator->sort('invoice_number');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('surcharge');?></th>
			<th><?php echo $this->Paginator->sort('total');?></th>
			<th><?php echo $this->Paginator->sort('cardtype');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('anz_trans_number');?></th>
			<th><?php echo $this->Paginator->sort('applydate');?></th>
			<th><?php echo $this->Paginator->sort('paymentdate');?></th>
			<th><?php echo $this->Paginator->sort('crmentry_confirm');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by_role');?></th>
			<th><?php echo $this->Paginator->sort('ip_address');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($payments as $payment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $payment['Payment']['id']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['user_id']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['invoice_id']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['payment_type_id']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['student_name']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['studentid']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['invoice_number']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['email']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['amount']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['surcharge']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['total']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['cardtype']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['status']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['anz_trans_number']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['applydate']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['paymentdate']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['crmentry_confirm']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['created']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['modified']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['modified_by']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['modified_by_role']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['ip_address']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $payment['Payment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $payment['Payment']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $payment['Payment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $payment['Payment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Payment', true), array('action' => 'add')); ?></li>
	</ul>
</div>