<div class="discussionForumCategories view">
<h2><?php  __('Discussion Forum Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumCategory['DiscussionForumCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumCategory['DiscussionForumCategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumCategory['DiscussionForumCategory']['course_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumCategory['DiscussionForumCategory']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumCategory['DiscussionForumCategory']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discussionForumCategory['DiscussionForumCategory']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discussion Forum Category', true), array('action' => 'edit', $discussionForumCategory['DiscussionForumCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Discussion Forum Category', true), array('action' => 'delete', $discussionForumCategory['DiscussionForumCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $discussionForumCategory['DiscussionForumCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussion Forum Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum Category', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
