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
    <?= $this->fetch('sidebar') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-2 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <li><?= $this->Html->link('Job Position', '/job-positions'); ?></li>
                <li><?= $this->Html->link('Marital Status', '/marital-statuses'); ?></li>
                <li><?= $this->Html->link('Education', '/educations'); ?></li>
                <li><?= $this->Html->link('Transport', '/transports'); ?></li>
                <li><?= $this->Html->link('User', '/users'); ?></li>
                <li><?= $this->Html->link('Other Allowance', '/allowances'); ?></li>
                <li><?= $this->Html->link('Payroll', '/payrolls'); ?></li>
                <?php if($loggedIn) {
                    echo "<li>".$this->Html->link('Log Out', '/users/logout', ['confirm' => __('Are you sure you want to Logout?')])."</li>";
                    // echo "lalal";
                }?>
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
