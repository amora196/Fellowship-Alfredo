<div class="fellowships view">
<h2><?php echo __('Fellowship'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fellowship['Fellowship']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($fellowship['Fellowship']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($fellowship['Fellowship']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fellowship['Fellowship']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fellowship['Fellowship']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Degree'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fellowship['Degree']['name'], array('controller' => 'degrees', 'action' => 'view', $fellowship['Degree']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fellowship['Discipline']['name'], array('controller' => 'disciplines', 'action' => 'view', $fellowship['Discipline']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Elegibility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fellowship['Elegibility']['name'], array('controller' => 'elegibilities', 'action' => 'view', $fellowship['Elegibility']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fellowship['User']['id'], array('controller' => 'users', 'action' => 'view', $fellowship['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fellowship'), array('action' => 'edit', $fellowship['Fellowship']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fellowship'), array('action' => 'delete', $fellowship['Fellowship']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $fellowship['Fellowship']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Fellowships'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fellowship'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Degrees'), array('controller' => 'degrees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Degree'), array('controller' => 'degrees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elegibilities'), array('controller' => 'elegibilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Elegibility'), array('controller' => 'elegibilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($fellowship['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fellowship['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
