<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $download->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Downloads'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="downloads form large-9 medium-8 columns content">
    <?= $this->Form->create($download) ?>
    <fieldset>
        <legend><?= __('Edit Download') ?></legend>
        <?php
            echo $this->Form->input('game_id', ['options' => $games, 'empty' => true]);
            echo $this->Form->input('filename');
            echo $this->Form->input('code');
            echo $this->Form->input('size');
            echo $this->Form->input('year');
            echo $this->Form->input('origin');
            echo $this->Form->input('dl');
            echo $this->Form->input('type');
            echo $this->Form->input('barcode');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
