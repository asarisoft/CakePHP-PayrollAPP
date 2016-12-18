<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Tambah Data'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="jobpositions index large-10 medium-8 columns content">
    <h3><?= __($title) ?></h3>
    <table cellpadding="0" cellspacing="0" class='large-8'>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name', ['label'=>"Jabatan"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort(
                    'position_allowance', ['label'=>"Tunjangan Jabatan"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort(
                    'communication_allowance', ['label'=>"Tunjangan Komunikasi"]) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobpositions as $jobposition): ?>
            <tr>
                <td><?= $this->Html->link(__(h($jobposition->name)), 
                    ['action' => 'view', $jobposition->id]) ?></td>
                <td><?= $this->Number->format($jobposition->position_allowance) ?></td>
                <td><?= $this->Number->format($jobposition->communication_allowance) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
