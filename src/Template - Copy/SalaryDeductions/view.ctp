<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Menu :') ?></li>
		<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $salaryDeduction->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salaryDeduction->id], ['confirm' => __('Yakin untuk menghapus data # {0}?', $salaryDeduction->id)]) ?> </li>
		<li><?= $this->Html->link(__('Daftar Potongan'), ['action' => 'index']) ?> </li>
	</ul>
</nav>
<div class="deductions large-4 medium-4 columns content float-left">
	<h3><?= h($salaryDeduction->name) ?></h3>
	<table class="vertical-table">
		<tr>
			<th scope="row"><?= __('Pegawai') ?></th>
			<td class="colon">:</td>
			<td><?= $salaryDeduction->has('user') ? $this->Html->link($salaryDeduction->user->name, ['controller' => 'Users', 'action' => 'view', $salaryDeduction->user->id]) : '' ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Nominal') ?></th>
			<td class="colon">:</td>
			<td><?= $this->Number->format($salaryDeduction->value) ?></td>
		</tr>
	</table>
</div>
