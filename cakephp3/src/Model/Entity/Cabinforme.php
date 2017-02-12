<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cabinforme Entity
 *
 * @property int $numexp
 * @property int $estexpediente_numexp
 * @property \Cake\I18n\Time $fecha_envio
 * @property \Cake\I18n\Time $fecha_recepcion
 * @property string $valoracion_inf
 * @property string $comentarios
 */
class Cabinforme extends Entity
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
        'numexp' => false
    ];
}
