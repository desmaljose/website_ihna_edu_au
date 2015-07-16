<div class="jobProviderDetails form">
<?php echo $this->Form->create('JobProviderDetail');?>
	<fieldset>
		<legend><?php __('Add Job Provider Detail'); ?></legend>
	<?php
		echo $this->Form->input('jpCompanyName');
		echo $this->Form->input('jpABNNumber');
		echo $this->Form->input('jpCompanyLoc');
		echo $this->Form->input('jpCompanyAddress');
		echo $this->Form->input('jpCompanyEmail');
		echo $this->Form->input('jpCompanyPhone');
		echo $this->Form->input('jpContactPerson');
		echo $this->Form->input('jpCompanyLogo');
		echo $this->Form->input('jpIsActive');
		echo $this->Form->input('jpAddDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Job Provider Details', true), array('action' => 'index'));?></li>
	</ul>
</div>