<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Score'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scores index large-9 medium-8 columns content">
    <h3><?= __('Scores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('game_id') ?></th>
                <th><?= $this->Paginator->sort('score') ?></th>
                <th><?= $this->Paginator->sort('votes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scores as $score): ?>
            <tr>
                <td><?= $this->Number->format($score->id) ?></td>
                <td><?= $score->has('game') ? $this->Html->link($score->game->id, ['controller' => 'Games', 'action' => 'view', $score->game->id]) : '' ?></td>
                <td><?= $this->Number->format($score->score) ?></td>
                <td><?= $this->Number->format($score->votes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $score->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $score->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $score->id], ['confirm' => __('Are you sure you want to delete # {0}?', $score->id)]) ?>
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
