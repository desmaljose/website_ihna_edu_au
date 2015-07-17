<div class="forumQuestions index">
	<h2><?php __('Forum Questions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('topic');?></th>
			<th><?php echo $this->Paginator->sort('detail');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('datetime');?></th>
			<th><?php echo $this->Paginator->sort('view');?></th>
			<th><?php echo $this->Paginator->sort('reply');?></th>
			<th><?php echo $this->Paginator->sort('from_admin');?></th>
			<th><?php echo $this->Paginator->sort('forum_closed');?></th>
			<th><?php echo $this->Paginator->sort('forum_category');?></th>
			<th><?php echo $this->Paginator->sort('course_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($forumQuestions as $forumQuestion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $forumQuestion['ForumQuestion']['id']; ?>&nbsp;</td>
		<td><?php echo $forumQuestion['ForumQuestion']['topic']; ?>&nbsp;</td>
		<td><?php echo $forumQuestion['ForumQuestion']['detail']; ?>&nbsp;</td>
		<td><?php echo $forumQuestion['ForumQuestion']['name']; ?>&nbsp;</td>
		<td><?php echo $forumQuestion['ForumQuestion']['email']; ?>&nbsp;</td>
		<td><?php echo $forumQuestion['ForumQuestion']['datetime']; ?>&nbsp;</td>
		<td><?php echo $forumQuestion['ForumQuestion']['view']; ?>&nbsp;</td>
		<td><?php echo $forumQuestion['ForumQuestion']['reply']; ?>&nbsp;</td>
		<td><?php echo $forumQuestion['ForumQuestion']['from_admin']; ?>&nbsp;</td>
		<td><?php echo $forumQuestion['ForumQuestion']['forum_closed']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($forumQuestion['ForumCategory']['name'], array('controller' => 'forum_categories', 'action' => 'view', $forumQuestion['ForumCategory']['id'])); ?>
		</td>
		<td><?php echo $forumQuestion['ForumQuestion']['course_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $forumQuestion['ForumQuestion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $forumQuestion['ForumQuestion']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $forumQuestion['ForumQuestion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forumQuestion['ForumQuestion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Forum Question', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Forum Categories', true), array('controller' => 'forum_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum Category', true), array('controller' => 'forum_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>