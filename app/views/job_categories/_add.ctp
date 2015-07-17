<div class="jobCategories form">
<?php echo $this->Form->create('JobCategory');?>
	<fieldset>
		<legend><?php __('Add Job Category'); ?></legend>
	<?php
		echo $this->Form->input('jcCatgHeading');
		echo $this->Form->input('jcIsActiveCatg');
		echo $this->Form->input('jcAddDate');
		echo $this->Form->input('jcCatParent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Job Categories', true), array('action' => 'index'));?></li>
	</ul>
</div>