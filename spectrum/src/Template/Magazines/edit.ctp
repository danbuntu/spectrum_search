<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $magazine->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Magazines'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="magazines form large-9 medium-8 columns content">
    <?= $this->Form->create($magazine) ?>
    <fieldset>
        <legend><?= __('Edit Magazine') ?></legend>
        <?php
            echo $this->Form->input('game_id', ['options' => $games, 'empty' => true]);
            echo $this->Form->input('issue');
            echo $this->Form->input('magazine_type');
            echo $this->Form->input('magazine');
            echo $this->Form->input('page');
            echo $this->Form->input('url');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
