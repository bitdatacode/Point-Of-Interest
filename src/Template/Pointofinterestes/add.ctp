<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pointofinterestes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipalites'), ['controller' => 'Municipalites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipalite'), ['controller' => 'Municipalites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pointofinterestes form large-9 medium-8 columns content">
    <?= $this->Form->create($pointofintereste) ?>
    <fieldset>
        <legend><?= __('Add Pointofintereste') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('slogan1');
            echo $this->Form->input('description1');
            echo $this->Form->input('description2');
            echo $this->Form->input('titele1');
            echo $this->Form->input('titele2');
            echo $this->Form->input('price');
            echo $this->Form->input('horario');
            echo $this->Form->input('photo');
            echo $this->Form->input('address');
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('municipalites_id', ['options' => $municipalites]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
