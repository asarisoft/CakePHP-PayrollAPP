<?php
    $cakeDescription = 'BMT Amanah Payroll Application';?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('print.css', ["media"=>"print"]) ?>
</head>
<body>
    <div class="large-7 columns content">
        <h4 class="black"> SLIP GAJI </h4>
        <table>
            <tr>
                <td>Nama:</td>
                <td colspan="3">Imam As'ari</td>
            </tr>
            <tr>
                <td>No Gaji :</td>
                <td>#1</td>
                <td>Bulan :</td>
                <td>Januari, 2016</td>
            </tr>
            <tr>
                <td>Jabatan :</td>
                <td>Manager</td>
                <td>TMT:</td>
                <td>20 Agustus 2000</td>
            </tr>
        </table>

        <!-- Keterangan -->
        <table>
            <tbody>
                <tr>
                    <th class="nomer">Nomer</th>
                    <th class="name" colspan="2">Keterangan</th>
                    <th class="value">Jumlah</th>
                <tr>
                    <td class="nomer">1</td>
                    <td class="name">Gaji Pokok</td>
                    <td>Rp. </td>
                    <td class="value"><?= $this->Number->format($payroll->basic_salary) ?></td>
                </tr>
                <tr>
                    <td class="nomer">2</td>
                    <td class="name">Tunjangan Jabatan</td>
                    <td>Rp. </td>
                    <td class="value"><?= $this->Number->format($payroll->position_allowance) ?></td>
                </tr>
                <tr>
                    <td class="nomer">3</td>
                    <td class="name">Tunjangan Komunikasi</td>
                    <td>Rp. </td>
                    <td class="value"><?= $this->Number->format($payroll->communication_allowance) ?></td>
                </tr>
                <tr>
                    <td class="nomer">4</td>
                    <td class="name">Tunjangan Beras</td>
                    <td>Rp. </td>
                    <td class="value"><?= $this->Number->format($payroll->rice_allowance) ?></td>
                </tr>
                <tr>
                    <td class="nomer">5</td>
                    <td class="name">Tunjangan Pendidikan</td>
                    <td>Rp. </td>
                    <td class="value"><?= $this->Number->format($payroll->education_allowance) ?></td>
                </tr>
                <tr>
                    <td class="nomer">6</td>
                    <td class="name">Tunjangan Transportasi</td>
                    <td>Rp. </td>
                    <td class="value"><?= $this->Number->format($payroll->transport_allowance) ?></td>
                </tr>
                <?php
                    $i = 6;
                    foreach ($other_allowances as $other_allowance) { ?>
                <tr>
                    <td class="nomer"><?= $i+1 ?></td>
                    <td class="name"><?= __($other_allowance->name) ?></td>
                    <td>Rp. </td>
                    <td class="value"><?= $this->Number->format($other_allowance->value) ?></td>
                </tr>
                <?php $i++; }?>
                <tr>
                    <td class="nomer"><?= $i+1 ?></td>
                    <td class="name">Bagi Hasil Sebagai Kolektor</td>
                    <td>Rp. </td>
                    <td class="value"><?= $this->Number->format($payroll->collector_share_profit) ?></td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th colspan="2"><?= __("Total Gaji") ?></th>
                    <th>Rp. </th>
                    <th class="value"><span><?= $this->Number->format($total) ?></span></th>
                </tr>
            </tbody>
        </table>

    <pre><span>
        Salem, <?= $this->Time->format($payroll->created, 'd MMMM Y'); ?>

        Bendahara,


        Abdulloh Kamaludin
    </span></pre>

    </div>
</body>
</html>
