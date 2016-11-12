<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $transport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Hapus'), ['action' => 'delete', $transport->id], ['confirm' => __('Yakin untuk hapus data # {0}?', $transport->id)]) ?> </li>
        <li><?= $this->Html->link(__('Daftar Transportasi'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="transports view large-10 medium-8 columns content">
    <h3><?= h('Transportasi') ?></h3>
    <table class="vertical-table view-detail large-4">
        <tr>
            <th scope="row"><?= __('Kota Asal') ?></th>
            <td class="colon">:</td>
            <td><?= h($transport->origin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kota Tujuan') ?></th>
            <td class="colon">:</td>
            <td><?= h($transport->destination) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tunjangan Transportasi') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($transport->transport_allowance) ?></td>
        </tr>
    </table>
</div>
