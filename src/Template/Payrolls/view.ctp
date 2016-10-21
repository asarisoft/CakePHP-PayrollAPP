<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Payrolls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payroll'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Cancel'), ['action' => 'cancel', $payroll->id], ['confirm' => __('Are you sure you want to cancel # {0}?', $payroll->id)]) ?></li>
    </ul>
</nav>
<div class="payrolls view large-9 medium-8 columns content">
    <h3>#<?= h($payroll->id) ?></h3>
    <table class="vertical-table view-detail">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $payroll->has('user') ? $this->Html->link($payroll->user->name, ['controller' => 'Users', 'action' => 'view', $payroll->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= date("F", mktime(0, 0, 0, $payroll->month, 10)) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $payroll->year ?></td>
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
            <th scope="row"><?= __('Basic Salary') ?></th>
            <td><span><?= $this->Number->format($payroll->basic_salary) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position Allowance') ?></th>
            <td><span><?= $this->Number->format($payroll->position_allowance) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Communication Allowance') ?></th>
            <td><span><?= $this->Number->format($payroll->communication_allowance) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rice Allowance') ?></th>
            <td><span><?= $this->Number->format($payroll->rice_allowance) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education Allowance') ?></th>
            <td><span><?= $this->Number->format($payroll->education_allowance) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transport Allowance') ?></th>
            <td><span><?= $this->Number->format($payroll->transport_allowance) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collector Share Profit') ?></th>
            <td><span><?= $this->Number->format($payroll->collector_share_profit) ?></span></td>
        </tr>
        <?php foreach ($other_allowances as $other_allowance) { ?>
        <tr>
            <th scope="row"><?= __($other_allowance->name) ?></th>
            <td><span><?= $this->Number->format($other_allowance->value) ?></span></td>
        </tr>
        <?php }?>

        <tr>
            <th scope="row"><?= __("Total Salary") ?></th>
            <td><span><?= $this->Number->format($total) ?></span></td>
        </tr>
    </table>
</div>
