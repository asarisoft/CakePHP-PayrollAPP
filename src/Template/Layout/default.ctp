<?php
$cakeDescription = 'BMT Amanah Payroll Application';
?>
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
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-2 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $title ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <?php if ($username == 'admin') { ?>
                    <li><?= $this->Html->link('Jabatan', '/job-positions'); ?></li>
                    <li><?= $this->Html->link('Status', '/marital-statuses'); ?></li>
                    <li><?= $this->Html->link('Pendidikan', '/educations'); ?></li>
                    <li><?= $this->Html->link('Transportasi', '/transports'); ?></li>
                    <li><?= $this->Html->link('Pegawai', '/users'); ?></li>
                    <li><?= $this->Html->link('BPJS', '/bpjs'); ?></li>
                <?php } ?>
                <li><?= $this->Html->link('Tambahan', '/allowances'); ?></li>
                <li><?= $this->Html->link('Potongan', '/deductions'); ?></li>
                <li><?= $this->Html->link('Daftar Gaji', '/payrolls'); ?></li>
                <li><?= $this->Html->link('Keluar', '/users/logout', ['confirm' => __('Yakin untuk keluar aplikasi?')]) ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
