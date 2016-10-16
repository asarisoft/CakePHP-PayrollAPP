<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payroll'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payrolls index large-9 medium-8 columns content">
    <h3><?= __('Payrolls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payrolls as $payroll): ?>
            <tr>
                <td><?= $this->Number->format($payroll->id) ?></td>
                <td><?= $payroll->has('user') ? $this->Html->link($payroll->user->name, ['controller' => 'Users', 'action' => 'view', $payroll->user->id]) : '' ?></td>
                <td><?= h($payroll->created) ?></td>
                <td><?= $this->Number->format($payroll->month) ?></td>
                <td><?= $this->Number->format($payroll->year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $payroll->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payroll->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payroll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payroll->id)]) ?>
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
