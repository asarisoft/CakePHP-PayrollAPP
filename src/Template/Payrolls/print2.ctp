<html lang="en">
    <head>
        <?php $cakeDescription = 'BMT Amanah Payroll Application';?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?= $this->Html->css('bootstrap.min.css') ?>
        <link rel="stylesheet" href="/bmt-penggajian/css/print.css"/>
    </head>
    <body>
        <div id="print" style="width: 700px; margin-left: auto; margin-right: auto; margin-top: 50px;">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                    <img class="img img-responsive" src="/bmt-penggajian/img/logo_koprasi.png" width="100%" style="margin-top: 5px; padding: 10px;"/>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                    <h1 style="font-size: 13pt; margin: 0px;">
                        KOPERASI SERBA USAHA
                    </h1>
                    <h1 style="font-size: 27pt; color: red; margin: 0px;">
                        "BMT Amanah"
                    </h1>
                    <p style="font-size: 10pt; margin: 0px;">
                        Badan Hukum No : 188.4/1762/BH/2008 Tgl. 19 November 2008<br/>
                        Alamat : Jl. Raya Cikandang, Desa Bentarsari Kec. Salem, Kab. Brebes 5227<br/>
                        Email: ksubmtamanah@yahoo.co.id Telp./Fax. (0283) 3342008
                    </p>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                    <img class="img img-responsive" src="/bmt-penggajian/img/bmt.png" width="100%" style="margin-top: 20px;"/>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 2px; padding-bottom: 2px; border-top: 1px solid #222222; border-bottom: 1px solid #222222;">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-lg-center text-md-center text-sm-center text-xs-center" style="font-size: 12pt; font-weight: bold; padding-top: 10px">
                        SLIP GAJI KARYAWAN
                    </p>
                    <p class="text-lg-right text-md-right text-sm-right text-xs-right" style="font-size: 12pt; padding-top: 10px">
                        Bulan : <?= $payroll->month ?> / 2016
                    </p>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <p style="font-size: 12pt;">
                                Nama<br/>
                                Jabatan/Status Kepegawian<br/>
                                No.  Rekening<br/>
                            </p>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <p style="font-size: 12pt;">
                                : <?= $payroll->user->name ?><br/>
                                : <?= $payroll->user->job_position->name ?><br/>
                                : <?= $payroll->user->no_rekening ?><br/>
                            </p>
                        </div>
                    </div>
                    <p style="font-size: 12pt;">
                        GAJI KOTOR :
                    </p>
                    <div class="row">
                        <div class="col-md-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <td width="30px">1. </td>
                                        <td width="290px">Gaji Pokok</td>
                                        <td>: Rp. </td>
                                        <td class="value" width="200px"><?= $this->Number->format($payroll->basic_salary) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="nomer">2. </td>
                                        <td class="name">Tunjangan Jabatan / Profesi</td>
                                        <td>: Rp. </td>
                                        <td class="value"><?= $this->Number->format($payroll->position_allowance) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="nomer">3.</td>
                                        <td class="name">Tunjangan Beras</td>
                                        <td>: Rp. </td>
                                        <td class="value"><?= $this->Number->format($payroll->rice_allowance) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="nomer">4.</td>
                                        <td class="name">Tunjangan Transportasi</td>
                                        <td>: Rp. </td>
                                        <td class="value"><?= $this->Number->format($payroll->transport_allowance) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="nomer">5.</td>
                                        <td class="name">Tunjangan Kompetensi</td>
                                        <td>: Rp. </td>
                                        <td class="value"><?= $this->Number->format($payroll->tunjangan_kompetensi) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="nomer">6.</td>
                                        <td class="name">Tunjangan Pendidikan</td>
                                        <td>: Rp. </td>
                                        <td class="value"><?= $this->Number->format($payroll->education_allowance) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="nomer">7.</td>
                                        <td class="name">Tunjangan Pulsa</td>
                                        <td>: Rp. </td>
                                        <td class="value"><?= $this->Number->format($payroll->communication_allowance) ?></td>
                                    </tr>
                                    <?php
                                        $i = 7;
                                        foreach ($other_allowances as $other_allowance) { ?>
                                    <tr>
                                        <td class="nomer"><?= $i+1 ?></td>
                                        <td class="name"><?= __($other_allowance->name) ?></td>
                                        <td>: Rp. </td>
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
                                        <th></th>
                                        <th><?= __("Jumlah") ?></th>
                                        <th>: Rp. </th>
                                        <th class="value"><span><?= $this->Number->format($total_salary) ?></span></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p></p>
                    <p style="font-size: 12pt;">
                        POTONGAN :
                    </p>
                    <div class="row">
                        <div class="col-md-12">
                            <table>
                                <tbody>
                                    <?php
                                        $i = 0;
                                        foreach ($salary_deductions as $salary_deduction) { ?>
                                    <tr>
                                        <td width="30px"><?= $i+1 ?></td>
                                        <td width="290px"><?= __($salary_deduction->name) ?></td>
                                        <td>: Rp. </td>
                                        <td width="200px" class="value"><?= $this->Number->format($salary_deduction->value) ?></td>
                                    </tr>
                                    <?php $i++; }?>
                                    <tr>
                                        <th></th>
                                        <th><?= __("Jumlah Potongan") ?></th>
                                        <th>: Rp. </th>
                                        <th class="value"><span><?= $this->Number->format($total_deduction) ?></span></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th><?= __("Gaji Diterima") ?></th>
                                        <th>: Rp. </th>
                                        <th class="value"><span><?= $this->Number->format($total) ?></span></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">                    
                    <div class="col-lg-4 col-xl-4 col-md-4 col-sm-4 col-xs-4 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                        <p style="font-size: 12pt;">
                            Mengetahui :<br/>
                            Pengurus KSU BMT Amanah<br/>
                            <br/><br/><br/><br/>
                            <span style="font-weight: bold;">
                            SITI WAISAH, S.Hut.,M.Pd.
                            </span>
                            Bendahara
                        </p>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-4 col-sm-4 col-xs-4 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                        <p style="font-size: 12pt;">
                            Juru Bayar<br/>
                            Adm. Keuangan<br/>
                            <br/><br/><br/><br/>
                            <span style="font-weight: bold;">
                            SITI ULIAH
                            </span><br/>
                            Kasir
                        </p>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-4 col-sm-4 col-xs-4 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                        <p style="font-size: 12pt;">
                            <br/>
                            Diterima Oleh <br/>
                            <br/><br/><br/><br/>
                            <span style="font-weight: bold;"><?= $payroll->user->name ?></span>
                            </span>
                        </p>
                    </div>
                    </div>
                </div>
                <p style="font-size: 10pt">
                    *) Sudah secara autodebet ke Nomor Rekening Tabungan a/n yang bersangkutan
                </p>
            </div>
        </div>
    </body>
</html>