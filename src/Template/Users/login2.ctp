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

	<div class="users large-5 columns content centered large-centered">
		<?= $this->Flash->render('auth') ?>

		<div class="users form large-12 columns content">
			<?= $this->Form->create() ?>
			    <fieldset>
			        <legend><?= __('Please Login') ?></legend>
			        <?= $this->Form->input('username') ?>
			        <?= $this->Form->input('password') ?>
			    </fieldset>
			<?= $this->Form->button(__('Login')); ?>
			<?= $this->Form->end() ?>
		</div>

	</div>

</body>
</html>
