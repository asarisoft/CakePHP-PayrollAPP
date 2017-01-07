<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li>.</li>
    </ul>
</nav>
<div class="users form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($user) ?>
        <fieldset>
        <legend><?= __('Ganti Passwored') ?></legend>
        <?php
            echo $this->Form->input('old_password',['type' => 'password' , 'label'=>'Password Lama', "required"=>"required"]);
            echo $this->Form->input('password1',['type'=>'password' ,'label'=>'Password Baru', "required"=>"required"]);
            echo $this->Form->input('password',['type' => 'password' , 'label'=>'Ulangi Password Baru', "required"=>"required"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>