<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Obra Entity
 *
 * @property int $id
 * @property string $titulo
 * @property int|null $id_artista
 * @property \Cake\I18n\FrozenDate|null $data_obra
 * @property string|null $tecnica
 * @property string|null $dimensoes
 * @property string|null $aquisicao
 * @property int|null $id_categoria
 * @property string|null $status
 */
class Obra extends Entity
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
        'titulo' => true,
        'id_artista' => true,
        'data_obra' => true,
        'tecnica' => true,
        'dimensoes' => true,
        'aquisicao' => true,
        'id_categoria' => true,
        'status' => true,
    ];
}
