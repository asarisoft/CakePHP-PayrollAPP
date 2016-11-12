<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $education->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $education->id], ['confirm' => __('Yakin untuk hapus data # {0}?', $education->id)]) ?> </li>
        <li><?= $this->Html->link(__('Daftar Pendidikan'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="educations view large-10 medium-8 columns content">
    <h3><?= h($education->name) ?></h3>
    <table class="vertical-table view-detail large-4">
        <tr>
            <th scope="row"><?= __('Tunjangan Pendidikan') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($education->education_allowance) ?></td>
        </tr>
    </table>
</div>
