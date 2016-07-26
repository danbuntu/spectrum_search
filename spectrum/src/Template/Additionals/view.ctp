<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Additional'), ['action' => 'edit', $additional->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Additional'), ['action' => 'delete', $additional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $additional->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Additionals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Additional'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="additionals view large-9 medium-8 columns content">
    <h3><?= h($additional->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $additional->has('game') ? $this->Html->link($additional->game->id, ['controller' => 'Games', 'action' => 'view', $additional->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Filename') ?></th>
            <td><?= h($additional->filename) ?></td>
        </tr>
        <tr>
            <th><?= __('Size') ?></th>
            <td><?= h($additional->size) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($additional->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($additional->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($additional->id) ?></td>
        </tr>
    </table>
</div>
