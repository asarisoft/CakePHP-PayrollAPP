<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transport'), ['action' => 'edit', $transport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transport'), ['action' => 'delete', $transport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transports'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="transports view large-9 medium-8 columns content">
    <h3><?= h($transport->name) ?></h3>
    <table class="vertical-table view-detail">
        <tr>
            <th scope="row"><?= __('Origin') ?></th>
            <td><?= h($transport->origin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination') ?></th>
            <td><?= h($transport->destination) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($transport->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transport Allowance') ?></th>
            <td><?= $this->Number->format($transport->transport_allowance) ?></td>
        </tr>
    </table>
</div>
