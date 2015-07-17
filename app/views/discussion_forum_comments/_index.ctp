<div class="discussionForumComments index">
	<h2><?php __('Discussion Forum Comments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('discussion_forum_batch_id');?></th>
			<th><?php echo $this->Paginator->sort('discussion_forum_id');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
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
	foreach ($discussionForumComments as $discussionForumComment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['id']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['discussion_forum_batch_id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($discussionForumComment['DiscussionForum']['question'], array('controller' => 'discussion_forums', 'action' => 'view', $discussionForumComment['DiscussionForum']['id'])); ?>
		</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['comment']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['user_id']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['parent_id']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['status']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['user_name']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['user_email']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['created']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['modified']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['created_by']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['modified_by']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['modified_by_role']; ?>&nbsp;</td>
		<td><?php echo $discussionForumComment['DiscussionForumComment']['ip_address']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $discussionForumComment['DiscussionForumComment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $discussionForumComment['DiscussionForumComment']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $discussionForumComment['DiscussionForumComment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $discussionForumComment['DiscussionForumComment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Discussion Forum Comment', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Discussion Forums', true), array('controller' => 'discussion_forums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum', true), array('controller' => 'discussion_forums', 'action' => 'add')); ?> </li>
	</ul>
</div>