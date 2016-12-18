<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Tambah Data'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="allowances index large-10 medium-8 columns content">
    <h3><?= __('Tambahan Gaji') ?></h3>
    <table cellpadding="0" cellspacing="0" class="large-8">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name', ["label"=>"Nama Tambahan"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id', ["label"=>"Pegawai"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('value', ["label"=>"Nominal"]) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allowances as $allowance): ?>
            <tr>
                <td><?= $this->Html->link(h($allowance->name), ['action' => 'view', $allowance->id]) ?></td>
                <td><?= $allowance->has('user') ? $this->Html->link($allowance->user->name, ['controller' => 'Users', 'action' => 'view', $allowance->user->id]) : '' ?></td>
                <td><?= $this->Number->format($allowance->value) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator large-8">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
