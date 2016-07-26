<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Game Entity
 *
 * @property int $id
 * @property string $infoseekid
 * @property string $type
 * @property string $indexDesc
 * @property int $version
 * @property string $url
 * @property string $domain
 * @property string $path
 * @property string $subdomain
 * @property string $parenturl
 * @property string $anchor
 * @property string $found
 * @property string $fulltitle
 * @property int $yearofrelease
 * @property string $tieinlicence
 * @property string $machinetype
 * @property string $numberofplayers
 * @property string $messagelanguage
 * @property string $originalpublication
 * @property string $availability
 * @property string $protectionscheme
 * @property string $series
 * @property string $othersystems
 *
 * @property \App\Model\Entity\Additional[] $additionals
 * @property \App\Model\Entity\Author[] $authors
 * @property \App\Model\Entity\Budgetprice[] $budgetprices
 * @property \App\Model\Entity\Control[] $controls
 * @property \App\Model\Entity\Download[] $downloads
 * @property \App\Model\Entity\Group[] $groups
 * @property \App\Model\Entity\Magazine[] $magazines
 * @property \App\Model\Entity\Originalprice[] $originalprices
 * @property \App\Model\Entity\Otheradditional[] $otheradditionals
 * @property \App\Model\Entity\Publisher[] $publishers
 * @property \App\Model\Entity\Rereleasedby[] $rereleasedbys
 * @property \App\Model\Entity\Score[] $scores
 */
class Game extends Entity
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
