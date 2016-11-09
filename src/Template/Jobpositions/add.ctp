<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Job Position'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="payrolls form large-7 medium-8 columns content float-left float-left">
    <?= $this->Form->create($jobposition) ?>
    <fieldset>
        <legend><?= __('Add Jobposition') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('position_allowance');
            echo $this->Form->input('communication_allowance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

