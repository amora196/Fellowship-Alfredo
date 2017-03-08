<h1>Fellowship Database</h1>
<div class="fellowships index">
<div class="panel panel-default">
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('title'); ?></th>
                    <th><?php echo $this->Paginator->sort('description'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th><?php echo $this->Paginator->sort('degree_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('discipline_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('elegibility_id'); ?></th>
                    <?php if (AuthComponent::user()) : ?>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($fellowships as $fellowship): ?>
                    <tr>
                            <td><?php echo $this->Html->link($fellowship['Fellowship']['title'], array('action' => 'view', $fellowship['Fellowship']['id'])); ?>&nbsp;</td>
                            <td><?php echo h($fellowship['Fellowship']['description']); ?>&nbsp;</td>
                            <td ><?php echo date('m/d/Y', strtotime($fellowship['Fellowship']['created'])); ?>&nbsp;</td>
                            <td><?php echo date('m/d/Y', strtotime($fellowship['Fellowship']['modified'])); ?>&nbsp;</td>
                            <td>
                                    <?php echo h($fellowship['Degree']['name']); ?>
                            </td>
                            <td>
                                    <?php echo h($fellowship['Discipline']['name']); ?>
                            </td>
                            <td>
                                    <?php echo h($fellowship['Elegibility']['name']); ?>
                            </td>
                            
                            <?php if (AuthComponent::user()) : ?>
                                <td class="actions">
                                    <!--?php echo $this->Html->link(__('View'), array('action' => 'view', $fellowship['Fellowship']['id'])); ?>
                                    ?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fellowship['Fellowship']['id'])); ?>-->
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fellowship['Fellowship']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $fellowship['Fellowship']['id']))); ?>
                                </td>
                            <?php endif; ?>

                            
                    </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
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



<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable().destroy();
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
