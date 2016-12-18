<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Daftar Jabatan'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="payrolls form large-7 medium-8 columns content float-left float-left">
    <?= $this->Form->create($jobposition) ?>
    <fieldset>
        <legend><?= __('Tambah Jabatan') ?></legend>
        <?php
            echo $this->Form->input('name', ["label"=>"Jabatan"]);
            echo $this->Form->input('position_allowance', ["label"=>"Tunjangan Jabatan"]);
            echo $this->Form->input('communication_allowance', ["label"=>"Tunjangan Komunikasi"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>

