<div class="forumAnswers form">
<?php echo $this->Form->create('ForumAnswer');?>
	<fieldset>
		<legend><?php __('Add Forum Answer'); ?></legend>
	<?php
		echo $this->Form->input('question_id');
		echo $this->Form->input('a_name');
		echo $this->Form->input('a_email');
		echo $this->Form->input('a_answer');
		echo $this->Form->input('a_datetime');
		echo $this->Form->input('a_approval');
		echo $this->Form->input('from_admin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Forum Answers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Forum Questions', true), array('controller' => 'forum_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum Question', true), array('controller' => 'forum_questions', 'action' => 'add')); ?> </li>
	</ul>
</div>