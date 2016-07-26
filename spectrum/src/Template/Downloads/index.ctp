<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Download'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="downloads index large-9 medium-8 columns content">
    <h3><?= __('Downloads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('game_id') ?></th>
                <th><?= $this->Paginator->sort('filename') ?></th>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('size') ?></th>
                <th><?= $this->Paginator->sort('year') ?></th>
                <th><?= $this->Paginator->sort('origin') ?></th>
                <th><?= $this->Paginator->sort('dl') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('barcode') ?></th>
                <th><?= $this->Paginator->sort('url') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($downloads as $download): ?>
            <tr>
                <td><?= $this->Number->format($download->id) ?></td>
                <td><?= $download->has('game') ? $this->Html->link($download->game->id, ['controller' => 'Games', 'action' => 'view', $download->game->id]) : '' ?></td>
                <td><?= h($download->filename) ?></td>
                <td><?= h($download->code) ?></td>
                <td><?= $this->Number->format($download->size) ?></td>
                <td><?= $this->Number->format($download->year) ?></td>
                <td><?= h($download->origin) ?></td>
                <td><?= h($download->dl) ?></td>
                <td><?= h($download->type) ?></td>
                <td><?= h($download->barcode) ?></td>
                <td><?= h($download->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $download->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $download->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $download->id], ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]) ?>
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
