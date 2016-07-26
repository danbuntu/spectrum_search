<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Score'), ['action' => 'edit', $score->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Score'), ['action' => 'delete', $score->id], ['confirm' => __('Are you sure you want to delete # {0}?', $score->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Scores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scores view large-9 medium-8 columns content">
    <h3><?= h($score->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $score->has('game') ? $this->Html->link($score->game->id, ['controller' => 'Games', 'action' => 'view', $score->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($score->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Score') ?></th>
            <td><?= $this->Number->format($score->score) ?></td>
        </tr>
        <tr>
            <th><?= __('Votes') ?></th>
            <td><?= $this->Number->format($score->votes) ?></td>
        </tr>
    </table>
</div>
