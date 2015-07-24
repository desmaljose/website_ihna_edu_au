<div class="discussionForumComments form">
<?php echo $this->Form->create('DiscussionForumComment');?>
	<fieldset>
		<legend><?php __('Edit Discussion Forum Comment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('discussion_forum_batch_id');
		echo $this->Form->input('discussion_forum_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('user_id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('status');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('DiscussionForumComment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DiscussionForumComment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Discussion Forum Comments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Discussion Forums', true), array('controller' => 'discussion_forums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discussion Forum', true), array('controller' => 'discussion_forums', 'action' => 'add')); ?> </li>
	</ul>
</div>