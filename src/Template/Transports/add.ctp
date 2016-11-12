<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Daftar Transportasi'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="transports form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($transport) ?>
    <fieldset>
        <legend><?= __('Add Transport') ?></legend>
        <?php
            echo $this->Form->input('origin', ["label" => "Kota Asal"]);
            echo $this->Form->input('destination', ["label" => "Kota Tujuan"]);
            echo $this->Form->input('transport_allowance', ["label" => "Tunjangan Transportasi"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>
