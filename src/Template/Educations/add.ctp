<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Education'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="educations form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($education) ?>
    <fieldset>
        <legend><?= __('Add Education') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('education_allowance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
