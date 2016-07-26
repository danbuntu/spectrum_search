<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Budgetprice'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="budgetprices index large-9 medium-8 columns content">
    <h3><?= __('Budgetprices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('game_id') ?></th>
                <th><?= $this->Paginator->sort('amount') ?></th>
                <th><?= $this->Paginator->sort('currency') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($budgetprices as $budgetprice): ?>
            <tr>
                <td><?= $this->Number->format($budgetprice->id) ?></td>
                <td><?= $budgetprice->has('game') ? $this->Html->link($budgetprice->game->id, ['controller' => 'Games', 'action' => 'view', $budgetprice->game->id]) : '' ?></td>
                <td><?= $this->Number->format($budgetprice->amount) ?></td>
                <td><?= h($budgetprice->currency) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $budgetprice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $budgetprice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $budgetprice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $budgetprice->id)]) ?>
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
