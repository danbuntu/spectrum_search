<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('View All Games'), ['action' => 'index']) ?> </li>
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
                <th><?= __('Image') ?></th>
            </tr>
            <?php foreach ($game->additionals as $additionals): ?>
            <tr>
                <td><?= h($additionals->id) ?></td>
                <td><?= h($additionals->game_id) ?></td>
                <td><?= h($additionals->filename) ?></td>
                <td><?= h($additionals->size) ?></td>
                <td><?= h($additionals->type) ?></td>
                <td><?= h($additionals->url) ?></td>
                <td><?php $this->link->makeAdditionals($additionals->url, $additionals->filename); ?></td>

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
            </tr>
            <?php foreach ($game->authors as $authors): ?>
            <tr>
                <td><?= h($authors->id) ?></td>
                <td><?= h($authors->game_id) ?></td>
                <td><?= h($authors->author) ?></td>
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
            </tr>
            <?php foreach ($game->budgetprices as $budgetprices): ?>
            <tr>
                <td><?= h($budgetprices->id) ?></td>
                <td><?= h($budgetprices->game_id) ?></td>
                <td><?= h($budgetprices->amount) ?></td>
                <td><?= h($budgetprices->currency) ?></td>
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
            </tr>
            <?php foreach ($game->controls as $controls): ?>
            <tr>
                <td><?= h($controls->id) ?></td>
                <td><?= h($controls->game_id) ?></td>
                <td><?= h($controls->control) ?></td>
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
            </tr>
            <?php foreach ($game->groups as $groups): ?>
            <tr>
                <td><?= h($groups->id) ?></td>
                <td><?= h($groups->game_id) ?></td>
                <td><?= h($groups->group) ?></td>
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
                <th>Link</th>
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
                <td><?php $this->link->makeMagazine($magazines->url); ?></td>

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
            </tr>
            <?php foreach ($game->originalprices as $originalprices): ?>
            <tr>
                <td><?= h($originalprices->id) ?></td>
                <td><?= h($originalprices->game_id) ?></td>
                <td><?= h($originalprices->amount) ?></td>
                <td><?= h($originalprices->currency) ?></td>
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
            </tr>
            <?php foreach ($game->otheradditionals as $otheradditionals): ?>
            <tr>
                <td><?= h($otheradditionals->id) ?></td>
                <td><?= h($otheradditionals->game_id) ?></td>
                <td><?= h($otheradditionals->type) ?></td>
                <td><?= h($otheradditionals->info) ?></td>
                <td><?= h($otheradditionals->target) ?></td>
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
            </tr>
            <?php foreach ($game->publishers as $publishers): ?>
            <tr>
                <td><?= h($publishers->id) ?></td>
                <td><?= h($publishers->game_id) ?></td>
                <td><?= h($publishers->name) ?></td>
                <td><?= h($publishers->country) ?></td>
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
            </tr>
            <?php foreach ($game->rereleasedbys as $rereleasedbys): ?>
            <tr>
                <td><?= h($rereleasedbys->id) ?></td>
                <td><?= h($rereleasedbys->game_id) ?></td>
                <td><?= h($rereleasedbys->country) ?></td>
                <td><?= h($rereleasedbys->rereleaased_as) ?></td>
                <td><?= h($rereleasedbys->name) ?></td>
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
            </tr>
            <?php foreach ($game->scores as $scores): ?>
            <tr>
                <td><?= h($scores->id) ?></td>
                <td><?= h($scores->game_id) ?></td>
                <td><?= h($scores->score) ?></td>
                <td><?= h($scores->votes) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
