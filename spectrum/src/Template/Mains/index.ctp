<nav class="col-md-3" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="games index col-md-9 content">
    <h3><?= __('All Games') ?></h3>



    <div class="row">

       <h2>Random games</h2>

        <?php foreach ($randoms as $random) {

            ?>
        <div class="col-md-4">
           <?php echo '<h3>' , $random->fulltitle , '</h3>';

            $this->link->makeImgWithLink($random->_matchingData['Additionals']['url'], $random->id);
?>
        </div>
        <?php
        } ?>




    </div>



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


