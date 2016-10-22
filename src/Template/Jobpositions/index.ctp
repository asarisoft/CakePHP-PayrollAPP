<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Job Position'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobpositions index large-10 medium-8 columns content">
    <h3><?= __('Job Position') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position_allowance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('communication_allowance') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobpositions as $jobposition): ?>
            <tr>
                <td><?= h($jobposition->name) ?></td>
                <td><?= $this->Number->format($jobposition->position_allowance) ?></td>
                <td><?= $this->Number->format($jobposition->communication_allowance) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jobposition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jobposition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jobposition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobposition->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div> -->
</div>
