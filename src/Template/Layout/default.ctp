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

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <li><?= $this->Html->link('Job Positions', '/jobpositions'); ?></li>
                <li><?= $this->Html->link('Marital Statuses', '/maritalstatuses'); ?></li>
                <li><?= $this->Html->link('Educations', '/educations'); ?></li>
                <li><?= $this->Html->link('Tranpsorts', '/transports'); ?></li>
                <li><?= $this->Html->link('Users', '/users'); ?></li>
                <li><?= $this->Html->link('Other Allowances', '/allowances'); ?></li>
                <li><?= $this->Html->link('Payrolls', '/payrolls'); ?></li>
                <li><?= $this->Html->link('Log out', '/users/logout'); ?></li>
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
