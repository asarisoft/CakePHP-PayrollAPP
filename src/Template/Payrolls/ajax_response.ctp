<?php

echo "<br/>";
echo "<p class='fake_label'>Gaji Pokok</p>";
echo "<div class='fake_input'>".$basic_salary."</div>";

echo "<p class='fake_label'>Tunjangan Jabatan</p>";
echo "<div class='fake_input'>".$position_allowance."</div>";

echo "<p class='fake_label'>Tunjangan Komunikasi</p>";
echo "<div class='fake_input'>".$communication_allowance."</div>";

echo "<p class='fake_label'>Tunjangan Beras</p>";
echo "<div class='fake_input'>".$rice_allowance."</div>";

echo "<p class='fake_label'>Tunjangan Pendidikan</p>";
echo "<div class='fake_input'>".$education_allowance."</div>";

echo "<p class='fake_label'>Tunjangan Transportasi</p>";
echo "<div class='fake_input'>".$transport_allowance."</div>";

$i = 60;
// Echo BPJS
foreach ($bpjs_allowances as $bpjs_allowance) {
	echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.payrolls_id',  ['default'=>$bpjs_allowance->id, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.name',  ['default'=>$bpjs_allowance->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.value',  ['default'=>$bpjs_allowance->value, 'label'=>$bpjs_allowance->name, 'readonly'=>'readonly']);
    $i++;
}

echo "<h3 class='title_form'>Tambahan</h3>";
$i = 0;
// echo $other_allowances;
foreach ($other_allowances as $other_allowance) {
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.payrolls_id',  ['default'=>$other_allowance->id, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.name',  ['default'=>$other_allowance->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.value',  ['default'=>$other_allowance->value, 'label'=>$other_allowance->name]);
    $i++;
}

echo "<h3 class='title_form'>Potongan</h3>";
$i = 0;
// echo $deductions;
foreach ($deductions as $deduction) {
    echo $this->Form->input('Payrolls.salarydeductions.'.$i.'.payrolls_id',  ['default'=>$deduction->id, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salarydeductions.'.$i.'.name',  ['default'=>$deduction->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salarydeductions.'.$i.'.value',  ['default'=>$deduction->value, 'label'=>$deduction->name]);
    $i++;
}

echo $this->Form->button(__('Simpan'));

?>
