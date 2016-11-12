<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Form->postLink(
                __('Hapus'),
                ['action' => 'delete', $maritalstatus->id],
                ['confirm' => __('Yakin untuk hapus data # {0}?', $maritalstatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Daftar Status Perkawinan'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="maritalstatuses form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($maritalstatus) ?>
    <fieldset>
        <legend><?= __('Edit Status Perkawinan') ?></legend>
        <?php
            echo $this->Form->input('name', ["label"=>"Status"]);
            echo $this->Form->input('rice_allowance', ["label"=>"Tunjangan Beras"]);
            echo $this->Form->input('after_years', ["label"=>"Diberikan Setelah (tahun)"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>
