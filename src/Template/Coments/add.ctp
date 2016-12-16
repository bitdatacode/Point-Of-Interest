<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Coments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipalites'), ['controller' => 'Municipalites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipalite'), ['controller' => 'Municipalites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coments form large-9 medium-8 columns content">
    <?= $this->Form->create($coment) ?>
    <fieldset>
        <legend><?= __('Add Coment') ?></legend>
        <?php
            echo $this->Form->input('coment');
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('municipalites_id', ['options' => $municipalites]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
