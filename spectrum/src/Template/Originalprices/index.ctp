<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Originalprice'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="originalprices index large-9 medium-8 columns content">
    <h3><?= __('Originalprices') ?></h3>
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
            <?php foreach ($originalprices as $originalprice): ?>
            <tr>
                <td><?= $this->Number->format($originalprice->id) ?></td>
                <td><?= $originalprice->has('game') ? $this->Html->link($originalprice->game->id, ['controller' => 'Games', 'action' => 'view', $originalprice->game->id]) : '' ?></td>
                <td><?= h($originalprice->amount) ?></td>
                <td><?= h($originalprice->currency) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $originalprice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $originalprice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $originalprice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $originalprice->id)]) ?>
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
