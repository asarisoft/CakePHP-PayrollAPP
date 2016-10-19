<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(__('Delete Payroll'), ['action' => 'delete', $payroll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payroll->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payrolls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payroll'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payrolls view large-9 medium-8 columns content">
    <h3>#<?= h($payroll->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $payroll->has('user') ? $this->Html->link($payroll->user->name, ['controller' => 'Users', 'action' => 'view', $payroll->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($payroll->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($payroll->status_text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= $this->Number->format($payroll->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $payroll->year ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Basic Salary') ?></th>
            <td><?= $this->Number->format($payroll->basic_salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position Allowance') ?></th>
            <td><?= $this->Number->format($payroll->position_allowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Communication Allowance') ?></th>
            <td><?= $this->Number->format($payroll->communication_allowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rice Allowance') ?></th>
            <td><?= $this->Number->format($payroll->rice_allowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education Allowance') ?></th>
            <td><?= $this->Number->format($payroll->education_allowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transport Allowance') ?></th>
            <td><?= $this->Number->format($payroll->transport_allowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collector Share Profit') ?></th>
            <td><?= $this->Number->format($payroll->collector_share_profit) ?></td>
        </tr>
        <?php foreach ($other_allowances as $other_allowance) { ?>
        <tr>
            <th scope="row"><?= __($other_allowance->name) ?></th>
            <td><?= $this->Number->format($other_allowance->value) ?></td>
        </tr>
        <?php }?>
    </table>
</div>
