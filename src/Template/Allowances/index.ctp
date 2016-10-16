<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Allowance'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="allowances index large-9 medium-8 columns content">
    <h3><?= __('Other Allowances') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allowances as $allowance): ?>
            <tr>
                <td><?= $allowance->has('user') ? $this->Html->link($allowance->user->name, ['controller' => 'Users', 'action' => 'view', $allowance->user->id]) : '' ?></td>
                <td><?= h($allowance->name) ?></td>
                <td><?= $this->Number->format($allowance->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $allowance->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $allowance->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $allowance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $allowance->id)]) ?>
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
