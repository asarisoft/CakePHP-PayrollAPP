<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $allowance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $allowance->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Allowances'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="allowances form large-10 medium-8 columns content">
    <?= $this->Form->create($allowance) ?>
    <fieldset>
        <legend><?= __('Edit Allowance') ?></legend>
        <?php
            echo $this->Form->input('users_id', ['options' => $users]);
            echo $this->Form->input('name');
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
