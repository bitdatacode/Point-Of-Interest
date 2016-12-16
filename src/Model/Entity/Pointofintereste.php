<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pointofintereste Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slogan1
 * @property string $description1
 * @property string $description2
 * @property string $titele1
 * @property string $titele2
 * @property float $price
 * @property string $horario
 * @property string $photo
 * @property string $address
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $users_id
 * @property int $municipalites_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Municipalite $municipalite
 */
class Pointofintereste extends Entity
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
