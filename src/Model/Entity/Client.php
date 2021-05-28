<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property int|null $code
 * @property string|null $name
 * @property string|null $fantasy
 * @property string|null $address
 * @property string|null $city
 * @property int|null $zip_code
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $email
 * @property int|null $cuit
 * @property int|null $d1
 * @property int|null $d2
 * @property int|null $d3
 * @property string|null $notes
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Quot[] $quots
 */
class Client extends Entity
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
        'code' => true,
        'name' => true,
        'fantasy' => true,
        'address' => true,
        'city' => true,
        'zip_code' => true,
        'phone' => true,
        'fax' => true,
        'email' => true,
        'cuit' => true,
        'd1' => true,
        'd2' => true,
        'd3' => true,
        'notes' => true,
        'created' => true,
        'modified' => true,
        'quots' => true,
    ];
}
