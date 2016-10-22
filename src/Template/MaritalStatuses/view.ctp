<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Marital Status'), ['action' => 'edit', $maritalstatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Marital Status'), ['action' => 'delete', $maritalstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maritalstatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Marital Statuses'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="maritalstatuses view large-10 medium-8 columns content">
    <h3><?= h($maritalstatus->name) ?></h3>
    <table class="vertical-table view-detail">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($maritalstatus->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maritalstatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rice Allowance') ?></th>
            <td><?= $this->Number->format($maritalstatus->rice_allowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('After Years') ?></th>
            <td><?= $this->Number->format($maritalstatus->after_years) ?></td>
        </tr>
    </table>
</div>
