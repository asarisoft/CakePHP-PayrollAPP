<?= $this->Html->css('style.css', ['block' => true]); ?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Menu :') ?></li>
		<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $deduction->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deduction->id], ['confirm' => __('Yakin untuk menghapus data # {0}?', $deduction->id)]) ?> </li>
		<li><?= $this->Html->link(__('Daftar Potongan'), ['action' => 'index']) ?> </li>
	</ul>
</nav>
<div class="deductions large-4 medium-4 columns content float-left">
	<h3><?= h($deduction->name) ?></h3>
	<table class="vertical-table">
		<tr>
			<th scope="row"><?= __('Pegawai') ?></th>
			<td class="colon">:</td>
			<td><?= $deduction->has('user') ? $this->Html->link($deduction->user->name, ['controller' => 'Users', 'action' => 'view', $deduction->user->id]) : '' ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Nominal') ?></th>
			<td class="colon">:</td>
			<td><?= $this->Number->format($deduction->value) ?></td>
		</tr>
	</table>
</div>
