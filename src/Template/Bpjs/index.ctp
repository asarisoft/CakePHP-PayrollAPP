<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New BPJS'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bpjs index large-10 medium-8 columns content">
    <h3><?= __('BPJS') ?></h3>
    <table cellpadding="0" cellspacing="0" class="large-10">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('class') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bpjs as $bpj): ?>
            <tr>
                <td><?= $this->Html->link(h($bpj->name), ['action' => 'view', $bpj->id]) ?></td>
                <td><?= $this->Number->format($bpj->class) ?></td>
                <td><?= $this->Number->format($bpj->value) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
