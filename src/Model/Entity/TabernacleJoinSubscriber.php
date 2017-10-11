<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TabernacleJoinSubscriber Entity
 *
 * @property int $id
 * @property string $subscriber_fullname
 * @property string $subscriber_email
 * @property string $subscriber_contact
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 */
class TabernacleJoinSubscriber extends Entity
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
