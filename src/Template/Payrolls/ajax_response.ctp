<?php

echo $this->Form->input('Payrolls.basic_salary', [
	'default'=>$basic_salary, 'readonly'=>'readonly', "label" => "Gaji Pokok"]);
echo $this->Form->input('Payrolls.position_allowance', [
	'default'=>$position_allowance, 'readonly'=>'readonly', "label" => "Tunjangan Jabatan"]);
echo $this->Form->input('Payrolls.communication_allowance', [
	'default'=>$communication_allowance, 'readonly'=>'readonly', "label" => "Tunjangan Komunikasi"]);
echo $this->Form->input('Payrolls.rice_allowance', [
	'default'=>$rice_allowance, 'readonly'=>'readonly', "label" => "Tunjangan Beras"]);
echo $this->Form->input('Payrolls.education_allowance',  [
	'default'=>$education_allowance, 'readonly'=>'readonly', "label" => "Tunjangan Pendidikan"]);
echo $this->Form->input('Payrolls.transport_allowance',  [
	'default'=>$transport_allowance, 'readonly'=>'readonly', "label" => "Tunjangan Transportasi"]);



$i = 0;
// Echo BPJS
foreach ($bpjs_allowances as $bpjs_allowance) {
	echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.payrolls_id',  ['default'=>$bpjs_allowance->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.name',  ['default'=>$bpjs_allowance->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.value',  ['default'=>$bpjs_allowance->value, 'label'=>$bpjs_allowance->name, 'readonly'=>'readonly']);
    $i++;
}

// echo $other_allowances;
foreach ($other_allowances as $other_allowance) {
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.payrolls_id',  ['default'=>$other_allowance->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.name',  ['default'=>$other_allowance->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.value',  ['default'=>$other_allowance->value, 'label'=>$other_allowance->name, 'readonly'=>'readonly']);
    $i++;
}


// echo $deductions;
foreach ($deductions as $deduction) {
    echo $this->Form->input('Payrolls.salarydeductions.'.$i.'.payrolls_id',  ['default'=>$deduction->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salarydeductions.'.$i.'.name',  ['default'=>$deduction->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salarydeductions.'.$i.'.value',  ['default'=>$deduction->value, 'label'=>$deduction->name, 'readonly'=>'readonly']);
    $i++;
}

echo $this->Form->button(__('Simpan'));

?>
