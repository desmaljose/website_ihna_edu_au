<div class="jobProviderDetails index">
	<h2><?php __('Job Provider Details');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('jpCompanyId');?></th>
			<th><?php echo $this->Paginator->sort('jpCompanyName');?></th>
			<th><?php echo $this->Paginator->sort('jpABNNumber');?></th>
			<th><?php echo $this->Paginator->sort('jpCompanyLoc');?></th>
			<th><?php echo $this->Paginator->sort('jpCompanyAddress');?></th>
			<th><?php echo $this->Paginator->sort('jpCompanyEmail');?></th>
			<th><?php echo $this->Paginator->sort('jpCompanyPhone');?></th>
			<th><?php echo $this->Paginator->sort('jpContactPerson');?></th>
			<th><?php echo $this->Paginator->sort('jpCompanyLogo');?></th>
			<th><?php echo $this->Paginator->sort('jpIsActive');?></th>
			<th><?php echo $this->Paginator->sort('jpAddDate');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($jobProviderDetails as $jobProviderDetail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyId']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyName']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpABNNumber']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyLoc']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyAddress']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyEmail']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyPhone']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpContactPerson']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpCompanyLogo']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpIsActive']; ?>&nbsp;</td>
		<td><?php echo $jobProviderDetail['JobProviderDetail']['jpAddDate']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $jobProviderDetail['JobProviderDetail']['jpCompanyId'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $jobProviderDetail['JobProviderDetail']['jpCompanyId'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $jobProviderDetail['JobProviderDetail']['jpCompanyId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobProviderDetail['JobProviderDetail']['jpCompanyId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Provider Detail', true), array('action' => 'add')); ?></li>
	</ul>
</div>