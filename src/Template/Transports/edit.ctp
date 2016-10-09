<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transport->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Transports'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="transports form large-9 medium-8 columns content">
    <?= $this->Form->create($transport) ?>
    <fieldset>
        <legend><?= __('Edit Transport') ?></legend>
        <?php
            echo $this->Form->input('origin');
            echo $this->Form->input('destination');
            echo $this->Form->input('transport_allowance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
