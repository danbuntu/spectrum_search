<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Originalprice'), ['action' => 'edit', $originalprice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Originalprice'), ['action' => 'delete', $originalprice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $originalprice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Originalprices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Originalprice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="originalprices view large-9 medium-8 columns content">
    <h3><?= h($originalprice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $originalprice->has('game') ? $this->Html->link($originalprice->game->id, ['controller' => 'Games', 'action' => 'view', $originalprice->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Amount') ?></th>
            <td><?= h($originalprice->amount) ?></td>
        </tr>
        <tr>
            <th><?= __('Currency') ?></th>
            <td><?= h($originalprice->currency) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($originalprice->id) ?></td>
        </tr>
    </table>
</div>
