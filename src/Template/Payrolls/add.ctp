<?php use Cake\Routing\Router; ?>

<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Salary'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Reset Form'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="payrolls form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($payroll, ['id'=>'myform']) ?>
    <fieldset>
        <legend><?= __('Add Payroll') ?></legend>
        <?php
            echo $this->Form->input('Payrolls.users_id', ['options' => $users]);
            echo $this->Form->month('Payrolls.month', ['empty' => false]);
            if ($this->Form->isFieldError('month')) {
                echo $this->Form->error('month');
            }
            echo $this->Form->year('Payrolls.year', [
                'minYear' => date('Y') - 1,
                'maxYear' =>  date('Y') + 1,
                'orderYear' => 'asc',
                'empty'=>false,
            ]);
            echo $this->Form->input('Payrolls.collector_share_profit');
        ?>
        <div id="container"></div>
    </fieldset>
    <?= $this->Form->end() ?>
</div>


<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'); ?>
<script>
$(document).ready(function(){
    $('#payrolls-users-id').change(function() {
        $( '#container' ).html('');
        $.ajax({
            type: 'POST',
            data:  $('#myform').serialize(),
            url: '<?= Router::Url(['controller' => 'payrolls', 'action' => 'populate'], TRUE); ?>',
            cache: false,
            success: function(response) {
                $( '#container' ).html( response );
            }
        });
    });

});
</script>
