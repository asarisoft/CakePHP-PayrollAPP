<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table view-detail">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transport') ?></th>
            <td><?= $user->has('transport') ? $this->Html->link($user->transport->origin." - ".$user->transport->destination, ['controller' => 'Transports', 'action' => 'view', $user->transport->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job Position') ?></th>
            <td><?= $user->has('job_position') ? $this->Html->link($user->job_position->name, ['controller' => 'Jobpositions', 'action' => 'view', $user->job_position->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marital Status') ?></th>
            <td><?= $user->has('marital_status') ? $this->Html->link($user->marital_status->name, ['controller' => 'Maritalstatuses', 'action' => 'view', $user->marital_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education') ?></th>
            <td><?= $user->has('education') ? $this->Html->link($user->education->name, ['controller' => 'Educations', 'action' => 'view', $user->education->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Basic Salary') ?></th>
            <td><?= $this->Number->format($user->basic_salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tmt') ?></th>
            <td><?= h($user->tmt) ?></td>
        </tr>
    </table>
</div>
