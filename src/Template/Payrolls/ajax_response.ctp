<?php

echo $this->Form->input('Payrolls.basic_salary', ['default'=>$basic_salary]);
echo $this->Form->input('Payrolls.position_allowance', ['default'=>$position_allowance]);
echo $this->Form->input('Payrolls.communication_allowance', ['default'=>$communication_allowance]);
echo $this->Form->input('Payrolls.rice_allowance', ['default'=>$rice_allowance]);
echo $this->Form->input('Payrolls.education_allowance',  ['default'=>$education_allowance]);
echo $this->Form->input('Payrolls.transport_allowance',  ['default'=>$transport_allowance]);

// echo $other_allowances;
$i = 0;
foreach ($other_allowances as $other_allowance) {
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.payrolls_id',  ['default'=>$other_allowance->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.name',  ['default'=>$other_allowance->name, 'type'=>'hidden']);
    echo $this->Form->input('Payrolls.salaryallowances.'.$i.'.value',  ['default'=>$other_allowance->value, 'label'=>$other_allowance->name]);
    $i++;
}

?>
