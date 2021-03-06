<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property string $razao_social
 * @property string $nome_fantasia
 * @property string $cnpj
 * @property string|null $logo
 * @property \Cake\I18n\FrozenTime|null $criada_em
 */
class Empresa extends Entity
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
        'razao_social' => true,
        'nome_fantasia' => true,
        'cnpj' => true,
        'logo' => true,
        'criada_em' => true,
    ];
}
