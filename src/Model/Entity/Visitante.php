<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visitante Entity
 *
 * @property int $id
 * @property string $nome
 * @property \Cake\I18n\FrozenDate $datanasc
 * @property string $email
 * @property string|null $cpf
 * @property string|null $sexo
 * @property \Cake\I18n\FrozenTime|null $visita_em
 */
class Visitante extends Entity
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
        'nome' => true,
        'datanasc' => true,
        'email' => true,
        'cpf' => true,
        'sexo' => true,
        'visita_em' => true,
    ];
}
