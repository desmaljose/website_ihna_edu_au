<div class="cms form">
<?php echo $form->create('Cm');?>
	<fieldset>
 		<legend><?php __('Add Cm');?></legend>
	<?php
		echo $form->input('page_name');
		echo $form->input('page_title');
		echo $form->input('page_content');
		echo $form->input('meta_title');
		echo $form->input('meta_keywords');
		echo $form->input('meta_desc');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Cms', true), array('action' => 'index'));?></li>
	</ul>
</div>
