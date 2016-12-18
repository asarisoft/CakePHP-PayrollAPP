<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $allowance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $allowance->id], ['confirm' => __('Yakin untuk menghapus data # {0}?', $allowance->id)]) ?> </li>
        <li><?= $this->Html->link(__('Daftar Tunjangan'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="allowances view large-10 medium-8 columns content">
    <h3><?= h($allowance->name) ?></h3>
    <table class="vertical-table view-detail large-4">
        <tr>
            <th scope="row"><?= __('Pegawai') ?></th>
            <td class="colon">:</td>
            <td><?= $allowance->has('user') ? $this->Html->link($allowance->user->name, ['controller' => 'Users', 'action' => 'view', $allowance->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nominal') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($allowance->value) ?></td>
        </tr>
    </table>
</div>
