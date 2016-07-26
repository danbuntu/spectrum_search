<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rereleasedby'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rereleasedbys index large-9 medium-8 columns content">
    <h3><?= __('Rereleasedbys') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('game_id') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('rereleaased_as') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rereleasedbys as $rereleasedby): ?>
            <tr>
                <td><?= $this->Number->format($rereleasedby->id) ?></td>
                <td><?= $rereleasedby->has('game') ? $this->Html->link($rereleasedby->game->id, ['controller' => 'Games', 'action' => 'view', $rereleasedby->game->id]) : '' ?></td>
                <td><?= h($rereleasedby->country) ?></td>
                <td><?= h($rereleasedby->rereleaased_as) ?></td>
                <td><?= h($rereleasedby->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rereleasedby->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rereleasedby->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rereleasedby->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rereleasedby->id)]) ?>
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
