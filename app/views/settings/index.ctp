<div class="settings index">
	<h2><?php __('Settings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('site_name');?></th>
			<th><?php echo $this->Paginator->sort('meta_title');?></th>
			<th><?php echo $this->Paginator->sort('meta_description');?></th>
			<th><?php echo $this->Paginator->sort('meta_keywords');?></th>
			<th><?php echo $this->Paginator->sort('system_email');?></th>
			<th><?php echo $this->Paginator->sort('google_analytics');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($settings as $setting):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $setting['Setting']['id']; ?>&nbsp;</td>
		<td><?php echo $setting['Setting']['site_name']; ?>&nbsp;</td>
		<td><?php echo $setting['Setting']['meta_title']; ?>&nbsp;</td>
		<td><?php echo $setting['Setting']['meta_description']; ?>&nbsp;</td>
		<td><?php echo $setting['Setting']['meta_keywords']; ?>&nbsp;</td>
		<td><?php echo $setting['Setting']['system_email']; ?>&nbsp;</td>
		<td><?php echo $setting['Setting']['google_analytics']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $setting['Setting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $setting['Setting']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $setting['Setting']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $setting['Setting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Setting', true), array('action' => 'add')); ?></li>
	</ul>
</div>