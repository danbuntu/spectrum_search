<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publisher'), ['action' => 'edit', $publisher->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publisher'), ['action' => 'delete', $publisher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publishers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publisher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publishers view large-9 medium-8 columns content">
    <h3><?= h($publisher->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $publisher->has('game') ? $this->Html->link($publisher->game->id, ['controller' => 'Games', 'action' => 'view', $publisher->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($publisher->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($publisher->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($publisher->id) ?></td>
        </tr>
    </table>
</div>
