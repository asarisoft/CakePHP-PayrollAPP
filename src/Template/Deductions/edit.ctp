<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Daftar Potongan'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="deductions large-7 medium-8 columns content float-left">
    <?= $this->Form->create($deduction) ?>
    <fieldset>
        <legend><?= __('Edit Potongan') ?></legend>
        <?php
            echo $this->Form->input('users_id', ['options' => $users, 'label'=>"Pegawai"]);
            echo $this->Form->input('name', ["label"=>"Potongan"]);
            echo $this->Form->input('value', ["label"=>"Nominal"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
