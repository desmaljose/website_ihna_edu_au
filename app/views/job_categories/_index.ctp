<div class="jobCategories index">
	<h2><?php __('Job Categories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('jcCatgId');?></th>
			<th><?php echo $this->Paginator->sort('jcCatgHeading');?></th>
			<th><?php echo $this->Paginator->sort('jcIsActiveCatg');?></th>
			<th><?php echo $this->Paginator->sort('jcAddDate');?></th>
			<th><?php echo $this->Paginator->sort('jcCatParent');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($jobCategories as $jobCategory):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $jobCategory['JobCategory']['jcCatgId']; ?>&nbsp;</td>
		<td><?php echo $jobCategory['JobCategory']['jcCatgHeading']; ?>&nbsp;</td>
		<td><?php echo $jobCategory['JobCategory']['jcIsActiveCatg']; ?>&nbsp;</td>
		<td><?php echo $jobCategory['JobCategory']['jcAddDate']; ?>&nbsp;</td>
		<td><?php echo $jobCategory['JobCategory']['jcCatParent']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $jobCategory['JobCategory']['jcCatgId'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $jobCategory['JobCategory']['jcCatgId'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $jobCategory['JobCategory']['jcCatgId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobCategory['JobCategory']['jcCatgId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Category', true), array('action' => 'add')); ?></li>
	</ul>
</div>