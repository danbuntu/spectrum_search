<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Download'), ['action' => 'edit', $download->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Download'), ['action' => 'delete', $download->id], ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Downloads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Download'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="downloads view large-9 medium-8 columns content">
    <h3><?= h($download->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $download->has('game') ? $this->Html->link($download->game->id, ['controller' => 'Games', 'action' => 'view', $download->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Filename') ?></th>
            <td><?= h($download->filename) ?></td>
        </tr>
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($download->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Origin') ?></th>
            <td><?= h($download->origin) ?></td>
        </tr>
        <tr>
            <th><?= __('Dl') ?></th>
            <td><?= h($download->dl) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($download->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Barcode') ?></th>
            <td><?= h($download->barcode) ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($download->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($download->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Size') ?></th>
            <td><?= $this->Number->format($download->size) ?></td>
        </tr>
        <tr>
            <th><?= __('Year') ?></th>
            <td><?= $this->Number->format($download->year) ?></td>
        </tr>
    </table>
</div>
