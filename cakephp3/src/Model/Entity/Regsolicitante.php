<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Regsolicitante Entity
 *
 * @property int $numreg
 * @property int $tipolicencia_id
 * @property string $dni
 * @property string $nombre
 * @property \Cake\I18n\Time $fecha
 * @property int $tipo_licencia
 * @property string $doc_presentada
 * @property \Cake\I18n\Time $fecha_in
 * @property \Cake\I18n\Time $fecha_out
 * @property string $usuario_actual_gest
 *
 * @property \App\Model\Entity\Tipolicencia $tipolicencia
 */
class Regsolicitante extends Entity
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
        'numreg' => false
    ];
}
