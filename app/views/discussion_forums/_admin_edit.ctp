<div class="discussionForums form">
<?php echo $this->Form->create('DiscussionForum');?>
	<fieldset>
		<legend><?php __('Admin Edit Discussion Forum'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course_id');
		echo $this->Form->input('discussion_forum_category_id');
		echo $this->Form->input('question_flag');
		echo $this->Form->input('question');
		echo $this->Form->input('description');
		echo $this->Form->input('enable');
		echo $this->Form->input('user_name');
		echo $this->Form->input('user_email');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('modified_by_role');
		echo $this->Form->input('ip_address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('DiscussionForum.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DiscussionForum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Discussion Forums', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Discussion Forum Categories', true), array('controller' => 'discussion_forum_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum Category', true), array('controller' => 'discussion_forum_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discussion Forum Comments', true), array('controller' => 'discussion_forum_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum Comment', true), array('controller' => 'discussion_forum_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>