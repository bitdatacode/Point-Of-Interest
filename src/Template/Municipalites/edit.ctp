<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $municipalite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $municipalite->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Municipalites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="municipalites form large-9 medium-8 columns content">
    <?= $this->Form->create($municipalite) ?>
    <fieldset>
        <legend><?= __('Edit Municipalite') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description1');
            echo $this->Form->input('description2');
            echo $this->Form->input('slogan1');
            echo $this->Form->input('slogan2');
            echo $this->Form->input('puntuation1');
            echo $this->Form->input('puntuation2');
            echo $this->Form->input('puntuation3');
            echo $this->Form->input('name_puntuation1');
            echo $this->Form->input('name_puntuation2');
            echo $this->Form->input('name_puntuation3');
            echo $this->Form->input('photo');
            echo $this->Form->input('groups_id', ['options' => $groups]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
