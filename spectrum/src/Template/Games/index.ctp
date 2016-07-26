<nav class="col-md-3" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?></li>
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
<div class="games index col-md-9 content">
    <h3><?= __('All Games') ?></h3>


    <div class="row">
        <h4>Quick Search</h4>

        <div class="form-group">
            <label for="search" class="col-sm-2 control-label">Quick Search</label>
            <div class="col-sm-10">
                <input type="search" class="form-control" id="search" placeholder="Search">
            </div>
        </div>

    </div>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('infoseek_id') ?></th>
                <th><?= $this->Paginator->sort('index_Desc') ?></th>
                <th><?= $this->Paginator->sort('fulltitle') ?></th>
                <th><?= $this->Paginator->sort('year_of_release') ?></th>
                <th><?= $this->Paginator->sort('machine_type') ?></th>
                <th><?= $this->Paginator->sort('number_of_players') ?></th>
                <th><?= $this->Paginator->sort('message_language') ?></th>
                <th><?= $this->Paginator->sort('original_publication') ?></th>
                <th><?= $this->Paginator->sort('availability') ?></th>
                <th><?= $this->Paginator->sort('protection_scheme') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($games as $game): ?>
            <tr>
                <td><?= $game->id ?></td>
                <td><?= h($game->infoseekid) ?></td>
                <td><?= h($game->indexDesc) ?></td>
                <td><?= h($game->fulltitle) ?></td>
                <td><?= h($game->yearofrelease) ?></td>
                <td><?= h($game->machinetype) ?></td>
                <td><?= h($game->numberofplayers) ?></td>
                <td><?= h($game->messagelanguage) ?></td>
                <td><?= h($game->originalpublication) ?></td>
                <td><?= h($game->availability) ?></td>
                <td><?= h($game->protectionscheme) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="fa fa-search"></i> View'), ['action' => 'view', $game->id], ['class' => 'btn btn-xs btn-info', 'escape' => false]) ?>
                    <?= $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), ['action' => 'edit', $game->id], ['class' => 'btn btn-xs btn-warning', 'escape' => false]) ?>
                    <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>Delete'), ['action' => 'delete', $game->id], ['class' => 'btn btn-xs btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


