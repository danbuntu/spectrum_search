<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Additionals'), ['controller' => 'Additionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Additional'), ['controller' => 'Additionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Budgetprices'), ['controller' => 'Budgetprices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Budgetprice'), ['controller' => 'Budgetprices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Controls'), ['controller' => 'Controls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Control'), ['controller' => 'Controls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Downloads'), ['controller' => 'Downloads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Download'), ['controller' => 'Downloads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Magazines'), ['controller' => 'Magazines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Magazine'), ['controller' => 'Magazines', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Originalprices'), ['controller' => 'Originalprices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Originalprice'), ['controller' => 'Originalprices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Otheradditionals'), ['controller' => 'Otheradditionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Otheradditional'), ['controller' => 'Otheradditionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Publishers'), ['controller' => 'Publishers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publisher'), ['controller' => 'Publishers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rereleasedbys'), ['controller' => 'Rereleasedbys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rereleasedby'), ['controller' => 'Rereleasedbys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Scores'), ['controller' => 'Scores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Score'), ['controller' => 'Scores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="games form large-9 medium-8 columns content">
    <?= $this->Form->create($game) ?>
    <fieldset>
        <legend><?= __('Add Game') ?></legend>
        <?php
            echo $this->Form->input('infoseekid');
            echo $this->Form->input('type');
            echo $this->Form->input('indexDesc');
            echo $this->Form->input('version');
            echo $this->Form->input('url');
            echo $this->Form->input('domain');
            echo $this->Form->input('path');
            echo $this->Form->input('subdomain');
            echo $this->Form->input('parenturl');
            echo $this->Form->input('anchor');
            echo $this->Form->input('found');
            echo $this->Form->input('fulltitle');
            echo $this->Form->input('yearofrelease');
            echo $this->Form->input('tieinlicence');
            echo $this->Form->input('machinetype');
            echo $this->Form->input('numberofplayers');
            echo $this->Form->input('messagelanguage');
            echo $this->Form->input('originalpublication');
            echo $this->Form->input('availability');
            echo $this->Form->input('protectionscheme');
            echo $this->Form->input('series');
            echo $this->Form->input('othersystems');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


