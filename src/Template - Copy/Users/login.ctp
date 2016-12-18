<?php $cakeDescription = 'BMT Amanah Payroll Application'; ?>
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
    <?= $this->Html->css('login.css') ?>
</head>
<body>

<div class="login-page">
    <?= $this->Flash->render('auth') ?>
    <div class="form">
        <form class="login-form", action="bmtamanah/users/login", method="post">
            <input type="text" placeholder="username"/>
            <input type="password" placeholder="password"/>
            <button type="submit">Login</button>
        </form>
    </div>
</div>

</body>
</html>
