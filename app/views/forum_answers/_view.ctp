<div class="forumAnswers view">
<h2><?php  __('Forum Answer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Forum Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($forumAnswer['ForumQuestion']['name'], array('controller' => 'forum_questions', 'action' => 'view', $forumAnswer['ForumQuestion']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('A Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumAnswer['ForumAnswer']['a_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('A Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumAnswer['ForumAnswer']['a_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('A Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumAnswer['ForumAnswer']['a_email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('A Answer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumAnswer['ForumAnswer']['a_answer']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('A Datetime'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumAnswer['ForumAnswer']['a_datetime']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('A Approval'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumAnswer['ForumAnswer']['a_approval']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('From Admin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumAnswer['ForumAnswer']['from_admin']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Forum Answer', true), array('action' => 'edit', $forumAnswer['ForumAnswer']['a_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Forum Answer', true), array('action' => 'delete', $forumAnswer['ForumAnswer']['a_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forumAnswer['ForumAnswer']['a_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forum Answers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum Answer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forum Questions', true), array('controller' => 'forum_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum Question', true), array('controller' => 'forum_questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
