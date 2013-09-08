<div class="page-content">	<?php $this->Html->addCrumb('users', '/users');?>	<h3><?php echo __('Users Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New user'), array('action' => 'add')); ?></button></h3>	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">	<tr>			<th><?php echo $this->Paginator->sort('user'); ?></th>			<th><?php echo $this->Paginator->sort('role'); ?></th>			<th><?php echo $this->Paginator->sort('modified'); ?></th>			<th class="actions"><?php echo __('Actions'); ?></th>	</tr>	<?php	foreach ($users as $user): ?>	<tr>		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>		<td class="actions">			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?> | 			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>		</td>	</tr><?php endforeach; ?>	</table>	<p>	<?php	echo $this->Paginator->counter(array(	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')	));	?>	</p></div>