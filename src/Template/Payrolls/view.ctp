<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payroll'), ['action' => 'edit', $payroll->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payroll'), ['action' => 'delete', $payroll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payroll->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payrolls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payroll'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payrolls view large-9 medium-8 columns content">
    <h3><?= h($payroll->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $payroll->has('user') ? $this->Html->link($payroll->user->name, ['controller' => 'Users', 'action' => 'view', $payroll->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Allowance 2') ?></th>
            <td><?= h($payroll->other_allowance_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payroll->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= $this->Number->format($payroll->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($payroll->year) ?></td>
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
        <tr>
            <th scope="row"><?= __('Other Allowance 1') ?></th>
            <td><?= $this->Number->format($payroll->other_allowance_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Allowance 3') ?></th>
            <td><?= $this->Number->format($payroll->other_allowance_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Allowance 4') ?></th>
            <td><?= $this->Number->format($payroll->other_allowance_4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Allowance 5') ?></th>
            <td><?= $this->Number->format($payroll->other_allowance_5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($payroll->created) ?></td>
        </tr>
    </table>
</div>
