<div class="discussionForums view">
<h2><?php  __('Discussion Forum');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['course_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discussion Forum Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($discussionForum['DiscussionForumCategory']['name'], array('controller' => 'discussion_forum_categories', 'action' => 'view', $discussionForum['DiscussionForumCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question Flag'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['question_flag']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['question']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enable'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['enable']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['user_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['user_email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['created_by']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['modified_by']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified By Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['modified_by_role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ip Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForum['DiscussionForum']['ip_address']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discussion Forum', true), array('action' => 'edit', $discussionForum['DiscussionForum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Discussion Forum', true), array('action' => 'delete', $discussionForum['DiscussionForum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $discussionForum['DiscussionForum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussion Forums', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussion Forum Categories', true), array('controller' => 'discussion_forum_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum Category', true), array('controller' => 'discussion_forum_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussion Forum Comments', true), array('controller' => 'discussion_forum_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum Comment', true), array('controller' => 'discussion_forum_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Discussion Forum Comments');?></h3>
	<?php if (!empty($discussionForum['DiscussionForumComment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Discussion Forum Batch Id'); ?></th>
		<th><?php __('Discussion Forum Id'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Parent Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('User Name'); ?></th>
		<th><?php __('User Email'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Created By'); ?></th>
		<th><?php __('Modified By'); ?></th>
		<th><?php __('Modified By Role'); ?></th>
		<th><?php __('Ip Address'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($discussionForum['DiscussionForumComment'] as $discussionForumComment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $discussionForumComment['id'];?></td>
			<td><?php echo $discussionForumComment['discussion_forum_batch_id'];?></td>
			<td><?php echo $discussionForumComment['discussion_forum_id'];?></td>
			<td><?php echo $discussionForumComment['comment'];?></td>
			<td><?php echo $discussionForumComment['user_id'];?></td>
			<td><?php echo $discussionForumComment['parent_id'];?></td>
			<td><?php echo $discussionForumComment['status'];?></td>
			<td><?php echo $discussionForumComment['user_name'];?></td>
			<td><?php echo $discussionForumComment['user_email'];?></td>
			<td><?php echo $discussionForumComment['created'];?></td>
			<td><?php echo $discussionForumComment['modified'];?></td>
			<td><?php echo $discussionForumComment['created_by'];?></td>
			<td><?php echo $discussionForumComment['modified_by'];?></td>
			<td><?php echo $discussionForumComment['modified_by_role'];?></td>
			<td><?php echo $discussionForumComment['ip_address'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'discussion_forum_comments', 'action' => 'view', $discussionForumComment['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'discussion_forum_comments', 'action' => 'edit', $discussionForumComment['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'discussion_forum_comments', 'action' => 'delete', $discussionForumComment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $discussionForumComment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Discussion Forum Comment', true), array('controller' => 'discussion_forum_comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
