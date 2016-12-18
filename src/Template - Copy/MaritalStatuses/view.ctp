<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $maritalstatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Hapus'), ['action' => 'delete', $maritalstatus->id], ['confirm' => __('Yakin untuk hapus data # {0}?', $maritalstatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('Daftar Status'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="maritalstatuses view large-4 medium-4 columns content float-left">
    <h3><?= h($maritalstatus->name) ?></h3>
    <table class="vertical-table viewd-etail">
        <tr>
            <th scope="row"><?= __('Tunjangan Beras') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($maritalstatus->rice_allowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diberikan Setelah (tahun)') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($maritalstatus->after_years) ?></td>
        </tr>
    </table>
</div>
