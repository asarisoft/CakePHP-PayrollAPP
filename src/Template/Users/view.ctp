<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Non-Aktifkan'), ['action' => 'deactivate', $user->id], ['confirm' => __('Yakin untuk mengon-aktikfan # {0}?', $user->name)]) ?>
        <li><?= $this->Html->link(__('Daftar Pegawai'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="users view large-10 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table view-detail large-4">
        <tr>
            <th scope="row"><?= __('Transportasi') ?></th>
            <td class="colon">:</td>
            <td><?= $user->has('transport') ? $this->Html->link($user->transport->origin." - ".$user->transport->destination, ['controller' => 'Transports', 'action' => 'view', $user->transport->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jabatan') ?></th>
            <td class="colon">:</td>
            <td><?= $user->has('job_position') ? $this->Html->link($user->job_position->name, ['controller' => 'Jobpositions', 'action' => 'view', $user->job_position->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TMT') ?></th>
            <td class="colon">:</td>
            <td><?= h($user->tmt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Perkawinan') ?></th>
            <td class="colon">:</td>
            <td><?= $user->has('marital_status') ? $this->Html->link($user->marital_status->name, ['controller' => 'Maritalstatuses', 'action' => 'view', $user->marital_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pendidikan') ?></th>
            <td class="colon">:</td>
            <td><?= $user->has('education') ? $this->Html->link($user->education->name, ['controller' => 'Educations', 'action' => 'view', $user->education->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gaji Pokok') ?></th>
            <td class="colon">:</td>
            <td><?= $this->Number->format($user->basic_salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td class="colon">:</td>
            <td><?php if($user->is_active) { echo h("Active"); } else { echo h ("Non Active");} ?></td>
        </tr>
    </table>
</div>
