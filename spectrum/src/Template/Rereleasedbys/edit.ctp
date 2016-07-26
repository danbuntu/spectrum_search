<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rereleasedby->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rereleasedby->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rereleasedbys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rereleasedbys form large-9 medium-8 columns content">
    <?= $this->Form->create($rereleasedby) ?>
    <fieldset>
        <legend><?= __('Edit Rereleasedby') ?></legend>
        <?php
            echo $this->Form->input('game_id', ['options' => $games, 'empty' => true]);
            echo $this->Form->input('country');
            echo $this->Form->input('rereleaased_as');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
