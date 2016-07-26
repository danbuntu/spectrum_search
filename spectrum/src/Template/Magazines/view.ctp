<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Magazine'), ['action' => 'edit', $magazine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Magazine'), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Magazines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Magazine'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="magazines view large-9 medium-8 columns content">
    <h3><?= h($magazine->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $magazine->has('game') ? $this->Html->link($magazine->game->id, ['controller' => 'Games', 'action' => 'view', $magazine->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Issue') ?></th>
            <td><?= h($magazine->issue) ?></td>
        </tr>
        <tr>
            <th><?= __('Magazine Type') ?></th>
            <td><?= h($magazine->magazine_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Magazine') ?></th>
            <td><?= h($magazine->magazine) ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($magazine->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($magazine->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Page') ?></th>
            <td><?= $this->Number->format($magazine->page) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($magazine->type) ?></td>
        </tr>
    </table>
</div>
