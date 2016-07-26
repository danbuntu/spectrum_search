<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Controls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controls form large-9 medium-8 columns content">
    <?= $this->Form->create($control) ?>
    <fieldset>
        <legend><?= __('Add Control') ?></legend>
        <?php
            echo $this->Form->input('game_id', ['options' => $games, 'empty' => true]);
            echo $this->Form->input('control');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>