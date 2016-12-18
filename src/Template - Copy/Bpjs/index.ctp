<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Tambah Data'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bpjs index large-10 medium-8 columns content">
    <h3><?= __('BPJS') ?></h3>
    <table cellpadding="0" cellspacing="0" class="large-8">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name', ["label"=>"Nama"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('class', ["label"=>"Nama Kelas"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('value', ["label"=>"Nominal"]) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bpjs as $bpj): ?>
            <tr>
                <td><?= $this->Html->link(h($bpj->name), ['action' => 'view', $bpj->id]) ?></td>
                <td><?= $this->Number->format($bpj->class) ?></td>
                <td><?= $this->Number->format($bpj->value) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
