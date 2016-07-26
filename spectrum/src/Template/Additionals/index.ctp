<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Additional'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="additionals index large-9 medium-8 columns content">
    <h3><?= __('Additionals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('game_id') ?></th>
                <th><?= $this->Paginator->sort('filename') ?></th>
                <th><?= $this->Paginator->sort('size') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('url') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($additionals as $additional): ?>
            <tr>
                <td><?= $this->Number->format($additional->id) ?></td>
                <td><?= $additional->has('game') ? $this->Html->link($additional->game->id, ['controller' => 'Games', 'action' => 'view', $additional->game->id]) : '' ?></td>
                <td><?= h($additional->filename) ?></td>
                <td><?= h($additional->size) ?></td>
                <td><?= h($additional->type) ?></td>
                <td><?= h($additional->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $additional->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $additional->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $additional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $additional->id)]) ?>
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
