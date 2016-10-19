<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payroll'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payrolls index large-9 medium-8 columns content">
    <div class="filters">
    <h3>Filters</h3>
    <?php
    // The base url is the url where we'll pass the filter parameters
    $base_url = array('controller' => 'movies', 'action' => 'index');
    echo $this->Form->create("Filter",array('url' => $base_url, 'class' => 'filter'));
    // add a select input for each filter. It's a good idea to add a empty value and set
    // the default option to that.
    echo $this->Form->input("genre_id", array('label' => 'Genre', 'options' => $genres, 'empty' => '-- All genres --', 'default' => ''));
    echo $this->Form->input("director_id", array('label' => 'Director', 'options' => $directors, 'empty' => '-- All directors --', 'default' => ''));
    // Add a basic search
    echo $this->Form->input("search", array('label' => 'Search', 'placeholder' => "Search..."));

    echo $this->Form->submit("Valider");

    // To reset all the filters we only need to redirect to the base_url
    echo "<div class='submit actions'>";
    echo $this->Html->link("Reset",$base_url);
    echo "</div>";
    echo $this->Form->end();
    ?>
    </div>

    <h3><?= __('Payrolls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payrolls as $payroll): ?>
            <tr>
                <td><?= $this->Number->format($payroll->id) ?></td>
                <td><?= $payroll->has('user') ? $this->Html->link($payroll->user->name, ['controller' => 'Users', 'action' => 'view', $payroll->user->id]) : '' ?></td>
                <td><?= h($payroll->created) ?></td>
                <td><?= $this->Number->format($payroll->month) ?></td>
                <td><?= $payroll->year ?></td>
                <td><?= $payroll->status_text ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $payroll->id]) ?>
                    <?= $this->Form->postLink(__('Cancel'), ['action' => 'cancel', $payroll->id], ['confirm' => __('Are you sure you want to cancel # {0}?', $payroll->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
