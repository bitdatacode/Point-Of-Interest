<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pointofintereste'), ['action' => 'edit', $pointofintereste->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pointofintereste'), ['action' => 'delete', $pointofintereste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pointofintereste->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pointofinterestes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pointofintereste'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Municipalites'), ['controller' => 'Municipalites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipalite'), ['controller' => 'Municipalites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pointofinterestes view large-9 medium-8 columns content">
    <h3><?= h($pointofintereste->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pointofintereste->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slogan1') ?></th>
            <td><?= h($pointofintereste->slogan1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titele1') ?></th>
            <td><?= h($pointofintereste->titele1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titele2') ?></th>
            <td><?= h($pointofintereste->titele2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horario') ?></th>
            <td><?= h($pointofintereste->horario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($pointofintereste->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($pointofintereste->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $pointofintereste->has('user') ? $this->Html->link($pointofintereste->user->id, ['controller' => 'Users', 'action' => 'view', $pointofintereste->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipalite') ?></th>
            <td><?= $pointofintereste->has('municipalite') ? $this->Html->link($pointofintereste->municipalite->name, ['controller' => 'Municipalites', 'action' => 'view', $pointofintereste->municipalite->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pointofintereste->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($pointofintereste->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pointofintereste->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pointofintereste->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description1') ?></h4>
        <?= $this->Text->autoParagraph(h($pointofintereste->description1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description2') ?></h4>
        <?= $this->Text->autoParagraph(h($pointofintereste->description2)); ?>
    </div>
</div>
