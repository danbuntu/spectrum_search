<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Control'), ['action' => 'edit', $control->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Control'), ['action' => 'delete', $control->id], ['confirm' => __('Are you sure you want to delete # {0}?', $control->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Controls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Control'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="controls view large-9 medium-8 columns content">
    <h3><?= h($control->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $control->has('game') ? $this->Html->link($control->game->id, ['controller' => 'Games', 'action' => 'view', $control->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Control') ?></th>
            <td><?= h($control->control) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($control->id) ?></td>
        </tr>
    </table>
</div>
