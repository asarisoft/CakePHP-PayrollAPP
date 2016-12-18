<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $education->id],
                ['confirm' => __('Yakin untuk hapus data # {0}?', $education->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Daftar Pendidikan'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="educations form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($education) ?>
    <fieldset>
        <legend><?= __('Edit Pendidikan') ?></legend>
        <?php
            echo $this->Form->input('name', ["label"=>"Pendidikan"]);
            echo $this->Form->input('education_allowance', ["label"=>"Tunjangan Pendidikan"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>
