<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bpj->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bpj->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bpjs form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($bpj) ?>
    <fieldset>
        <legend><?= __('Edit Bpj') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('class');
            echo $this->Form->input('value');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
