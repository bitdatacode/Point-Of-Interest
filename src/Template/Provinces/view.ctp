<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Province'), ['action' => 'edit', $province->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Province'), ['action' => 'delete', $province->id], ['confirm' => __('Are you sure you want to delete # {0}?', $province->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="provinces view large-9 medium-8 columns content">
    <h3><?= h($province->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($province->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $province->has('region') ? $this->Html->link($province->region->name, ['controller' => 'Regions', 'action' => 'view', $province->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($province->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($province->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($province->modified) ?></td>
        </tr>
    </table>
</div>
