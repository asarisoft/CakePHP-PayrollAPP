<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('New Salary Allowance'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payrolls'), ['controller' => 'Payrolls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payroll'), ['controller' => 'Payrolls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salaryAllowances index large-10 medium-8 columns content">
    <h3><?= __('Salary Allowances') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payrolls_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salaryAllowances as $salaryAllowance): ?>
            <tr>
                <td><?= $this->Number->format($salaryAllowance->id) ?></td>
                <td><?= h($salaryAllowance->name) ?></td>
                <td><?= $this->Number->format($salaryAllowance->value) ?></td>
                <td><?= $salaryAllowance->has('payroll') ? $this->Html->link($salaryAllowance->payroll->id, ['controller' => 'Payrolls', 'action' => 'view', $salaryAllowance->payroll->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salaryAllowance->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salaryAllowance->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salaryAllowance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salaryAllowance->id)]) ?>
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
