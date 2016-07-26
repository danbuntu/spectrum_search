<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Game'), ['action' => 'edit', $game->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Game'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Additionals'), ['controller' => 'Additionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Additional'), ['controller' => 'Additionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Budgetprices'), ['controller' => 'Budgetprices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Budgetprice'), ['controller' => 'Budgetprices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Controls'), ['controller' => 'Controls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Control'), ['controller' => 'Controls', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Downloads'), ['controller' => 'Downloads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Download'), ['controller' => 'Downloads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Magazines'), ['controller' => 'Magazines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Magazine'), ['controller' => 'Magazines', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Originalprices'), ['controller' => 'Originalprices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Originalprice'), ['controller' => 'Originalprices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Otheradditionals'), ['controller' => 'Otheradditionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Otheradditional'), ['controller' => 'Otheradditionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publishers'), ['controller' => 'Publishers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publisher'), ['controller' => 'Publishers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rereleasedbys'), ['controller' => 'Rereleasedbys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rereleasedby'), ['controller' => 'Rereleasedbys', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Scores'), ['controller' => 'Scores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score'), ['controller' => 'Scores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="games view large-9 medium-8 columns content">
    <h3><?= h($game->id) ?>-<?= h($game->fulltitle) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Infoseekid') ?></th>
            <td><?= h($game->infoseekid) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($game->type) ?></td>
        </tr>
        <tr>
            <th><?= __('IndexDesc') ?></th>
            <td><?= h($game->indexDesc) ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($game->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Domain') ?></th>
            <td><?= h($game->domain) ?></td>
        </tr>
        <tr>
            <th><?= __('Path') ?></th>
            <td><?= h($game->path) ?></td>
        </tr>
        <tr>
            <th><?= __('Subdomain') ?></th>
            <td><?= h($game->subdomain) ?></td>
        </tr>
        <tr>
            <th><?= __('Parenturl') ?></th>
            <td><?= h($game->parenturl) ?></td>
        </tr>
        <tr>
            <th><?= __('Anchor') ?></th>
            <td><?= h($game->anchor) ?></td>
        </tr>
        <tr>
            <th><?= __('Found') ?></th>
            <td><?= h($game->found) ?></td>
        </tr>
        <tr>
            <th><?= __('Fulltitle') ?></th>
            <td><?= h($game->fulltitle) ?></td>
        </tr>
        <tr>
            <th><?= __('Tieinlicence') ?></th>
            <td><?= h($game->tieinlicence) ?></td>
        </tr>
        <tr>
            <th><?= __('Machinetype') ?></th>
            <td><?= h($game->machinetype) ?></td>
        </tr>
        <tr>
            <th><?= __('Numberofplayers') ?></th>
            <td><?= h($game->numberofplayers) ?></td>
        </tr>
        <tr>
            <th><?= __('Messagelanguage') ?></th>
            <td><?= h($game->messagelanguage) ?></td>
        </tr>
        <tr>
            <th><?= __('Originalpublication') ?></th>
            <td><?= h($game->originalpublication) ?></td>
        </tr>
        <tr>
            <th><?= __('Availability') ?></th>
            <td><?= h($game->availability) ?></td>
        </tr>
        <tr>
            <th><?= __('Protectionscheme') ?></th>
            <td><?= h($game->protectionscheme) ?></td>
        </tr>
        <tr>
            <th><?= __('Series') ?></th>
            <td><?= h($game->series) ?></td>
        </tr>
        <tr>
            <th><?= __('Othersystems') ?></th>
            <td><?= h($game->othersystems) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($game->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Version') ?></th>
            <td><?= $this->Number->format($game->version) ?></td>
        </tr>
        <tr>
            <th><?= __('Yearofrelease') ?></th>
            <td><?= $this->Number->format($game->yearofrelease) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Additionals') ?></h4>
        <?php if (!empty($game->additionals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Filename') ?></th>
                <th><?= __('Size') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Url') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->additionals as $additionals): ?>
            <tr>
                <td><?= h($additionals->id) ?></td>
                <td><?= h($additionals->game_id) ?></td>
                <td><?= h($additionals->filename) ?></td>
                <td><?= h($additionals->size) ?></td>
                <td><?= h($additionals->type) ?></td>
                <td><?= h($additionals->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Additionals', 'action' => 'view', $additionals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Additionals', 'action' => 'edit', $additionals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Additionals', 'action' => 'delete', $additionals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $additionals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Authors') ?></h4>
        <?php if (!empty($game->authors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Author') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->authors as $authors): ?>
            <tr>
                <td><?= h($authors->id) ?></td>
                <td><?= h($authors->game_id) ?></td>
                <td><?= h($authors->author) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Authors', 'action' => 'view', $authors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Authors', 'action' => 'edit', $authors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Authors', 'action' => 'delete', $authors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Budgetprices') ?></h4>
        <?php if (!empty($game->budgetprices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Amount') ?></th>
                <th><?= __('Currency') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->budgetprices as $budgetprices): ?>
            <tr>
                <td><?= h($budgetprices->id) ?></td>
                <td><?= h($budgetprices->game_id) ?></td>
                <td><?= h($budgetprices->amount) ?></td>
                <td><?= h($budgetprices->currency) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Budgetprices', 'action' => 'view', $budgetprices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Budgetprices', 'action' => 'edit', $budgetprices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Budgetprices', 'action' => 'delete', $budgetprices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $budgetprices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Controls') ?></h4>
        <?php if (!empty($game->controls)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Control') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->controls as $controls): ?>
            <tr>
                <td><?= h($controls->id) ?></td>
                <td><?= h($controls->game_id) ?></td>
                <td><?= h($controls->control) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Controls', 'action' => 'view', $controls->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Controls', 'action' => 'edit', $controls->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Controls', 'action' => 'delete', $controls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controls->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Downloads') ?></h4>
        <?php if (!empty($game->downloads)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Filename') ?></th>
                <th><?= __('Code') ?></th>
                <th><?= __('Size') ?></th>
                <th><?= __('Year') ?></th>
                <th><?= __('Origin') ?></th>
                <th><?= __('Dl') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Barcode') ?></th>
                <th><?= __('Url') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->downloads as $downloads): ?>
            <tr>
                <td><?= h($downloads->id) ?></td>
                <td><?= h($downloads->game_id) ?></td>
                <td><?= h($downloads->filename) ?></td>
                <td><?= h($downloads->code) ?></td>
                <td><?= h($downloads->size) ?></td>
                <td><?= h($downloads->year) ?></td>
                <td><?= h($downloads->origin) ?></td>
                <td><?= h($downloads->dl) ?></td>
                <td><?= h($downloads->type) ?></td>
                <td><?= h($downloads->barcode) ?></td>
                <td><?= h($downloads->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Downloads', 'action' => 'view', $downloads->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Downloads', 'action' => 'edit', $downloads->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Downloads', 'action' => 'delete', $downloads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $downloads->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Groups') ?></h4>
        <?php if (!empty($game->groups)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Group') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->groups as $groups): ?>
            <tr>
                <td><?= h($groups->id) ?></td>
                <td><?= h($groups->game_id) ?></td>
                <td><?= h($groups->group) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groups->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Magazines') ?></h4>
        <?php if (!empty($game->magazines)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Issue') ?></th>
                <th><?= __('Magazine Type') ?></th>
                <th><?= __('Magazine') ?></th>
                <th><?= __('Page') ?></th>
                <th><?= __('Url') ?></th>
                <th><?= __('Type') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->magazines as $magazines): ?>
            <tr>
                <td><?= h($magazines->id) ?></td>
                <td><?= h($magazines->game_id) ?></td>
                <td><?= h($magazines->issue) ?></td>
                <td><?= h($magazines->magazine_type) ?></td>
                <td><?= h($magazines->magazine) ?></td>
                <td><?= h($magazines->page) ?></td>
                <td><?= h($magazines->url) ?></td>
                <td><?= h($magazines->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Magazines', 'action' => 'view', $magazines->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Magazines', 'action' => 'edit', $magazines->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Magazines', 'action' => 'delete', $magazines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazines->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Originalprices') ?></h4>
        <?php if (!empty($game->originalprices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Amount') ?></th>
                <th><?= __('Currency') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->originalprices as $originalprices): ?>
            <tr>
                <td><?= h($originalprices->id) ?></td>
                <td><?= h($originalprices->game_id) ?></td>
                <td><?= h($originalprices->amount) ?></td>
                <td><?= h($originalprices->currency) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Originalprices', 'action' => 'view', $originalprices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Originalprices', 'action' => 'edit', $originalprices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Originalprices', 'action' => 'delete', $originalprices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $originalprices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Otheradditionals') ?></h4>
        <?php if (!empty($game->otheradditionals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Info') ?></th>
                <th><?= __('Target') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->otheradditionals as $otheradditionals): ?>
            <tr>
                <td><?= h($otheradditionals->id) ?></td>
                <td><?= h($otheradditionals->game_id) ?></td>
                <td><?= h($otheradditionals->type) ?></td>
                <td><?= h($otheradditionals->info) ?></td>
                <td><?= h($otheradditionals->target) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Otheradditionals', 'action' => 'view', $otheradditionals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Otheradditionals', 'action' => 'edit', $otheradditionals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Otheradditionals', 'action' => 'delete', $otheradditionals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otheradditionals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Publishers') ?></h4>
        <?php if (!empty($game->publishers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Country') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->publishers as $publishers): ?>
            <tr>
                <td><?= h($publishers->id) ?></td>
                <td><?= h($publishers->game_id) ?></td>
                <td><?= h($publishers->name) ?></td>
                <td><?= h($publishers->country) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Publishers', 'action' => 'view', $publishers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Publishers', 'action' => 'edit', $publishers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Publishers', 'action' => 'delete', $publishers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publishers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Rereleasedbys') ?></h4>
        <?php if (!empty($game->rereleasedbys)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Country') ?></th>
                <th><?= __('Rereleaased As') ?></th>
                <th><?= __('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->rereleasedbys as $rereleasedbys): ?>
            <tr>
                <td><?= h($rereleasedbys->id) ?></td>
                <td><?= h($rereleasedbys->game_id) ?></td>
                <td><?= h($rereleasedbys->country) ?></td>
                <td><?= h($rereleasedbys->rereleaased_as) ?></td>
                <td><?= h($rereleasedbys->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rereleasedbys', 'action' => 'view', $rereleasedbys->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rereleasedbys', 'action' => 'edit', $rereleasedbys->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rereleasedbys', 'action' => 'delete', $rereleasedbys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rereleasedbys->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Scores') ?></h4>
        <?php if (!empty($game->scores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('Score') ?></th>
                <th><?= __('Votes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->scores as $scores): ?>
            <tr>
                <td><?= h($scores->id) ?></td>
                <td><?= h($scores->game_id) ?></td>
                <td><?= h($scores->score) ?></td>
                <td><?= h($scores->votes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Scores', 'action' => 'view', $scores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Scores', 'action' => 'edit', $scores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Scores', 'action' => 'delete', $scores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
