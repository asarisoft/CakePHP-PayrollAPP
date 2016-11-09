<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($user) ?>
        <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('tmt');
            echo $this->Form->input('transports_id', ['options' => $transports]);
            echo $this->Form->input('job_positions_id', ['options' => $jobPositions]);
            echo $this->Form->input('marital_statuses_id', ['options' => $maritalStatuses]);
            echo $this->Form->input('educations_id', ['options' => $educations]);
            echo $this->Form->input('basic_salary');
            echo $this->Form->input('is_active');
            echo $this->Form->input('is_admin', ["onclick"=>"set_form();"]);
            echo $this->Form->input('username');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
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
