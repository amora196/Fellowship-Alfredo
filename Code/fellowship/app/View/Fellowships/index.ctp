<div class="fellowships index">
	<h2><?php echo __('Fellowships'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('degree_id'); ?></th>
			<th><?php echo $this->Paginator->sort('discipline_id'); ?></th>
			<th><?php echo $this->Paginator->sort('elegibility_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fellowships as $fellowship): ?>
	<tr>
		<td><?php echo h($fellowship['Fellowship']['id']); ?>&nbsp;</td>
		<td><?php echo h($fellowship['Fellowship']['title']); ?>&nbsp;</td>
		<td><?php echo h($fellowship['Fellowship']['body']); ?>&nbsp;</td>
		<td><?php echo h($fellowship['Fellowship']['created']); ?>&nbsp;</td>
		<td><?php echo h($fellowship['Fellowship']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fellowship['Degree']['name'], array('controller' => 'degrees', 'action' => 'view', $fellowship['Degree']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fellowship['Discipline']['name'], array('controller' => 'disciplines', 'action' => 'view', $fellowship['Discipline']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fellowship['Elegibility']['name'], array('controller' => 'elegibilities', 'action' => 'view', $fellowship['Elegibility']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fellowship['User']['id'], array('controller' => 'users', 'action' => 'view', $fellowship['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fellowship['Fellowship']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fellowship['Fellowship']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fellowship['Fellowship']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $fellowship['Fellowship']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Fellowship'), array('action' => 'add')); ?></li>
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
