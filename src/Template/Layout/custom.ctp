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
</head>
<body>
    <?= $this->fetch('content') ?>
</body>