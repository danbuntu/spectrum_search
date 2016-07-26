<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $originalprice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $originalprice->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Originalprices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="originalprices form large-9 medium-8 columns content">
    <?= $this->Form->create($originalprice) ?>
    <fieldset>
        <legend><?= __('Edit Originalprice') ?></legend>
        <?php
            echo $this->Form->input('game_id', ['options' => $games, 'empty' => true]);
            echo $this->Form->input('amount');
            echo $this->Form->input('currency');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
