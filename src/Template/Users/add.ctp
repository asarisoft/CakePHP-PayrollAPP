<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Transports'), ['controller' => 'Transports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transport'), ['controller' => 'Transports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job Positions'), ['controller' => 'Jobpositions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Position'), ['controller' => 'Jobpositions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Marital Statuses'), ['controller' => 'Maritalstatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marital Status'), ['controller' => 'Maritalstatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educations'), ['controller' => 'Educations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Education'), ['controller' => 'Educations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('tmt');
            echo $this->Form->input('transports_id', ['options' => $transports]);
            echo $this->Form->input('job_positions_id', ['options' => $jobPositions]);
            echo $this->Form->input('marital_statuses_id', ['options' => $maritalStatuses]);
            echo $this->Form->input('educations_id', ['options' => $educations]);
            echo $this->Form->input('basic_salary');
            echo $this->Form->input('password');
            echo $this->Form->input('username');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
