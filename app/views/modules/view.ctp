<div class="modules view">
<h2><?php  __('Module');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $module['Module']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Module Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $module['Module']['module_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Desc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $module['Module']['desc']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enable'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $module['Module']['enable']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Module', true), array('action' => 'edit', $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Module', true), array('action' => 'delete', $module['Module']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($module['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Userlevel'); ?></th>
		<th><?php __('Doj'); ?></th>
		<th><?php __('Dob'); ?></th>
		<th><?php __('Enable'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($module['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['first_name'];?></td>
			<td><?php echo $user['last_name'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['userlevel'];?></td>
			<td><?php echo $user['doj'];?></td>
			<td><?php echo $user['dob'];?></td>
			<td><?php echo $user['enable'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
