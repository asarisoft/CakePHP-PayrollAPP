<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Tambah Data'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transports index large-10 medium-8 columns content">
    <h3><?= __('Transportasi') ?></h3>
    <table cellpadding="0" cellspacing="0", class="large-8">
        <thead>
            <tr>
                <th scope="col"><a href="">Nomor</a></th>
                <th scope="col"><?= $this->Paginator->sort('origin', ["label" => "Kota Asal"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('destination', ["label" => "Kota Tujuan"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort(
                    'transport_allowance', ["label" => "Tunjangan Transportasi"]) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transports as $index => $transport): ?>
            <tr>
                <td><?= $this->Html->link(h("#".$index + 1), ['action' => 'view', $transport->id]) ?></td>
                <td><?= h($transport->origin) ?></td>
                <td><?= h($transport->destination) ?></td>
                <td><?= $this->Number->format($transport->transport_allowance) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
