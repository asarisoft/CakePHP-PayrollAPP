<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Allowance'), ['action' => 'edit', $allowance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Allowance'), ['action' => 'delete', $allowance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $allowance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Allowances'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="allowances view large-9 medium-8 columns content">
    <h3><?= h($allowance->name) ?></h3>
    <table class="vertical-table view-detail">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $allowance->has('user') ? $this->Html->link($allowance->user->name, ['controller' => 'Users', 'action' => 'view', $allowance->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($allowance->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($allowance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($allowance->value) ?></td>
        </tr>
    </table>
</div>
