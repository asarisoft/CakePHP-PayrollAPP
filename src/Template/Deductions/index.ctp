<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu : ') ?></li>
        <li><?= $this->Html->link(__('Tambah Data'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deductions index large-10 medium-8 columns content">
    <h3><?= __('Potongan Gaji') ?></h3>

    <?php
        echo $this->Form->create("Filter", ['url' => ['controller' => 'deductions', 'action' => 'index'], 'type' => 'get']);
    ?>
    <div class="payrolls form large-8 medium-4">
    <table>
        <tr>
            <td width="30%"><?php echo $this->Form->input('user_id', ['options' => $users, "label"=>""]); ?></td>
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

    <table cellpadding="0" cellspacing="0" class="large-8">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Nama Potongan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pagawai') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nominal') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deductions as $deduction): ?>
            <tr>
                <td> <?= $this->Html->link(h($deduction->name), ['action' => 'view', $deduction->id]) ?></td>
                <td><?= $deduction->has('user') ? $this->Html->link($deduction->user->name, ['controller' => 'Users', 'action' => 'view', $deduction->user->id]) : '' ?></td>
                <td><?= $this->Number->format($deduction->value) ?></td>
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
