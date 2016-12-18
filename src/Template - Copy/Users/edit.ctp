<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Daftar Pegawai'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit Pegawai') ?></legend>
        <?php
            echo $this->Form->input('name', ["label"=>"Nama"]);
            echo $this->Form->input('tmt', ["label"=>"TMT"]);
            echo $this->Form->input('transports_id', 
                                    ['options' => $transports, "label"=>"Transportasi"]);
            echo $this->Form->input('job_positions_id', 
                                    ['options' => $jobPositions, "label"=>"Jabatan"]);
            echo $this->Form->input('marital_statuses_id', 
                                    ['options' => $maritalStatuses, "label"=>"Status"]);
            echo $this->Form->input('educations_id', 
                                    ['options' => $educations, "label"=>"Pendidikan"]);
            echo $this->Form->input('no_rekening', ["label"=>"Nomer Rekening", "type"=>"number"]);
            echo $this->Form->input('basic_salary', ["label"=>"Gaji Pokok"]);
            echo $this->Form->input('tunjangan_kompetensi', ["label"=>"Tunjangan Kompetensi", "default"=>0]);
            echo $this->Form->input('is_active', ["label"=>"Aktif"]);
            echo $this->Form->input(
                'privileges',
                ['options' => $privileges, 'default' => '3', 'label'=>'Hak Akses']
            );
            echo $this->Form->input('username', ["label"=>"Username"]);
            echo $this->Form->input('password', ["label"=>"Password"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>
