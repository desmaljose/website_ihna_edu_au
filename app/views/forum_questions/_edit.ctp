<div class="forumQuestions form">
<?php echo $this->Form->create('ForumQuestion');?>
	<fieldset>
		<legend><?php __('Edit Forum Question'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('topic');
		echo $this->Form->input('detail');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('datetime');
		echo $this->Form->input('view');
		echo $this->Form->input('reply');
		echo $this->Form->input('from_admin');
		echo $this->Form->input('forum_closed');
		echo $this->Form->input('forum_category');
		echo $this->Form->input('course_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ForumQuestion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ForumQuestion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Forum Questions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Forum Categories', true), array('controller' => 'forum_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum Category', true), array('controller' => 'forum_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>