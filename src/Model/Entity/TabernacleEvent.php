<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TabernacleEvent Entity
 *
 * @property int $id
 * @property string $event_fullname
 * @property string $event_full_description
 * @property string $event_location
 * @property \Cake\I18n\FrozenTime $event_begin_date
 * @property \Cake\I18n\FrozenTime $event_end_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 * @property string $event_guest
 * @property string $event_poster
 */
class TabernacleEvent extends Entity
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
