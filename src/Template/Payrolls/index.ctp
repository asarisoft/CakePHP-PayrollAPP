<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Add Salary'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="payrolls index large-10 medium-8 columns content">

    <h3><?= __('Payrolls') ?></h3>
    <?php
        echo $this->Form->create("Filter", ['url' => ['controller' => 'payrolls', 'action' => 'index'], 'type' => 'get']);
    ?>

    <div class="payrolls form large-10 medium-5">
    <table>
        <tr>
            <td><?= $this->Form->month('Payrolls.month', ['empty' => false]); ?></td>
            <td><?= $this->Form->year('Payrolls.year', [
                    'minYear' => date('Y') - 1,
                    'maxYear' =>  date('Y') + 1,
                    'orderYear' => 'asc',
                    'empty'=>false,
                ]); ?>
            </td>
            <td><?= $this->Form->select('Payrolls.status', [0=>'Created', 1=>'Canceled'],
                ['empty' => false] ); ?>
            </td>
            <td><?= $this->Form->select('Payrolls.request_to_export', [0=>'View', 1=>'Download'],
                ['empty' => false] ); ?>
            </td>
            <td class="table-button">
                <?php
                    echo $this->Form->button(__('Submit'), ["class"=>"small-button"]);
                    echo $this->Form->end();
                ?>      
            </td>
        </tr>
    </table>
    </div>

    <br/>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payrolls as $payroll): ?>
            <tr>
                <td><?= $payroll->has('user') ? $this->Html->link($payroll->user->name, ['controller' => 'Users', 'action' => 'view', $payroll->user->id]) : '' ?></td>
                <td><?= h($payroll->created) ?></td>
                <td><?= date("F", mktime(0, 0, 0, $payroll->month, 10)) ?></td>
                <td><?= $payroll->year ?></td>
                <td><?= $payroll->status_text ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $payroll->id]) ?>
                    <?= $this->Form->postLink(__('Cancel'), ['action' => 'cancel', $payroll->id], ['confirm' => __('Are you sure you want to cancel # {0}?', $payroll->id)]) ?>
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
