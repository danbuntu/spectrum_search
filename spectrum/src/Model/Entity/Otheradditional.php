<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Otheradditional Entity
 *
 * @property int $id
 * @property int $game_id
 * @property string $type
 * @property string $info
 * @property string $target
 *
 * @property \App\Model\Entity\Game $game
 */
class Otheradditional extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
