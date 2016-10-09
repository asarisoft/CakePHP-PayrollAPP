<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Marital Status'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maritalstatuses index large-9 medium-8 columns content">
    <h3><?= __('Maritalstatuses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rice_allowance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('after_years') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maritalstatuses as $maritalstatus): ?>
            <tr>
                <td><?= h($maritalstatus->name) ?></td>
                <td><?= $this->Number->format($maritalstatus->rice_allowance) ?></td>
                <td><?= $this->Number->format($maritalstatus->after_years) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $maritalstatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maritalstatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maritalstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maritalstatus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
