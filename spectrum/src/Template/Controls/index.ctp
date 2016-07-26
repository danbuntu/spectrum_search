<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Control'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controls index large-9 medium-8 columns content">
    <h3><?= __('Controls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('game_id') ?></th>
                <th><?= $this->Paginator->sort('control') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($controls as $control): ?>
            <tr>
                <td><?= $this->Number->format($control->id) ?></td>
                <td><?= $control->has('game') ? $this->Html->link($control->game->id, ['controller' => 'Games', 'action' => 'view', $control->game->id]) : '' ?></td>
                <td><?= h($control->control) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $control->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $control->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $control->id], ['confirm' => __('Are you sure you want to delete # {0}?', $control->id)]) ?>
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
