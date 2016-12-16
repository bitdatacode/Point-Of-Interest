<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipalites'), ['controller' => 'Municipalites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipalite'), ['controller' => 'Municipalites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coments index large-9 medium-8 columns content">
    <h3><?= __('Coments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipalites_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coments as $coment): ?>
            <tr>
                <td><?= $this->Number->format($coment->id) ?></td>
                <td><?= h($coment->created) ?></td>
                <td><?= h($coment->modified) ?></td>
                <td><?= $coment->has('user') ? $this->Html->link($coment->user->id, ['controller' => 'Users', 'action' => 'view', $coment->user->id]) : '' ?></td>
                <td><?= $coment->has('municipalite') ? $this->Html->link($coment->municipalite->name, ['controller' => 'Municipalites', 'action' => 'view', $coment->municipalite->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
