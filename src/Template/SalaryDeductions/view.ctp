<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salary Deduction'), ['action' => 'edit', $salaryDeduction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salary Deduction'), ['action' => 'delete', $salaryDeduction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salaryDeduction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salary Deductions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salary Deduction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payrolls'), ['controller' => 'Payrolls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payroll'), ['controller' => 'Payrolls', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salaryDeductions view large-9 medium-8 columns content">
    <h3><?= h($salaryDeduction->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($salaryDeduction->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payroll') ?></th>
            <td><?= $salaryDeduction->has('payroll') ? $this->Html->link($salaryDeduction->payroll->id, ['controller' => 'Payrolls', 'action' => 'view', $salaryDeduction->payroll->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($salaryDeduction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($salaryDeduction->value) ?></td>
        </tr>
    </table>
</div>
