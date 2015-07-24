<div class="forumAnswers index">
	<h2><?php __('Forum Answers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('a_id');?></th>
			<th><?php echo $this->Paginator->sort('a_name');?></th>
			<th><?php echo $this->Paginator->sort('a_email');?></th>
			<th><?php echo $this->Paginator->sort('a_answer');?></th>
			<th><?php echo $this->Paginator->sort('a_datetime');?></th>
			<th><?php echo $this->Paginator->sort('a_approval');?></th>
			<th><?php echo $this->Paginator->sort('from_admin');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($forumAnswers as $forumAnswer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($forumAnswer['ForumQuestion']['name'], array('controller' => 'forum_questions', 'action' => 'view', $forumAnswer['ForumQuestion']['id'])); ?>
		</td>
		<td><?php echo $forumAnswer['ForumAnswer']['a_id']; ?>&nbsp;</td>
		<td><?php echo $forumAnswer['ForumAnswer']['a_name']; ?>&nbsp;</td>
		<td><?php echo $forumAnswer['ForumAnswer']['a_email']; ?>&nbsp;</td>
		<td><?php echo $forumAnswer['ForumAnswer']['a_answer']; ?>&nbsp;</td>
		<td><?php echo $forumAnswer['ForumAnswer']['a_datetime']; ?>&nbsp;</td>
		<td><?php echo $forumAnswer['ForumAnswer']['a_approval']; ?>&nbsp;</td>
		<td><?php echo $forumAnswer['ForumAnswer']['from_admin']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $forumAnswer['ForumAnswer']['a_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $forumAnswer['ForumAnswer']['a_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $forumAnswer['ForumAnswer']['a_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forumAnswer['ForumAnswer']['a_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Forum Answer', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Forum Questions', true), array('controller' => 'forum_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum Question', true), array('controller' => 'forum_questions', 'action' => 'add')); ?> </li>
	</ul>
</div>