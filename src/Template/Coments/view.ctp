<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coment'), ['action' => 'edit', $coment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coment'), ['action' => 'delete', $coment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Municipalites'), ['controller' => 'Municipalites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipalite'), ['controller' => 'Municipalites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coments view large-9 medium-8 columns content">
    <h3><?= h($coment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $coment->has('user') ? $this->Html->link($coment->user->id, ['controller' => 'Users', 'action' => 'view', $coment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipalite') ?></th>
            <td><?= $coment->has('municipalite') ? $this->Html->link($coment->municipalite->name, ['controller' => 'Municipalites', 'action' => 'view', $coment->municipalite->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($coment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($coment->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Coment') ?></h4>
        <?= $this->Text->autoParagraph(h($coment->coment)); ?>
    </div>
</div>
