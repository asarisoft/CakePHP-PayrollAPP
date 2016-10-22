<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Education'), ['action' => 'edit', $education->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Education'), ['action' => 'delete', $education->id], ['confirm' => __('Are you sure you want to delete # {0}?', $education->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Education'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="educations view large-10 medium-8 columns content">
    <h3><?= h($education->name) ?></h3>
    <table class="vertical-table view-detail">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($education->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($education->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education Allowance') ?></th>
            <td><?= $this->Number->format($education->education_allowance) ?></td>
        </tr>
    </table>
</div>
