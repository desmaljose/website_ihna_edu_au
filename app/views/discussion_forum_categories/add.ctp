<div class="discussionForumCategories form">
<?php echo $this->Form->create('DiscussionForumCategory');?>
	<fieldset>
		<legend><?php __('Add Discussion Forum Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('course_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Discussion Forum Categories', true), array('action' => 'index'));?></li>
	</ul>
</div>