<?php use Cake\Routing\Router; ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Payrolls'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="payrolls form large-9 medium-8 columns content">
    <?= $this->Form->create($payroll, ['id'=>'myform']) ?>
    <fieldset>
        <legend><?= __('Add Payroll') ?></legend>
        <?php
            echo $this->Form->input('Payrolls.users_id', ['options' => $users]);
            echo $this->Form->month('Payrolls.month', ['empty' => false]);
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
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

    <button id="generate_button" onclick="">Generate</button>

</div>


<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'); ?>
<script>
$(document).ready(function(){
    $('#generate_button').click(function(){
        console.log("clicked");

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
