<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Form->postLink(
                __('Hapus'),
                ['action' => 'delete', $bpj->id],
                ['confirm' => __('Yakin untuk menghapus data # {0}?', $bpj->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Daftar BPJS'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bpjs form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($bpj) ?>
    <fieldset>
        <legend><?= __('Edit BPJS') ?></legend>
        <?php
            echo $this->Form->input('name', ["label"=>"Nama"]);
            echo $this->Form->input('class', ["label"=>"Kelas"]);
            echo $this->Form->input('value', ["label"=>"Nominal"]);
            echo $this->Form->input('users._ids', ['options' => $users, "label"=>"Pegawai"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>
