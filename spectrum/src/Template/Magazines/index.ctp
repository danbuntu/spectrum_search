<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Magazine'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="magazines index large-9 medium-8 columns content">
    <h3><?= __('Magazines') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('game_id') ?></th>
                <th><?= $this->Paginator->sort('issue') ?></th>
                <th><?= $this->Paginator->sort('magazine_type') ?></th>
                <th><?= $this->Paginator->sort('magazine') ?></th>
                <th><?= $this->Paginator->sort('page') ?></th>
                <th><?= $this->Paginator->sort('url') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($magazines as $magazine): ?>
            <tr>
                <td><?= $this->Number->format($magazine->id) ?></td>
                <td><?= $magazine->has('game') ? $this->Html->link($magazine->game->id, ['controller' => 'Games', 'action' => 'view', $magazine->game->id]) : '' ?></td>
                <td><?= h($magazine->issue) ?></td>
                <td><?= h($magazine->magazine_type) ?></td>
                <td><?= h($magazine->magazine) ?></td>
                <td><?= $this->Number->format($magazine->page) ?></td>
                <td><?= h($magazine->url) ?></td>
                <td><?= $this->Number->format($magazine->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $magazine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $magazine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id)]) ?>
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
