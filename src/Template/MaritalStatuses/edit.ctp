<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $maritalstatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $maritalstatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Marital Status'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="maritalstatuses form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($maritalstatus) ?>
    <fieldset>
        <legend><?= __('Edit Marital Status') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('rice_allowance');
            echo $this->Form->input('after_years');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
