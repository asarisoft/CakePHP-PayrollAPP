<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $payroll->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $payroll->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Payrolls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payrolls form large-9 medium-8 columns content">
    <?= $this->Form->create($payroll) ?>
    <fieldset>
        <legend><?= __('Edit Payroll') ?></legend>
        <?php
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('month');
            echo $this->Form->input('year');
            echo $this->Form->input('basic_salary');
            echo $this->Form->input('position_allowance');
            echo $this->Form->input('communication_allowance');
            echo $this->Form->input('rice_allowance');
            echo $this->Form->input('education_allowance');
            echo $this->Form->input('transport_allowance');
            echo $this->Form->input('collector_share_profit');
            echo $this->Form->input('other_allowance_1');
            echo $this->Form->input('other_allowance_2');
            echo $this->Form->input('other_allowance_3');
            echo $this->Form->input('other_allowance_4');
            echo $this->Form->input('other_allowance_5');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
