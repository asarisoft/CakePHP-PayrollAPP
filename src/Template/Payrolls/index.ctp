<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Tambah Data'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payrolls index large-10 medium-8 columns content">

    <h3><?= __('Daftar Gaji') ?></h3>
    
    <?php
        echo $this->Form->create("Filter", ['url' => ['controller' => 'payrolls', 'action' => 'index'], 'type' => 'get']);
    ?>
    <div class="payrolls form large-10 medium-5">
    <table>
        <tr>
            <td><?= $this->Form->month('Payrolls.month', ['empty' => false]); ?></td>
            <td><?= $this->Form->year('Payrolls.year', [
                    'minYear' => date('Y') - 1,
                    'maxYear' =>  date('Y') + 1,
                    'orderYear' => 'asc',
                    'empty'=>false,
                ]); ?>
            </td>
            <td><?= $this->Form->select('Payrolls.status', [0=>'Dibuat', 1=>'Di-Cancel'],
                ['empty' => false] ); ?>
            </td>
            <td><?= $this->Form->select('Payrolls.request_to_export', [0=>'- - -', 1=>'Download'],
                ['empty' => false] ); ?>
            </td>
            <td class="table-button">
                <?php
                    echo $this->Form->button(__('Submit'), ["class"=>"small-button"]);
                    echo $this->Form->end();
                ?>      
            </td>
        </tr>
    </table>
    </div>

    <br/>
    <table cellpadding="0" cellspacing="0" class="large-10">
        <thead>
            <tr>
                <th width="10%"><a href="">Nomor</a></th>
                <th scope="col"><?= $this->Paginator->sort('users_id', ["label"=>"Pegawai"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', ["label"=>"Dibuat"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('month', ["label"=>"Bulan Gaji"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payrolls as $index=>$payroll): ?>
            <tr>
                <td><?= $this->Html->link("#".($index + 1), ['action' => 'view', $payroll->id]) ?></td>
                <td><?= $payroll->has('user') ? $this->Html->link($payroll->user->name, ['controller' => 'Users', 'action' => 'view', $payroll->user->id]) : '' ?></td>
                <td><?= h($payroll->created) ?></td>
                <td><?= date("F", mktime(0, 0, 0, $payroll->month, 10))." - ".$payroll->year ?></td>
                <td><?= $payroll->status_text ?></td>
                <td><?= $this->Html->link(__('Cetak'), ['action' => 'view', $payroll->id, true],
                ['target' => '_blank']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator large-10">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
