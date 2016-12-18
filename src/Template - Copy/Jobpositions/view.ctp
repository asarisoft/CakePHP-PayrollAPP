<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $jobposition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Hapus'), ['action' => 'delete', $jobposition->id], ['confirm' => __('Yakin untuk hapus data # {0}?', $jobposition->id)]) ?> </li>
        <li><?= $this->Html->link(__('Daftar Jabatan'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="jobpositions view large-4 medium-4 columns content float-left">
    <h3><?= h($jobposition->name) ?></h3>
    <table class="vertical-table view-detail">
        <tr>
            <th scope="row"><?= __('Tunjangan Jabatan') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($jobposition->position_allowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tunjangan Komunikasi') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($jobposition->communication_allowance) ?></td>
        </tr>
    </table>
</div>
