<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $bpj->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Hapus'), ['action' => 'delete', $bpj->id], ['confirm' => __(
            'Yakin untuk menghapus data # {0}?', $bpj->id)]) ?> </li>
        <li><?= $this->Html->link(__('Daftar BPJS'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="bpjs view large-10 medium-8 columns content">
    <h3><?= h($bpj->name) ?></h3>
    <table class="vertical-table large-5">
        <tr>
            <th scope="row"><?= __('Kelas') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($bpj->class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nominal') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($bpj->value) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Daftar Pegawai') ?></h4>
        <?php if (!empty($bpj->users)): ?>
        <table cellpadding="0" cellspacing="0" class="large-5">
            <tr>
                <th scope="col"><?= __('Name') ?></th>
            </tr>
            <?php foreach ($bpj->users as $index => $users): ?>
            <tr>
                <td><?= $this->Html->link(h(sprintf("%s.  %s", $index+1, $users->name)), ['controller' => 'Users', 'action' => 'view', 
                    $users->id])?></td>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
