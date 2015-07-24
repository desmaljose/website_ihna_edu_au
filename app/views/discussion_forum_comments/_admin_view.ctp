<div class="discussionForumComments view">
<h2><?php  __('Discussion Forum Comment');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discussion Forum Batch Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['discussion_forum_batch_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discussion Forum'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($discussionForumComment['DiscussionForum']['question'], array('controller' => 'discussion_forums', 'action' => 'view', $discussionForumComment['DiscussionForum']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['parent_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['user_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['user_email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['created_by']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['modified_by']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified By Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['modified_by_role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ip Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumComment['DiscussionForumComment']['ip_address']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discussion Forum Comment', true), array('action' => 'edit', $discussionForumComment['DiscussionForumComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Discussion Forum Comment', true), array('action' => 'delete', $discussionForumComment['DiscussionForumComment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $discussionForumComment['DiscussionForumComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussion Forum Comments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum Comment', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussion Forums', true), array('controller' => 'discussion_forums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum', true), array('controller' => 'discussion_forums', 'action' => 'add')); ?> </li>
	</ul>
</div>
