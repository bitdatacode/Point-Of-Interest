<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Municipalite'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="municipalites index large-9 medium-8 columns content">
    <h3><?= __('Municipalites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slogan1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slogan2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('puntuation1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('puntuation2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('puntuation3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_puntuation1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_puntuation2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_puntuation3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groups_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($municipalites as $municipalite): ?>
            <tr>
                <td><?= $this->Number->format($municipalite->id) ?></td>
                <td><?= h($municipalite->name) ?></td>
                <td><?= h($municipalite->slogan1) ?></td>
                <td><?= h($municipalite->slogan2) ?></td>
                <td><?= $this->Number->format($municipalite->puntuation1) ?></td>
                <td><?= $this->Number->format($municipalite->puntuation2) ?></td>
                <td><?= $this->Number->format($municipalite->puntuation3) ?></td>
                <td><?= h($municipalite->name_puntuation1) ?></td>
                <td><?= h($municipalite->name_puntuation2) ?></td>
                <td><?= h($municipalite->name_puntuation3) ?></td>
                <td><?= h($municipalite->photo) ?></td>
                <td><?= h($municipalite->created) ?></td>
                <td><?= h($municipalite->modified) ?></td>
                <td><?= $municipalite->has('group') ? $this->Html->link($municipalite->group->name, ['controller' => 'Groups', 'action' => 'view', $municipalite->group->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $municipalite->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $municipalite->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $municipalite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipalite->id)]) ?>
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
