<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Budgetprice'), ['action' => 'edit', $budgetprice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Budgetprice'), ['action' => 'delete', $budgetprice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $budgetprice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Budgetprices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Budgetprice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="budgetprices view large-9 medium-8 columns content">
    <h3><?= h($budgetprice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $budgetprice->has('game') ? $this->Html->link($budgetprice->game->id, ['controller' => 'Games', 'action' => 'view', $budgetprice->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Currency') ?></th>
            <td><?= h($budgetprice->currency) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($budgetprice->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Amount') ?></th>
            <td><?= $this->Number->format($budgetprice->amount) ?></td>
        </tr>
    </table>
</div>
