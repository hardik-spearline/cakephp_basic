<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>


<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0" class = "table table-hover table-responsive table-striped">
        <thead>
            <tr>
                <th scope="col" width="5%"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" width="15%"><?= $this->Paginator->sort('email') ?></th>
                <!-- <th scope="col" width="10%"><?= $this->Paginator->sort('password') ?></th> -->
                <th scope="col" width="15%"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col" width="15%"><?= $this->Paginator->sort('created') ?></th>
                <!-- <th scope="col" width="15%"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions" width="30%"><?= __('') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $this->Html->link(h($user->email), ['action' => 'view', $user->id]) ?></td>
                <!-- <td><?= h($user->password) ?></td> -->
                <td><?= h($user->phone) ?></td>
                <td>
                    <?php echo $this->Time->timeagoinwords($user->created, 
                ['accuracy'=> ['week'=>'week'] ]); ?>
                </td>
                <!-- <td><?= h($user->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['type' => 'button', 'action' => 'edit', $user->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['type' => 'button', 'action' => 'edit', $user->id], ['class' => 'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['type' => 'button', 'action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
