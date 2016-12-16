<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Municipalite Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description1
 * @property string $description2
 * @property string $slogan1
 * @property string $slogan2
 * @property int $puntuation1
 * @property int $puntuation2
 * @property int $puntuation3
 * @property string $name_puntuation1
 * @property string $name_puntuation2
 * @property string $name_puntuation3
 * @property string $photo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $groups_id
 *
 * @property \App\Model\Entity\Group $group
 */
class Municipalite extends Entity
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
