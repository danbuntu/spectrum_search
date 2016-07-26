<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Otheradditional'), ['action' => 'edit', $otheradditional->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Otheradditional'), ['action' => 'delete', $otheradditional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otheradditional->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Otheradditionals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Otheradditional'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="otheradditionals view large-9 medium-8 columns content">
    <h3><?= h($otheradditional->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $otheradditional->has('game') ? $this->Html->link($otheradditional->game->id, ['controller' => 'Games', 'action' => 'view', $otheradditional->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($otheradditional->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Info') ?></th>
            <td><?= h($otheradditional->info) ?></td>
        </tr>
        <tr>
            <th><?= __('Target') ?></th>
            <td><?= h($otheradditional->target) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($otheradditional->id) ?></td>
        </tr>
    </table>
</div>
