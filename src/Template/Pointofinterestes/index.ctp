<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pointofintereste'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipalites'), ['controller' => 'Municipalites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipalite'), ['controller' => 'Municipalites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pointofinterestes index large-9 medium-8 columns content">
    <h3><?= __('Pointofinterestes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slogan1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titele1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titele2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipalites_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pointofinterestes as $pointofintereste): ?>
            <tr>
                <td><?= $this->Number->format($pointofintereste->id) ?></td>
                <td><?= h($pointofintereste->name) ?></td>
                <td><?= h($pointofintereste->slogan1) ?></td>
                <td><?= h($pointofintereste->titele1) ?></td>
                <td><?= h($pointofintereste->titele2) ?></td>
                <td><?= $this->Number->format($pointofintereste->price) ?></td>
                <td><?= h($pointofintereste->horario) ?></td>
                <td><?= h($pointofintereste->photo) ?></td>
                <td><?= h($pointofintereste->address) ?></td>
                <td><?= h($pointofintereste->created) ?></td>
                <td><?= h($pointofintereste->modified) ?></td>
                <td><?= $pointofintereste->has('user') ? $this->Html->link($pointofintereste->user->id, ['controller' => 'Users', 'action' => 'view', $pointofintereste->user->id]) : '' ?></td>
                <td><?= $pointofintereste->has('municipalite') ? $this->Html->link($pointofintereste->municipalite->name, ['controller' => 'Municipalites', 'action' => 'view', $pointofintereste->municipalite->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pointofintereste->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pointofintereste->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pointofintereste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pointofintereste->id)]) ?>
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
