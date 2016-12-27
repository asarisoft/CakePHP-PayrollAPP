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
    <?= $this->Html->css('bootstrap/bootstrap.min.css') ?>
    <?= $this->Html->css('print.css') ?>

</head>
<body>
    <div class="page-wrap">
        <div class="header">
            <div id="left"><?php echo $this->Html->image('logo-koperasi.png', ["class"=>"logo-koperasi"]); ?></div>
            <div class="middle">
                    <p>KOPERASI SERBA USAHA</p>
                    <p class="bmt-title">"BMT Amanah"</p>
                    <p class="address">Badan Hukum No : 188.4/1762/BH/2008 Tgl. 19 November 2008</p>
                    <p class="address">Alamat : Jl. Raya Cikandang, Desa Bentarsari Kec. Salem, Kab. Brebes 52275</p>
                    <p class="address">Email: ksubmtamanah@yahoo.co.id Telp./Fax. (0283) 3342008</p>
            </div>
            <div class="right"><?php echo $this->Html->image('logo-bmt.png', ["class"=>"logo-bmt"]); ?></div>
        </div>
        <div class="clearfix"></div>




    </div>




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
