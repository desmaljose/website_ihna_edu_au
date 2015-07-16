<div class="forumCategories view">
<h2><?php  __('Forum Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumCategory['ForumCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumCategory['ForumCategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumCategory['ForumCategory']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumCategory['ForumCategory']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forumCategory['ForumCategory']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Forum Category', true), array('action' => 'edit', $forumCategory['ForumCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Forum Category', true), array('action' => 'delete', $forumCategory['ForumCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forumCategory['ForumCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forum Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum Category', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
