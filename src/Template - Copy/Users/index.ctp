<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Tambah Data'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-10 medium-8 columns content">
    <h3><?= __('Pegawai') ?></h3>
    <table cellpadding="0" cellspacing="0", class="large-8">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name', ["label"=>"Nama"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_positions_id', ["label"=>"Jabatan"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active', ["label"=>"Status"]) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Html->link(h($user->name), ['action' => 'view', $user->id]) ?></td>
                <td><?= $user->has('job_position') ? $this->Html->link($user->job_position->name, ['controller' => 'Jobpositions', 'action' => 'view', $user->job_position->id]) : '' ?></td>
                <td><?php if($user->is_active) { echo h("Active"); } else { echo h ("Non Active");} ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator large-8">
        <ul class="pagination">
            <?= $this->Paginator->numbers() ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
