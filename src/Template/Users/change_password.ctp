<div class="users form large-7 medium-8 columns content float-left">
    <?= $this->Form->create($user) ?>
        <fieldset>
        <legend><?= __('Change password') ?></legend>
        <?php
            echo $this->Form->input('old_password',['type' => 'password' , 'label'=>'Old password']);
            echo $this->Form->input('password1',['type'=>'password' ,'label'=>'Password']);
            echo $this->Form->input('password',['type' => 'password' , 'label'=>'Repeat password']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Simpan')) ?>
    <?= $this->Form->end() ?>
</div>