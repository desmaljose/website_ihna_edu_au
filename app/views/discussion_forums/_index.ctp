<div class="discussionForums index">
	<h2><?php __('Discussion Forums');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('course_id');?></th>
			<th><?php echo $this->Paginator->sort('discussion_forum_category_id');?></th>
			<th><?php echo $this->Paginator->sort('question_flag');?></th>
			<th><?php echo $this->Paginator->sort('question');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('enable');?></th>
			<th><?php echo $this->Paginator->sort('user_name');?></th>
			<th><?php echo $this->Paginator->sort('user_email');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by_role');?></th>
			<th><?php echo $this->Paginator->sort('ip_address');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($discussionForums as $discussionForum):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $discussionForum['DiscussionForum']['id']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['course_id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($discussionForum['DiscussionForumCategory']['name'], array('controller' => 'discussion_forum_categories', 'action' => 'view', $discussionForum['DiscussionForumCategory']['id'])); ?>
		</td>
		<td><?php echo $discussionForum['DiscussionForum']['question_flag']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['question']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['description']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['enable']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['user_name']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['user_email']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['created']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['modified']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['created_by']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['modified_by']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['modified_by_role']; ?>&nbsp;</td>
		<td><?php echo $discussionForum['DiscussionForum']['ip_address']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $discussionForum['DiscussionForum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $discussionForum['DiscussionForum']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $discussionForum['DiscussionForum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $discussionForum['DiscussionForum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Discussion Forum', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Discussion Forum Categories', true), array('controller' => 'discussion_forum_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum Category', true), array('controller' => 'discussion_forum_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussion Forum Comments', true), array('controller' => 'discussion_forum_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum Comment', true), array('controller' => 'discussion_forum_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>