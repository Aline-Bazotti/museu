<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Exibico Entity
 *
 * @property int $id
 * @property string|null $corredor
 * @property int|null $andar
 * @property int $id_obra
 */
class Exibico extends Entity
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
        'corredor' => true,
        'andar' => true,
        'id_obra' => true,
    ];
}
