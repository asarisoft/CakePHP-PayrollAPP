<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $bpj->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bpj->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bpj->id)]) ?> </li>
        <li><?= $this->Html->link(__('List'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="bpjs view large-10 medium-8 columns content">
    <h3><?= h($bpj->name) ?></h3>
    <table class="vertical-table large-5">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bpj->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bpj->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Class') ?></th>
            <td><?= $this->Number->format($bpj->class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($bpj->value) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($bpj->users)): ?>
        <table cellpadding="0" cellspacing="0" class="large-5">
            <tr>
                <th scope="col"><?= __('Name') ?></th>
            </tr>
            <?php foreach ($bpj->users as $index => $users): ?>
            <tr>
                <td><?= $this->Html->link(h(sprintf("%s.  %s", $index+1, $users->name)), ['controller' => 'Users', 'action' => 'view', 
                    $users->id])?></td>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
