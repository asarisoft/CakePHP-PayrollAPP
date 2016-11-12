<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Daftar Tunjangan'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="allowances form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($allowance) ?>
    <fieldset>
        <legend><?= __('Add Allowance') ?></legend>
        <?php
            echo $this->Form->input('users_id', ['options' => $users, "label"=>"Pegawai"]);
            echo $this->Form->input('name', ["label"=>"Tunjangan"]);
            echo $this->Form->input('value', ["label"=>"Nominal"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>
