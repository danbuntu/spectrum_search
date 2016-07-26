<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rereleasedby'), ['action' => 'edit', $rereleasedby->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rereleasedby'), ['action' => 'delete', $rereleasedby->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rereleasedby->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rereleasedbys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rereleasedby'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rereleasedbys view large-9 medium-8 columns content">
    <h3><?= h($rereleasedby->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $rereleasedby->has('game') ? $this->Html->link($rereleasedby->game->id, ['controller' => 'Games', 'action' => 'view', $rereleasedby->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($rereleasedby->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Rereleaased As') ?></th>
            <td><?= h($rereleasedby->rereleaased_as) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($rereleasedby->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($rereleasedby->id) ?></td>
        </tr>
    </table>
</div>
