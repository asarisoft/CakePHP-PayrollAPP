<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salary Allowance'), ['action' => 'edit', $salaryAllowance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salary Allowance'), ['action' => 'delete', $salaryAllowance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salaryAllowance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salary Allowances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salary Allowance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payrolls'), ['controller' => 'Payrolls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payroll'), ['controller' => 'Payrolls', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salaryAllowances view large-9 medium-8 columns content">
    <h3><?= h($salaryAllowance->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($salaryAllowance->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payroll') ?></th>
            <td><?= $salaryAllowance->has('payroll') ? $this->Html->link($salaryAllowance->payroll->id, ['controller' => 'Payrolls', 'action' => 'view', $salaryAllowance->payroll->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($salaryAllowance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($salaryAllowance->value) ?></td>
        </tr>
    </table>
</div>
