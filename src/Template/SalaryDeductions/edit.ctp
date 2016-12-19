<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $salaryDeduction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salaryDeduction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Salary Deductions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Payrolls'), ['controller' => 'Payrolls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payroll'), ['controller' => 'Payrolls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salaryDeductions form large-9 medium-8 columns content">
    <?= $this->Form->create($salaryDeduction) ?>
    <fieldset>
        <legend><?= __('Edit Salary Deduction') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('payrolls_id', ['options' => $payrolls]);
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
