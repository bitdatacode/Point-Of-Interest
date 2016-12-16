<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Municipalite'), ['action' => 'edit', $municipalite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Municipalite'), ['action' => 'delete', $municipalite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipalite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Municipalites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipalite'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="municipalites view large-9 medium-8 columns content">
    <h3><?= h($municipalite->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($municipalite->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slogan1') ?></th>
            <td><?= h($municipalite->slogan1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slogan2') ?></th>
            <td><?= h($municipalite->slogan2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Puntuation1') ?></th>
            <td><?= h($municipalite->name_puntuation1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Puntuation2') ?></th>
            <td><?= h($municipalite->name_puntuation2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Puntuation3') ?></th>
            <td><?= h($municipalite->name_puntuation3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($municipalite->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $municipalite->has('group') ? $this->Html->link($municipalite->group->name, ['controller' => 'Groups', 'action' => 'view', $municipalite->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($municipalite->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Puntuation1') ?></th>
            <td><?= $this->Number->format($municipalite->puntuation1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Puntuation2') ?></th>
            <td><?= $this->Number->format($municipalite->puntuation2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Puntuation3') ?></th>
            <td><?= $this->Number->format($municipalite->puntuation3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($municipalite->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($municipalite->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description1') ?></h4>
        <?= $this->Text->autoParagraph(h($municipalite->description1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description2') ?></h4>
        <?= $this->Text->autoParagraph(h($municipalite->description2)); ?>
    </div>
</div>
