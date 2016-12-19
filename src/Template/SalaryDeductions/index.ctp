<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Salary Deduction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payrolls'), ['controller' => 'Payrolls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payroll'), ['controller' => 'Payrolls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salaryDeductions index large-9 medium-8 columns content">
    <h3><?= __('Salary Deductions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payrolls_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salaryDeductions as $salaryDeduction): ?>
            <tr>
                <td><?= $this->Number->format($salaryDeduction->id) ?></td>
                <td><?= h($salaryDeduction->name) ?></td>
                <td><?= $salaryDeduction->has('payroll') ? $this->Html->link($salaryDeduction->payroll->id, ['controller' => 'Payrolls', 'action' => 'view', $salaryDeduction->payroll->id]) : '' ?></td>
                <td><?= $this->Number->format($salaryDeduction->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salaryDeduction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salaryDeduction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salaryDeduction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salaryDeduction->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
