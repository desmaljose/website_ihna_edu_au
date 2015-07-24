<div class="forumCategories form">
<?php echo $this->Form->create('ForumCategory');?>
	<fieldset>
		<legend><?php __('Edit Forum Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ForumCategory.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ForumCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Forum Categories', true), array('action' => 'index'));?></li>
	</ul>
</div>