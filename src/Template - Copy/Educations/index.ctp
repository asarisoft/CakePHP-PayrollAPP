<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Tambah Data'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="educations index large-10 medium-8 columns content">
    <h3><?= __('Pendidikan') ?></h3>
    <table cellpadding="0" cellspacing="0", class="large-6">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name', ["label"=>"Pendidikan"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort(
                    'education_allowance', ["label"=>"Tunjangan Pendidikan"]) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($educations as $education): ?>
            <tr>
                <td><?= $this->Html->link(h($education->name), ['action' => 'view', $education->id]) ?></td>
                <td><?= $this->Number->format($education->education_allowance) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
