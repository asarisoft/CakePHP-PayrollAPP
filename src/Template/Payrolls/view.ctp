<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu :') ?></li>
        <?php if ($payroll->status == 0) { ?>
            <li><?= $this->Form->postLink(__('Batalkan'), ['action' => 'cancel', $payroll->id], 
                ['confirm' => __('Yakin Untuk Membatalkan Gaji # {0}?', $payroll->id)]) ?>
            <li><?= $this->Html->link(__('Cetak'), ['action' => 'view', $payroll->id, true],
                ['target' => '_blank']) ?></li>
        <?php } ?>
        <li><?= $this->Html->link(__('Daftar Gaji'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="payrolls view large-10 medium-8 columns content">
    <h3><?= h($payroll->user->name 
        ." (".date("F", mktime(0, 0, 0, $payroll->month, 10))." "
        .$payroll->year.")") ?></h3>
    
    <table class="vertical-table view-detail large-5">
        <tr>
            <th scope="row"><?= __('Dibuat Tgl.') ?></th>
            <td class="colon">:</td>
            <td><?= h($payroll->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td class="colon">:</td>
            <td><?= h($payroll->status_text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gaji Pokok') ?></th>
            <td class="colon">:</td>
            <td><span><?= $this->Number->format($payroll->basic_salary) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tunjangan Jabatan') ?></th>
            <td class="colon">:</td>
            <td><span><?= $this->Number->format($payroll->position_allowance) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tunjangan Komunikasi') ?></th>
            <td class="colon">:</td>
            <td><span><?= $this->Number->format($payroll->communication_allowance) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tunjangan Beras') ?></th>
            <td class="colon">:</td>
            <td><span><?= $this->Number->format($payroll->rice_allowance) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tunjangan Pendidikan') ?></th>
            <td class="colon">:</td>
            <td><span><?= $this->Number->format($payroll->education_allowance) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tunjangan Transportasi') ?></th>
            <td class="colon">:</td>
            <td><span><?= $this->Number->format($payroll->transport_allowance) ?></span></td>
        </tr>
        <?php foreach ($other_allowances as $other_allowance) { ?>
        <tr>
            <th scope="row"><?= __($other_allowance->name) ?></th>
            <td class="colon">:</td>
            <td><span><?= $this->Number->format($other_allowance->value) ?></span></td>
        </tr>
        <?php }?>

        <tr>
            <th scope="row" colspan="3">Potongan</th>
        </tr>

        <?php foreach ($salary_deductions as $salary_deduction) { ?>
        <tr class="deductions">
            <th scope="row"><?= __($salary_deduction->name) ?></th>
            <td class="colon">:</td>
            <td><span><?= $this->Number->format($salary_deduction->value) ?></span></td>
        </tr>
        <?php }?>

        <tr>
            <th scope="row"><?= __("Total Gaji") ?></th>
            <td class="colon">:</td>
            <td><span><strong><?= $this->Number->format($total) ?></strong></span></td>
        </tr>
    </table>
</div>
