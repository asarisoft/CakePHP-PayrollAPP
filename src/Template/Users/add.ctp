<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Daftar Pegawai'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($user) ?>
        <fieldset>
        <legend><?= __('Tambah Pegawai') ?></legend>
        <?php
            echo $this->Form->input('name', ["label"=>"Nama"]);
            echo $this->Form->input('tmt', ["label"=>"TMT"]);
            echo $this->Form->input('transports_id', 
                                    ['options' => $transports, "label"=>"Transportasi"]);
            echo $this->Form->input('job_positions_id', 
                                    ['options' => $jobPositions, "label"=>"Jabatan"]);
            echo $this->Form->input('marital_statuses_id', 
                                    ['options' => $maritalStatuses, "label"=>"Status Perkawinan"]);
            echo $this->Form->input('educations_id', 
                                    ['options' => $educations, "label"=>"Pendidikan"]);
            echo $this->Form->input('basic_salary', ["label"=>"Gaji Pokok"]);
            echo $this->Form->input('is_active', ["label"=>"Aktif"]);
            echo $this->Form->input('is_admin', ["onclick"=>"set_form();", "label"=>"Administrator"]);
            echo $this->Form->input('username', ["label"=>"Username"]);
            echo $this->Form->input('password', ["label"=>"Password"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>

<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'); ?>
<script>
    $(window).ready(function () {
      set_form();

      $(document).on('change', '#is-admin', function(e){
          set_form();
      });

      function set_form() {
          if (document.getElementById('is-admin').checked) {
              $('div.password').show();
          } else {
              $('div.password').hide();
          }
      };
    });
</script>
