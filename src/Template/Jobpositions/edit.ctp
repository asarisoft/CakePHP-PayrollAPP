<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jobposition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jobposition->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jobpositions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jobpositions form large-9 medium-8 columns content">
    <?= $this->Form->create($jobposition) ?>
    <fieldset>
        <legend><?= __('Edit Jobposition') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('position_allowance');
            echo $this->Form->input('communication_allowance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
