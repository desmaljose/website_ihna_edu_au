<div class="corporateRegistrations index">
	<h2><?php __('Corporate Registrations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('company');?></th>
			<th><?php echo $this->Paginator->sort('trading_name');?></th>
			<th><?php echo $this->Paginator->sort('nurses');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($corporateRegistrations as $corporateRegistration):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $corporateRegistration['CorporateRegistration']['id']; ?>&nbsp;</td>
		<td><?php echo $corporateRegistration['CorporateRegistration']['name']; ?>&nbsp;</td>
		<td><?php echo $corporateRegistration['CorporateRegistration']['email']; ?>&nbsp;</td>
		<td><?php echo $corporateRegistration['CorporateRegistration']['company']; ?>&nbsp;</td>
		<td><?php echo $corporateRegistration['CorporateRegistration']['trading_name']; ?>&nbsp;</td>
		<td><?php echo $corporateRegistration['CorporateRegistration']['nurses']; ?>&nbsp;</td>
		<td><?php echo $corporateRegistration['CorporateRegistration']['active']; ?>&nbsp;</td>
		<td><?php echo $corporateRegistration['CorporateRegistration']['phone']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $corporateRegistration['CorporateRegistration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $corporateRegistration['CorporateRegistration']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $corporateRegistration['CorporateRegistration']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $corporateRegistration['CorporateRegistration']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Corporate Registration', true), array('action' => 'add')); ?></li>
	</ul>
</div>