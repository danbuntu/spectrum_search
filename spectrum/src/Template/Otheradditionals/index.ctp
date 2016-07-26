<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Otheradditional'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="otheradditionals index large-9 medium-8 columns content">
    <h3><?= __('Otheradditionals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('game_id') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('info') ?></th>
                <th><?= $this->Paginator->sort('target') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($otheradditionals as $otheradditional): ?>
            <tr>
                <td><?= $this->Number->format($otheradditional->id) ?></td>
                <td><?= $otheradditional->has('game') ? $this->Html->link($otheradditional->game->id, ['controller' => 'Games', 'action' => 'view', $otheradditional->game->id]) : '' ?></td>
                <td><?= h($otheradditional->type) ?></td>
                <td><?= h($otheradditional->info) ?></td>
                <td><?= h($otheradditional->target) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $otheradditional->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $otheradditional->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $otheradditional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otheradditional->id)]) ?>
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
