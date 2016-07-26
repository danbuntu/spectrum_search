<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $additional->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $additional->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Additionals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="additionals form large-9 medium-8 columns content">
    <?= $this->Form->create($additional) ?>
    <fieldset>
        <legend><?= __('Edit Additional') ?></legend>
        <?php
            echo $this->Form->input('game_id', ['options' => $games, 'empty' => true]);
            echo $this->Form->input('filename');
            echo $this->Form->input('size');
            echo $this->Form->input('type');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
