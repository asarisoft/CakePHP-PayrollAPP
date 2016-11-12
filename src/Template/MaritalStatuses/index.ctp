<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Tambah Data'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maritalstatuses index large-10 medium-8 columns content">
    <h3><?= __('Status Perkawinan') ?></h3>
    <table cellpadding="0" cellspacing="0", class="large-8">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name', ["label"=>"Status"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort(
                    'rice_allowance', ["label"=>"Tunjangan Beras"]) ?></th>
                <th scope="col"><?= $this->Paginator->sort(
                    'after_years', ["label"=>"Diberikan Setelah (tahun)"]) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maritalstatuses as $maritalstatus): ?>
            <tr>
                <td><?= $this->Html->link(h($maritalstatus->name), 
                    ['action' => 'view', $maritalstatus->id]) ?></td>
                <td><?= $this->Number->format($maritalstatus->rice_allowance) ?></td>
                <td><?= $this->Number->format($maritalstatus->after_years) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
